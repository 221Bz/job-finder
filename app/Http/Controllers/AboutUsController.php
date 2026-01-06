<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutUsController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            $user = auth()->user ();
            return view('aboutus', compact("user")); // Untuk tamu, tampilkan form login
        }
        return view('aboutus'); // Untuk user yang sudah login
    }
}