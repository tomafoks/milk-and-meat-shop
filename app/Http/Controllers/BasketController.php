<?php

namespace App\Http\Controllers;

use App\Classes\Basket;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    function index()
    {
        $order = (new Basket())->getOrder();
        return view('basket.index', compact('order'));
    }

    function basketPlace()
    {
        $order = (new Basket())->getOrder();
        return view('basket.place', compact('order'));
    }

    function confirm(Request $request)
    {
        if ((new Basket())->saveOrder($request->name, $request->phone)) {
            session()->flash('success', 'Ваш заказ принят в обработку!');
        } else {
            session()->flesh('worning', 'ОШИБКА, попробуйте еще раз');
        }

        Order::eraseOrderSum();

        return redirect()->route('index');
    }

    function basketAdd(Product $product)
    {
        if ((new Basket(true))->addProduct($product)) {
            session()->flash('success',  $product->title . ' добавлен в корзину');
        } else {
            session()->flash('worning', 'товара больше нет на складе');
        }



        return redirect()->back();
    }

    function basketRemove(Product $product)
    {
        (new Basket())->removeProduct($product);

        session()->flash('worning',  $product->title . ' удален из корзины');

        return redirect()->route('basket.index');
    }
}
