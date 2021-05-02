<?php

namespace App\Classes;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class Basket
{
    protected $order;

    function __construct($createOrder = false)
    {
        $orderId = session('order_id');
        if (is_null($orderId) && $createOrder) {
            $data = [];
            if (Auth::check()) {
                $data['user_id'] = Auth::id();
            }
            $this->order = Order::create($data);
            session(['order_id' => $this->order->id]);
        } else {
            $this->order = Order::findOrFail($orderId);
        }
    }

    function getOrder()
    {
        return $this->order;
    }

    function countAvaliable()
    {
        foreach($this->order->products as $orderProduct) {
            dd($this->getPivotRow);
            dd($orderProduct->quantity);
        }
    }

    function saveOrder($name, $phon)
    {
        if (!$this->countAvaliable()) {
            return false;
        }
        return $this->order->saveOrder($name, $phon);
    }

    function removeProduct(Product $product)
    {
        if ($this->order->products->contains($product->id)) {
            $pivotRow = $this->getPivotRow($product);
            if ($pivotRow->count < 2) {
                $this->order->products()->detach($product->id);
            } else {
                $pivotRow->count--;
                $pivotRow->update();
            }
        }
        Order::changeFullSum(-$product->price);
    }

    function addProduct(Product $product)
    {
        if ($this->order->products->contains($product->id)) {
            $pivotRow = $this->getPivotRow($product);
            $pivotRow->count++;
            if ($pivotRow->count > $product->quantity) {
                return false;
            }
            $pivotRow->update();
            return redirect()->back();
        } else {
            if ($product->quantity == 0) {
                return false;
            }
            $this->order->products()->attach($product->id);
        }
        Order::changeFullSum($product->price);
        return true;
    }

    function getPivotRow(Product $product)
    {
        return $this->order->products()->where('product_id', $product->id)->first()->pivot;
    }
}
