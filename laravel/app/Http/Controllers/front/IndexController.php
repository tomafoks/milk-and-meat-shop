<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    function index()
    {
        return view('front.index');
    }

    function about()
    {
        return view('front.about');
    }

    function faqs()
    {
        return view('front.faqs');
    }

    function meet()
    {
        return view('front.meet');
    }

    function milk()
    {
        return view('front.milk');
    }

    function products()
    {
        return view('front.products');
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
