<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProfileController extends Controller
{
    public function edit()
{
    $user = Auth::user();
    $profile = $user->profile;

    // Jika profile belum ada, buat profile baru menggunakan data user saat ini
    if (!$profile) {
        $profileData = [
            'user_id' => $user->id,
            'nama' => $user->name,
            'email' => $user->email,
        ];
        $profile = UserProfile::create($profileData);
    }

    return view('main.profile', compact('user', 'profile'));
}


    public function update(Request $request)
    {
        $user = Auth::user();
        $profile = $user->profile;

        $profileData = [
            'nama' => $request->input('name'),
            'nomor_telepon' => $request->input('nomor_telepon'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
        ];

        try {
            if ($profile) {
                $profile->update($profileData);
                $user->name = $request->input('name'); // Update kolom 'name' di tabel 'users'
                $user->save();
            } else {
                $user->profile()->create($profileData);
            }

            return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
        } catch (ModelNotFoundException $e) {
            return redirect()->back()->with('error', 'Failed to update profile');
        }
    }




    // public function update(Request $request)
    // {
    //     $user = Auth::user();
    //     $profile = $user->profile;
    
    //     $profileData = [
    //         'nama' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'nomor_telepon' => $request->input('nomor_telepon'),
    //         'jenis_kelamin' => $request->input('jenis_kelamin'),
    //     ];
    
    //     if ($profile) {
    //         $profile->update($profileData);
    //     } else {
    //         $profileData['user_id'] = $user->id; // Menambahkan user_id ke $profileData
    //         UserProfile::create($profileData);
    //     }
    
    //     return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    // }
    
    // public function update(Request $request)
    // {
    //     $user = Auth::user();
    //     $profile = $user->profile;
    //     $userProfile = UserProfile::where('user_id', $user->id)->first();

    //     $profileData = [
    //         'name' => $request->input('name'),
    //         'email' => $request->input('email'),
    //         'nomor_telepon' => $request->input('nomor_telepon'),
    //         'jenis_kelamin' => $request->input('jenis_kelamin'),
    //     ];
        
    //     if ($profile) {
    //         $profile->update($profileData);
    //     } else {
    //         $user->profile()->create($profileData);
    //     }

    //     return redirect()->route('profile.edit')->with('success', 'Profile updated successfully');
    // }
}
