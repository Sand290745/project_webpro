<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function loginForm() {
        return view('login-form');
    }

    function authenticate(Request $request) {
        $data = $request->all();
        $credentials = [
        'email' => $data['email'],
        'password' => $data['password'],
        ];

        if (Auth::attempt($credentials)) {session()->regenerate();
            return redirect()->intended(route('group-list'));
    }

        
        return redirect()->back()->withErrors([
        'credentials' => 'The provided credentials do not match our records.',
    ]);
}


    function logout() {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        
        return redirect()->route('login');
    }
}
