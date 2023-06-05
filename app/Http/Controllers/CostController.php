<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Room;

class CostController extends Controller
{
    //
    public function index()
{
    $costs = Cost::all();
    $rooms = Room::all();

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
    $cost = Cost::where('slug', $slug)->firstOrFail();

    if (!$cost) {
        // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
        abort(404);
    }
    
    // Ambil data kamar yang terkait dengan kost
    $rooms = $cost->rooms();
    
    return view('main.detailKos', compact('cost', 'rooms'));
}

}

