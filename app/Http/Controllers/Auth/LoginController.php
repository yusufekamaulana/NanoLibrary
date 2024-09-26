<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('users.login');
    }

    // Handle the login request
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'Email' => 'required|email',
            'Password' => 'required|string',
        ]);

        // Attempt to log the user in
        $credentials = [
            'Email' => $request->input('Email'),
            'password' => $request->input('Password'),
        ];

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed
            // Get the authenticated user's role
            $role = Auth::user()->Role;

            // Redirect based on role
            if ($role == 'admin') {
                return redirect()->intended('/adm-home');
            } elseif ($role == 'mahasiswa') {
                return redirect()->intended('/mhs-home');
            } else {
                // If role is not recognized, log out and redirect to login with error
                Auth::logout();
                return redirect('/login')->withErrors(['Email' => 'Role tidak dikenal.']);
            }
        }

        // Authentication failed
        return back()->withErrors([
            'Email' => 'Email atau kata sandi salah.',
        ])->withInput($request->only('Email', 'remember'));
    }
}

