<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function create()
    {
        return view('admin.registration');
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required|confirmed',
            'email' => 'required|email|unique:users',
        ]);

        $user = User::create([
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'email' => $request->email,
        ]);
        session()->flash('success', 'регистрация пройдена');
        Auth::login($user);
        return redirect()->route('index');
    }
    
    function loginForm()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            session()->flash('success', 'Вы успешно авторизовались!');
            if(Auth::user()->is_admin){
                return redirect()->route('admin.index');
            } else {
                return redirect()->route('index');
            }
        }
        return redirect()->back()->with('error', 'ошибка авторизации');
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('login.create');
    }
}
