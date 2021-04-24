<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function index()
    {
        return view('admin.index');
    }

    function orders()
    {
        $orders = Order::with('products')->active()->paginate(10);
        return view('admin.orders', compact('orders'));
    }

    function show(Order $order)
    {
        return view('admin.showOrders', compact('order'));
    }
}
