<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    function index()
    {
        $order = session('order_id');
        if (!is_null($order)) {
            $order = Order::findOrFail($order);
        }
        return view('basket.index', compact('order'));
    }

    function basketPlace()
    {
        $orderId = session('order_id');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        return view('basket.place', compact('order'));
    }

    function basketAdd($productId)
    {
        $product = Product::find($productId);
        $orderId = session('order_id');
        if (is_null($orderId)) {
            $order = Order::create();
            session(['order_id' => $order->id]);
        } else {
            $order = Order::find($orderId);
        }
        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if($product->checkQuantity($pivotRow->count)){
                $pivotRow->count++;
                $pivotRow->update();
            } else {
                session()->flash('worning', 'товара больше нет на складе');
                return redirect()->back();
            }
        } else {
            $order->products()->attach($productId);
        }

        if (Auth::check()) { 
            $order->user_id = Auth::id();
            $order->save();
        }
        // $product = Product::find($productId);
        session()->flash('success',  $product->title . ' добавлен в корзину');

        return redirect()->back();
    }

    function basketRemove($productId)
    {
        $orderId = session('order_id');
        if (is_null($orderId)) {
            return redirect()->route('basket.index');
        }
        $order = Order::find($orderId);

        if ($order->products->contains($productId)) {
            $pivotRow = $order->products()->where('product_id', $productId)->first()->pivot;
            if ($pivotRow->count < 2) {
                $order->products()->detach($productId);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }

            $product = Product::find($productId);

            session()->flash('worning',  $product->title . ' удален из корзины');

            return redirect()->route('basket.index');
        }
    }

    function confirm(Request $request)
    {
        $orderId = session('order_id');
        if (is_null($orderId)) {
            return redirect()->route('index');
        }
        $order = Order::find($orderId);
        $success = $order->saveOrder($request->name, $request->phone);
        if ($success) {
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else {
            session()->flesh('worning', 'ОШИБКА, попробуйте еще раз');
        }
        return redirect()->route('index');
    }
}
