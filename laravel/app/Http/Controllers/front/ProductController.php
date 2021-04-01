<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $milkProducts = Product::where('category_id', 5)->get();
        $meetProducts = Product::where('category_id', 4)->get();
        return view('front.products', compact('milkProducts', 'meetProducts'));
    }

    function show()
    {
        return view('front.single');
    }

    function meet()
    {
        $meetProducts = Product::where('category_id', 4)->get();
        return view('front.meet', compact('meetProducts'));
    }

    function milk()
    {
        $milkProducts = Product::where('category_id', 5)->get();
        return view('front.milk', compact('milkProducts'));
    }
}
