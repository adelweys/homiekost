<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use App\Mail\VerificationCodeMail;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/');
        } else {
            // Authentication failed
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password.',
            ]);
        }
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'email_verified' => false,
            'verification_code' => mt_rand(100000, 999999), // Generate 6-digit verification code
        ]);
        
        $user->save();
        Auth::login($user);

        return redirect('/')->with('success', 'Your Registration is Success');

        // return redirect()->route('verify-email');
    }


    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required|email|unique:users',
    //         'password' => 'required|min:8|confirmed',
    //         'verification_code' => 'required',
    //     ]);

    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = Hash::make($request->password);

    //     // Kirim kode verifikasi
    //     $this->sendVerificationCode($user->email, $request->verification_code);

    //     $user->verification_code = ''; // Atur kolom verifikasi kode ke string kosong saat pendaftaran
    //     $user->save();

    //     Auth::login($user);

    //     return redirect('/');
    // }
    

    // public function showVerifyEmailForm()
    // {
    //     return view('auth.verify-email');
    // }
    // public function verifyEmail(Request $request)
    // {
    //     $request->validate([
    //         'verification_code' => 'required|digits:6',
    //     ]);

    //     $user = User::where('verification_code', $request->verification_code)->first();

    //     if (!$user) {
    //         return redirect()->back()->withErrors(['verification_code' => 'Invalid verification code.']);
    //     }

    //     $user->email_verified = true;
    //     $user->save();

    //     return redirect('/login')->with('success', 'Email verification successful! You can now log in.');
    // }


    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
