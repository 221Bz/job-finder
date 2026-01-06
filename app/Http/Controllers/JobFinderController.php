<?php

namespace App\Http\Controllers;

use App\Models\JobFinder;
use Illuminate\Http\Request;

class JobFinderController extends Controller
{
    public function index(Request $request)
    {
        $jobfinders = JobFinder::all();
        return view('explore', compact('jobfinders'));
    }

    public function create()
    {
        return view('admin.form');
    }

    public function store(Request $request)
    {
        if (auth()->user()->hasRole('Admin')) {
            $validated = $request->validate([
                'logo' => 'required',
                'company' => 'required',
                'location' => 'required',
                'map_url' => 'required',
                'contact' => 'required',
            ]);
    
            if ($request->hasFile('logo')) {
                $validated['logo'] = $request->file('logo')->store('jobfinder-images', 'public');
            }
    
        } elseif (auth()->user()->hasRole('Perusahaan')) {
            $validated = $request->validate([
                'job_title' => 'required',
                'notes' => 'required',
                'age' => 'required',
                'salary' => 'required',
                'job_type' => 'required',
            ]);
        }

        JobFinder::create($validated);
    
        return redirect()->route('explore')->with('success', 'jobfinder berhasil ditambahkan');
    }

    public function edit(JobFinder $jobfinder)
    {
        return view('company.form', compact('jobfinder'));
    }

    public function update(Request $request, JobFinder $jobfinder)
    {
        $request->validate([
            'job_title' => 'required',
            'location' => 'required',
            'notes' => 'required',
            'age' => 'required',
            'salary' => 'required',
            'job_type' => 'required',
            'map_url' => 'required',
            'contact' => 'required',
        ]);

        $jobfinder->job_title = $request->input('job_title');
        $jobfinder->location = $request->input('location');
        $jobfinder->notes = $request->input('notes');
        $jobfinder->age = $request->input('age');
        $jobfinder->salary = $request->input('salary');
        $jobfinder->job_type = $request->input('job_type');
        $jobfinder->map_url = $request->input('map_url');
        $jobfinder->contact = $request->input('contact');
        $jobfinder->update();

        return redirect()->route('explore')->with('success', 'jobfinder berhasil diperbarui');        
    }

    public function destroy(JobFinder $jobfinder)
    {
        $jobfinder->delete();
        return redirect()->route('explore')->with('success', 'jobfinder berhasil dihapus');
    }
};