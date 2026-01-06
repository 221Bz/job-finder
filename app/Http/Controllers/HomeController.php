<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // null kalau belum login
        return view('home', compact("user"));
    }
    
}