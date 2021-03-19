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

    // function fags()
    // {
    //     return view('front.fags');
    // }

    // function fags()
    // {
    //     return view('front.fags');
    // }

    // function fags()
    // {
    //     return view('front.fags');
    // }
}
