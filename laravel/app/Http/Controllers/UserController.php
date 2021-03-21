<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function create()
    {
        return view('login-end-create');
    }

    function store(Request $request)
    {
        $request->validate([
            'username' => 'requried',
            'email' => 'requried|email|unique:users',
            'password' => 'requried|confirmed',
        ]);
    }
}
