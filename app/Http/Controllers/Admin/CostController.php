<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use App\Models\User;
use Alert;
use Illuminate\Http\Request;

class CostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cost = Cost::OrderBy('cost_name', 'asc')->get();

        return view('pages.admin.kos.index', ['cost' => $cost]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        return view('pages.admin.kos.create', ['user' => $user]);
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
            'cost_name' => 'required',
            'total_kamar' => 'required|numeric',
            'cost_type' => 'required',
            'available_room' => 'required|numeric',
            'cost_location' => 'required',
            'cost_address' => 'required',
            'description' => 'required',
            'contact_person' => 'required|numeric',
            'night_limit' => 'required|numeric',
            'long_add' => 'required',
            'latt_add' => 'required',
        ]);

        if ($validasi) :
            $store = Cost::create([
                'cost_name' => $request->cost_name,
                'total_kamar' => $request->total_kamar,
                'available_room' => $request->available_room,
                'cost_location' => $request->cost_location,
                'cost_address' => $request->cost_address,
                'description' => $request->description,
                'contact_person' => $request->contact_person,
                'night_limit' => $request->night_limit,
                'long_add' => $request->long_add,
                'lat_add' => $request->lat_add,
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-kos.index');
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
    public function edit($id_cost)
    {
        $cost = Cost::find($id_cost);
        $user = User::all();
        return view('pages.admin.kos.edit', [
            'cost' => $cost,
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_cost)
    {
        $validasi = $request->validate([
            'user' => 'required',
            'cost_name' => 'required',
            'total_kamar' => 'required|numeric',
            'cost_type' => 'required',
            'available_room' => 'required|numeric',
            'cost_location' => 'required',
            'cost_address' => 'required',
            'description' => 'required',
            'contact_person' => 'required|numeric',
            'night_limit' => 'required|numeric',
            'long_add' => 'required',
            'latt_add' => 'required',
        ]);

        if ($validasi) :
            $update = Cost::findOrFail($id_cost)->update([
                'id_user' => $request->user,
                'cost_name' => $request->cost_name,
                'total_kamar' => $request->total_kamar,
                'available_room' => $request->available_room,
                'cost_location' => $request->cost_location,
                'cost_address' => $request->cost_address,
                'description' => $request->description,
                'contact_person' => $request->contact_person,
                'night_limit' => $request->night_limit,
                'long_add' => $request->long_add,
                'lat_add' => $request->lat_add,
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-kos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cost)
    {
        if (Cost::find($id_cost)->delete()) :
            Alert::success('Berhasil', 'Data berhasil dihapus');
        else :
            Alert::error('Terjadi kesalahan', 'Data gagal dihapus');
        endif;

        return back();
    }
}
