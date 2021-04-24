<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        $newProducts = Product::where('new', 1)->limit(4)->get();
        return view('front.index', compact('newProducts'));
    }

    function about()
    {
        return view('front.about');
    }

    function faqs()
    {
        return view('front.faqs');
    }

    function households()
    {
        return view('front.households');
    }

    function shortCode()
    {
        return view('front.shortCode');
    }

    function events()
    {
        return view('front.events');
    }

    function checkout()
    {
        return view('front.checkout');
    }

    function services()
    {
        return view('front.services');
    }

    function mail()
    {
        return view('front.mail');
    }
}
