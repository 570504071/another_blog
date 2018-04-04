<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
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

        $input = $request->all();

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:4|confirmed',
        ], $messages);

        User::create([
            'email' => $input['email'],
            'password' => $input['password'],
        ]);

        return redirect()->to('get_login');
    }

    public function showLoginForm(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        if(Auth::attempt([
                'name' => $request::input('name'),
                'email' => $request::input('email'),
            ]))
        {
            return redirect()->to('get_add');
        }

        return redirect()->to('get_login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
