<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Register User
    public function register(Request $request)
    {
        // Validate
        $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:3', 'confirmed']
        ]);

        dd('ok');

        // Register

        // Login

        // Redirect

        dd($request->username);
    }
}
