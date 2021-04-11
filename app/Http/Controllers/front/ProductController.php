<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        $milkProducts = Product::where('category_id', 1)->get();
        $meetProducts = Product::where('category_id', 2)->get();
        return view('front.products', compact('milkProducts', 'meetProducts'));
    }

    function show($id)
    {
        $milkProducts = Product::where('category_id', 1)->get();
        $meetProducts = Product::where('category_id', 2)->get();
        $product = Product::findOrFail($id);
        return view('front.single', compact('product', 'milkProducts', 'meetProducts'));
    }

    function meet()
    {
        $meetProducts = Product::where('category_id', 2)->get();
        return view('front.meet', compact('meetProducts'));
    }

    function milk()
    {
        $milkProducts = Product::where('category_id', 1)->get();
        return view('front.milk', compact('milkProducts'));
    }
}
