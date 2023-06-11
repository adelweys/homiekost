<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function create()
    {
        return view('main.contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject' => 'required',
            'message' => 'required',
            'username' => 'required',
        ]);

        // Buat pesan baru
        Message::create([
            'user_id' => auth()->user()->id,
            'email' => auth()->user()->email,
            'subject' => $validatedData['subject'],
            'message' => $validatedData['message'],
            'username' => $validatedData['username'],
            'status' => 'waiting',
        ]);

        // Redirect ke halaman sukses atau lainnya
        return redirect()->route('message.create')->with('success', 'Pengaduan berhasil dikirim.');
    }
}
