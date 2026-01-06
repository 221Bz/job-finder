<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\JobFinder;

class ExploreController extends Controller
{
    public function index()
    {
        $jobfinders = JobFinder::latest()->get();
        $user = Auth::user(); // bisa null kalau belum login

        return view('explore', compact('jobfinders', 'user'));
    }
}
