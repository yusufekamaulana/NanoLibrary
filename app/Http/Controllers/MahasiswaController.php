<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function showProfile()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Pass the user data to the view
        return view('mhs.biodata', compact('user'));
    }
}
