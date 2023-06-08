<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Rating;
use App\Models\Reply;
use App\Models\Room;
use App\Models\CostFacility;

class CostController extends Controller
{
    public function index()
{
    $costs = Cost::with(['rooms', 'costFacility'])->get();

    return view('main.index', compact('costs', 'rooms'));
    
}
    public function cost_list()
{
    $costs = Cost::all();
    $rooms = Room::all();

    return view('main.kos-card', compact('costs', 'rooms'));
}

    public function show($slug)
    {
        // Cari data kost berdasarkan slug
        $cost = Cost::where('slug', $slug)->with('rooms', 'costFacilities', 'comment')->firstOrFail();
        // $cost = Cost::find();

        // dd($cost);

        if (!$cost) {
            // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
            abort(404);
        }
        
        // Ambil data kamar yang terkait dengan kost
        
        
        return view('main.detailKos', compact('cost'));

    }

    
    public function commentStore(Request $request)
    {
        Comment::create([
            'comment' => $request->comment,
            'cost_id' => $request->cost_id, //nanti ambil dari form viewnya
            'user_id' => $request->user_id //nanti ambil dari sesi id usernya e.g auth()->user()->id
        ]);

        return back();
    }

    public function replyStore(Request $request)
    {
        Reply::create([
            'comment_id' => $request->comment_id,
            'cost_id' => $request->cost_id,
            'user_id' => $request->user_id,
            'replies' => $request->replies
        ]);
        
        return back();
    }

    public function ratingStore(Request $request)
    {
        Rating::create([
            'cost_id' => $request->cost_id,
            'user_id' => $request->user_id,
            'review' => $request->review,
            'rating' => $request->rating
        ]);

        return back();
    }

}

