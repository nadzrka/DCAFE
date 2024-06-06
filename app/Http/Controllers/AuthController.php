<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // if (auth()->user()->role == 'admin') {
            //     return redirect('dashboard');
            // }
            return redirect('/');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function register()
    {
        return view('register');
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);

        return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('login');
    }
}
