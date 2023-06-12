<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Cost;
use Alert;
use Illuminate\Http\Request;

class KamarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = Room::OrderBy('room_name', 'asc')->get();

        return view('pages.admin.kamar.index', ['room' => $room]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cost = Cost::all();
        return view('pages.admin.kamar.create', [
            'cost' => $cost
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'cost' => 'required',
            'room_name' => 'required',
            'roomsize' => 'required|numeric',
            'tableset' => 'required',
            'wardrobe' => 'required',
            'closet' => 'required',
            'bed' => 'required',
            'fan' => 'required',
            'ac' => 'required',
            'electric' => 'required',
            'pam' => 'required',
            'price' => 'required|numeric'
        ]);

        if ($validasi) :
            $store = Room::create([
                'id_cost' => $request->cost,
                'room_name' => $request->room_name,
                'roomsize' => $request->roomsize,
                'tableset' => $request->tableset,
                'wardrobe' => $request->wardrobe,
                'closet' => $request->closet,
                'bed' => $request->bed,
                'fan' => $request->fan,
                'ac' => $request->ac,
                'electric' => $request->electric,
                'pam' => $request->pam,
                'price' => $request->price
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-kamar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_room)
    {
        $room = Room::find($id_room);
        $cost = Cost::all();
        return view('pages.admin.kamar.edit', [
            'room' => $room,
            'cost' => $cost,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_room)
    {
        $validasi = $request->validate([
            'cost' => 'required',
            'room_name' => 'required',
            'roomsize' => 'required|numeric',
            'tableset' => 'required',
            'wardrobe' => 'required',
            'closet' => 'required',
            'bed' => 'required',
            'fan' => 'required',
            'ac' => 'required',
            'electric' => 'required',
            'pam' => 'required',
            'price' => 'required|numeric'
        ]);

        if ($validasi) :
            $update = Room::findOrFail($id_room)->update([
                'id_cost' => $request->cost,
                'room_name' => $request->room_name,
                'roomsize' => $request->roomsize,
                'tableset' => $request->tableset,
                'wardrobe' => $request->wardrobe,
                'closet' => $request->closet,
                'bed' => $request->bed,
                'fan' => $request->fan,
                'ac' => $request->ac,
                'electric' => $request->electric,
                'pam' => $request->pam,
                'price' => $request->price
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-kamar.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_room)
    {
        if (Room::find($id_room)->delete()) :
            Alert::success('Berhasil', 'Data berhasil dihapus');
        else :
            Alert::error('Terjadi kesalahan', 'Data gagal dihapus');
        endif;

        return back();
    }
}
