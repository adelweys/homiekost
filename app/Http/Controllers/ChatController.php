<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Chat::where(function($query) {
            $query->where('from_user_id', Auth::id())
                  ->orWhere('to_user_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();
        // by niken /|/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\\\\/
        $users = User::all();

        return view('main/chat', compact('messages', 'users'));
    }

    public function sendMessage(Request $request)
    {
        $message = new Chat;
        $message->from_user_id = Auth::id();
        $message->to_user_id = $request->to_user_id;
        $message->message = $request->message;
        $message->save();

        return redirect()->back();
    }
}
