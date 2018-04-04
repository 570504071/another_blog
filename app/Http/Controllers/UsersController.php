<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

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
            // 密码是需要加密的，也可以定义在模型中方便复用
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('get_login');
    }

    public function showLoginForm(Request $request)
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
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
