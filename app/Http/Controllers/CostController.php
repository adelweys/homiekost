<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Cost;
use App\Models\Room;
use App\Models\User;
use App\Models\Reply;
use App\Models\Rating;
use App\Models\Comment;
use App\Models\Sewa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CostController extends Controller
{
    public function index()
    {
        $userr = Auth::user();
        $costs = Cost::with(['rooms', 'costFacility'])->get();
        $ownerCount = User::countOwners();
        $roomCount = Room::countRooms();
        $costCount = Cost::countCosts();

        // start ariyo
        return view('main.index', compact('costs','ownerCount','roomCount','costCount', 'userr'));
        // end ariyo
    }
    public function kos()
    {
        $id = auth()->user()->id;
        $kos = Sewa::where('user_id', $id)->get();
        // dd($kos);
        return view('main.kos', compact('kos'));
    }
    public function cost_list()
{
    $costs = Cost::with(['rooms', 'costFacility'])->get();
    

    return view('main.kos-card', compact('costs'));
}

public function show($slug) //show berdasar slug yang diperoleh dari nama
{
        $cost = Cost::where('slug', $slug)
        ->with('rooms', 'costFacility', 'comment', 'rating', 'reply', 'users')
        ->firstOrFail();

        $cost_id = $cost->id;

        $averageRating = Rating::where('cost_id', $cost_id)->avg('rating');
        
        $users = User::all();

        $messages = Chat::where(function($query) {
            $query->where('from_user_id', Auth::id())
                  ->orWhere('to_user_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();

        if (!$cost) {
            // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
            abort(404);
        }
    return view('main.detail-kos', compact('cost', 'messages', 'users', 'averageRating'));
}

public function sewa($slug)
{
    $cost = Cost::where('slug', $slug)
        ->with('rooms', 'costFacility', 'comment', 'rating', 'reply', 'users')
        ->firstOrFail();

    $users = User::all();
    // dd($cost);

    $messages = Chat::where(function($query) {
        $query->where('from_user_id', Auth::id())
                ->orWhere('to_user_id', Auth::id());
    })->orderBy('created_at', 'asc')->get();

    return view('main.sewa', compact('cost', 'messages', 'users'));
}

public function sewaStore(Request $request)
{
    $cost = Cost::find($request->cost_id);
    $harga_bulan = $cost->harga_bulan;
    $durasi = $request->durasi;
    $harga = $durasi * $harga_bulan;

    Sewa::create([
        'user_id' => $request->user_id,
        'cost_id' => $request->cost_id,
        'durasi' => $durasi,
        'harga' => $harga,
        'nomor' => $request->nomor,
    ]);

    return redirect('/Cost-List')->with('success', 'Sewa Submmitted successfully');
}

public function update(Request $request, $id)
    {
        $sewa = Sewa::find($id);
        $sewa->user_id = $request->user_id;
        $sewa->cost_id = $request->cost_id;
        $sewa->durasi = $request->durasi;
        $sewa->harga = $request->harga;
        $sewa->nomor = $request->nomor;
        $sewa->status = $request->status;
        $sewa->save();

        return back()->with('success', 'Sewa updated successfully');
    }

public function chat()
    {
        $cost = Cost::with('rooms', 'costFacility', 'comment', 'rating', 'reply')
        ->firstOrFail();
        
        $messages = Chat::where(function($query) {
            $query->where('from_user_id', Auth::id())
                  ->orWhere('to_user_id', Auth::id());
        })->orderBy('created_at', 'asc')->get();
        // by niken /|/\/\/\/\/\//\/\/\/\/\/\/\/\/\/\\\\/
        $users = User::all();

        return view('main/chat', compact('messages', 'users', 'cost'));
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

public function search(Request $request)
{
    $search = $request->input('search');
    $wilayah = $request->input('wilayah');
    $priceRange = $request->input('price_range');

    $query = Cost::query();

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->whereRaw('LOWER(cost_name) LIKE ?', ['%' . strtolower($search) . '%'])
              ->orWhere('cost_location', 'LIKE', '%' . $search . '%');
        });
        
        
    }

    if ($wilayah) {
        $query->where('cost_location', $wilayah);
    }

    if ($priceRange) {
        if ($priceRange == 1) {
            $query->whereHas('rooms', function ($q) {
                $q->where('price', '<', 500000);
            });
        } elseif ($priceRange == 2) {
            $query->whereHas('rooms', function ($q) {
                $q->whereBetween('price', [500000, 850000]);
            });
        } elseif ($priceRange == 3) {
            $query->whereHas('rooms', function ($q) {
                $q->whereBetween('price', [850000, 1300000]);
            });
        } elseif ($priceRange == 4) {
            $query->whereHas('rooms', function ($q) {
                $q->where('price', '>', 1300000);
            });
        }
    }

    $costs = $query->get();
    $selectedLocation = $wilayah;
    $minPrice = $priceRange ? $this->getMinPrice($priceRange) : 0;
    $maxPrice = $priceRange ? $this->getMaxPrice($priceRange) : PHP_INT_MAX;
    $searchQuery = $search;

    // dd($searchQuery);


    return view('main.kos-card-search', compact('costs', 'selectedLocation', 'minPrice', 'maxPrice', 'searchQuery'));
}

private function getMinPrice($priceRange)
{
    // Definisikan rentang harga minimum sesuai dengan kategori yang Anda tentukan
    switch ($priceRange) {
        case 1:
            return 0;  // Ganti dengan harga minimum sesuai dengan kategori
        case 2:
            return 500000;
        case 3:
            return 850000;
        case 4:
            return 1300000;
        default:
            return 0;
    }
}

private function getMaxPrice($priceRange)
{
    // Definisikan rentang harga maksimum sesuai dengan kategori yang Anda tentukan
    switch ($priceRange) {
        case 1:
            return 500000;  // Ganti dengan harga maksimum sesuai dengan kategori
        case 2:
            return 850000;
        case 3:
            return 1300000;
        case 4:
            return PHP_INT_MAX;  // Jika tidak ada batasan harga maksimum
        default:
            return PHP_INT_MAX;
    }
}

// end ariyo

    

// start arya

    
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
// end arya

}

