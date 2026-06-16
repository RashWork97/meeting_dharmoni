<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function login(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to authenticate the user
        if (auth()->attempt($request->only('email', 'password'))) {

            $request->session()->regenerate();

            return redirect('/main');
        }

        return back()->withErrors(['email' => 'Invalid credentials.']);
    }

    public function register(Request $request)
    {
        // Validate the request data
        $validated_data = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // Create the user
        $user = User::create([
            'name'=> $validated_data['username'],
            'email' => $validated_data['email'],
            'password' => Hash::make($validated_data['password']),
        ]);

        // Authenticate the user
        auth()->login($user);

        return redirect('main.home');
    }
}
