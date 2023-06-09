<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cost;
use App\Models\Room;
use App\Models\CostFacility;

class CostController extends Controller
{
    //
    public function index()
{
    $costs = Cost::with(['rooms', 'costFacility'])->get();

    return view('main.index', compact('costs'));
    
}
    public function cost_list()
{
    $costs = Cost::with(['rooms', 'costFacility'])->get();

    return view('main.kos-card', compact('costs'));
    
}
    
public function show_cost_details($id, $name)
{
    $cost = Cost::with(['rooms', 'costFacility'])->find($id);
        if (!$cost) {
        // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
        abort(404);
    }
    return view('main.dd', compact('cost'));
}
public function show($slug)
{
    $cost = Cost::with(['rooms', 'costFacility'])->where('slug', $slug)->first();
        if (!$cost) {
        // Jika kost dengan slug yang diberikan tidak ditemukan, lakukan penanganan kesalahan atau redirect ke halaman lain
        abort(404);
    }
    return view('main.detail-kos', compact('cost'));
}


    



}

