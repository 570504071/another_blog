<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UsersController extends Controller
{
    protected $request;

    public function showSignupForm(Request $request)
    {
        return view('signup');
    }

    public function signup(Request $request)
    {
        // dd($request->all());
        $messages = [
            'password.required' => '请填写您的密码',
            'password.confirmed' => '密码不一致',
            'password.min' => '密码最短为4位',
        ];

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:4|confirmed',
        ], $messages);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect()->route('get_login');
    }

    public function showLoginForm(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt([
                'password' => $request->input('password'),
                'email' => $request->input('email'),
            ]))
        {
            return redirect()->route('get_add');
        }

        return redirect()->route('get_login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
