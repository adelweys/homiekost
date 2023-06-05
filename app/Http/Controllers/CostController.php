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

    return view('index', compact('costs', 'rooms'));
}
}
