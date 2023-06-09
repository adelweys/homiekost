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

    // start ariyo
    return view('main.index', compact('costs'));
    // end ariyo

    // start arya
    return view('main.index', compact('costs', 'rooms'));
    // end arya
}
    public function cost_list()
{
    $costs = Cost::all();
    $rooms = Room::all();

    return view('main.kos-card', compact('costs', 'rooms'));
}
    // start ariyo
// public function show_cost_details($id, $name)
// {
//     $cost = Cost::with(['rooms', 'costFacility'])->find($id);
//         if (!$cost) {
//         // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
//         abort(404);
//     }
//     return view('main.dd', compact('cost'));
// }
// show dengan id dan nama
public function show($slug) //show berdasar slug yang diperoleh dari nama
{
    $cost = Cost::with(['rooms', 'costFacility'])->where('slug', $slug)->first();
        if (!$cost) {
        // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
        abort(404);
    }
    return view('main.detail-kos', compact('cost'));
}

public function search(Request $request)
{
    $search = $request->input('search');
    $wilayah = $request->input('wilayah');
    $priceRange = $request->input('price_range');

    $query = Cost::query();

    if ($search) {
        $query->where('cost_name', 'LIKE', '%' . $search . '%');
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

    return view('main.kos-card', compact('costs', 'selectedLocation', 'minPrice', 'maxPrice', 'searchQuery'));
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
// end arya
}

