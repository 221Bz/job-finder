<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            $user = auth()->user ();
            return view('news', compact("user")); // Untuk tamu, tampilkan form login
        }
        return view('news'); // Untuk user yang sudah login
    }
}