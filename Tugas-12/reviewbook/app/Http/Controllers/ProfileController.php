<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Auth::user()->profile;
        if (!$profile) {
            return redirect()->route('profile.create')->with('info', 'Silakan lengkapi profile terlebih dahulu.');
        }
        return view('profile.index', compact('profile'));
    }

    public function createProfile()
    {
        return view('profile.create');
    }

    public function storeProfile(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255|min:5',
            'age' => 'required|integer',
        ]);

        Profile::create([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'age' => $request->age,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/profile');
    }

    public function edit()
    {
        $profile = Auth::user()->profile;
        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'address' => 'required|string|max:255|min:5',
            'age' => 'required|integer',
        ]);

        $profile = Auth::user()->profile;
        $profile->update([
            'user_id' => Auth::id(),
            'address' => $request->address,
            'age' => $request->age,
            'updated_at' => Carbon::now()
        ]);
        return redirect('/profile');
    }
}
