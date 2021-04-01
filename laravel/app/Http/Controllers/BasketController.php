<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    function index()
    {
        return view('front.basket.index');
    }

    function checkout()
    {
        return view('front.basket.checkout');
    }
}
