<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile.show', compact('user', 'profile'));
    }
    // Tampilkan form edit profil
    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile;
        return view('profile.edit', compact('user', 'profile'));
    }
    // Simpan perubahan profil
    public function update(Request $request)
    {
        $request->validate([
            'alamat' => 'required|string|max:255',
            'no_telepon' => 'required|string|max:20',
        ]);
        $user = Auth::user();
        if ($user->profile) {
            // Update existing profile
            $user->profile->update([
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
            ]);
        } else {
            // Create new profile
            $user->profile()->create([
                'alamat' => $request->alamat,
                'no_telepon' => $request->no_telepon,
            ]);
        }
        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui.');
    }
}
