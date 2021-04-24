<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function orders()
    {
        $orders = Auth::user()->orders()->with('products')->where('status', 1)->get();
        return view('front.orders', compact('orders'));
    }

    function ordersShow(Order $order)
    {
        if(!Auth::user()->orders->contains($order)){
            return back();
        }
        return view('front.showOrders', compact('order'));
    }
}
