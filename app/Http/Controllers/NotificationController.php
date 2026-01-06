<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index(Request $request)
    {
        $notifications = Notification::all();
        return view('notification.index', compact('notifications'));
    }

    public function create()
    {
        return view('notification.apply');
    }

    public function store(Request $request)
    {
        if (auth()->user()->hasRole('Pekerja')) {
            $validated = $request->validate([
                'company' => 'required',
                'job_title' => 'required',
                'name' => 'required',
                'email' => 'required',
                'contact_user' => 'required',
                'cv' => 'required',
            ]);
    
            if ($request->hasFile('cv')) {
                $validated['cv'] = $request->file('cv')->store('jobfinder-images', 'public');
            }
    
        } elseif (auth()->user()->hasRole('Perusahaan')) {
            $validated = $request->validate([
                'status' => 'required',
            ]);
        }

        Notification::create($validated);

        return redirect()->route('notification.index')->with('success', 'lamaran berhasil dikirim');
    }

    public function edit(Notification $notification)
    {
        return view('notification.status', compact('notification'));
    }

    public function update(Request $request, Notification $notification)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $notification->status = $request->input('status');
        $notification->update();

        return redirect()->route('notification.index')->with('success', 'lamaran berhasil diedit');        
    }

    public function destroy(Notification $notification)
    {
        $notification->delete();
        return redirect()->route('notification.index')->with('success', 'lamaran berhasil dihapus');
    }
};