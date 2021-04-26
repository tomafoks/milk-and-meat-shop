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
        $popular = Product::where('hit', 1)->get();
        $product = Product::withTrashed()->findOrFail($id);
        return view('front.single', compact('product', 'popular'));
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
