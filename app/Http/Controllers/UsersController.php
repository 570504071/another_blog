<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    //
    public function postLogin(Request $request)
    {
        Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);

        return redirect()->to('add_new_post');
    }

    public function getLogout(Request $request)
    {
        Auth::logout();

        return redirect()->to('index');
    }
}
