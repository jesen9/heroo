<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request){
        $credentials=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials, true)){
            Session::put('login_session', $credentials);
            return redirect('/');
        }

        return redirect()->back()->with('message','Invalid login credentials.');
    }

    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
