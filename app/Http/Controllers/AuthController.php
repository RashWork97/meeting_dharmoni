<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    //login controller
    public function showLogin()
    {
        return view('auth.login');
    }

    //register controller
    public function showRegister()
    {
        return view('auth.register');
    }
}
