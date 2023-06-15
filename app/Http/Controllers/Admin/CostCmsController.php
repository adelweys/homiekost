<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Validator;
use App\Models\CostFacility;



class CostCmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): View
{
    $vekos = Cost::join('users', 'costs.user_id', '=', 'users.id')
                ->where('costs.status', 'accept')
                ->orderBy('costs.cost_name')
                ->select('costs.*', 'users.name')
                ->get();
    
    return view('pages.admin.kos.index', compact('vekos'));
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
{
    $users = User::where('level', 'owner')->get(); // Mengambil semua data User dengan level "owner"
    return view('pages.admin.kos.create', compact('users'));
}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     
     public function store(Request $request)
     {
         $validator = Validator::make($request->all(), [
             'user' => 'required',
             'cost_name' => 'required',
             'total_kamar' => 'required|integer|min:1',
             'cost_type' => 'required',
             'available_room' => 'required|integer|min:0',
             'cost_location' => 'required',
             'cost_address' => 'required',
             'description' => 'required',
             'contact_person' => 'required|regex:/^08\d{9,12}$/|min:11|max:13',
             'night_limit' => 'required|integer|min:0',
             'long_add' => 'required|numeric',
             'lat_add' => 'required|numeric',
         ], [
             'cost_name.required' => 'Kolom Nama Kos harus diisi.',
             'total_kamar.required' => 'Kolom Total Kamar harus diisi.',
             'total_kamar.integer' => 'Kolom Total Kamar harus berupa bilangan bulat.',
             'total_kamar.min' => 'Kolom Total Kamar harus bernilai minimal 1.',
             'cost_type.required' => 'Kolom Tipe Kos harus diisi.',
             'available_room.required' => 'Kolom Kamar Tersedia harus diisi.',
             'available_room.integer' => 'Kolom Kamar Tersedia harus berupa bilangan bulat.',
             'available_room.min' => 'Kolom Kamar Tersedia harus bernilai minimal 0.',
             'cost_location.required' => 'Kolom Lokasi Kos harus diisi.',
             'cost_address.required' => 'Kolom Alamat Kos harus diisi.',
             'description.required' => 'Kolom Deskripsi Kos harus diisi.',
             'contact_person.required' => 'Kolom Contact Person harus diisi.',
             'contact_person.regex' => 'Format Kolom Contact Person tidak valid.',
             'contact_person.min' => 'Kolom Contact Person harus bernilai minimal 11.',
             'contact_person.max' => 'Kolom Contact Person harus bernilai maksimal 13.',
             'night_limit.required' => 'Kolom Jam Malam harus diisi.',
             'night_limit.integer' => 'Kolom Jam Malam harus berupa bilangan bulat.',
             'night_limit.min' => 'Kolom Jam Malam harus bernilai minimal 0.',
             'long_add.required' => 'Kolom Titik Lokasi Long harus diisi.',
             'long_add.numeric' => 'Kolom Titik Lokasi Long harus berupa angka.',
             'lat_add.required' => 'Kolom Titik Lokasi Lat harus diisi.',
             'lat_add.numeric' => 'Kolom Titik Lokasi Lat harus berupa angka.',
         ]);
     
         if ($validator->fails()) {
             return redirect()->back()->withErrors($validator)->withInput();
         }
     
         $cost = new Cost();
    $cost->cost_name = $request->input('cost_name');
    $cost->total_kamar = $request->input('total_kamar');
    $cost->available_room = $request->input('available_room');
    $cost->cost_location = $request->input('cost_location');
    $cost->cost_address = $request->input('cost_address');
    $cost->description = $request->input('description');
    $cost->contact_person = $request->input('contact_person');
    $cost->night_limit = $request->input('night_limit');
    $cost->long_add = $request->input('long_add');
    $cost->lat_add = $request->input('lat_add');
    $cost->user_id = $request->input('user');
    $cost->slug = Str::slug($request->input('cost_name'));
    $store = $cost->save(); // Menyimpan data cost dan menyimpan status ke dalam variabel $store

    if ($store) {
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data kost berhasil ditambahkan',
        ]);
        return redirect()->route('data-kos.index');
    } else {
        session()->flash('alert', [
            'type' => 'error',
            'title' => 'Terjadi kesalahan',
            'message' => 'Data gagal ditambahkan',
        ]);
        return redirect()->back()->withInput();
    }
}

     


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_cost)  : View
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
    $validator = Validator::make($request->all(), [
        'cost_name' => 'required',
        'total_kamar' => 'required|integer|min:1',
        'cost_type' => 'required',
        'available_room' => 'required|integer|min:0',
        'cost_location' => 'required',
        'cost_address' => 'required',
        'description' => 'required',
        'contact_person' => 'required|regex:/^08\d{9,12}$/|min:11|max:13',
        'night_limit' => 'required|integer|min:0',
        'long_add' => 'required|numeric',
        'lat_add' => 'required|numeric',
    ], [
        'cost_name.required' => 'Kolom Nama Kos harus diisi.',
        'total_kamar.required' => 'Kolom Total Kamar harus diisi.',
        'total_kamar.integer' => 'Kolom Total Kamar harus berupa bilangan bulat.',
        'total_kamar.min' => 'Kolom Total Kamar harus bernilai minimal 1.',
        'cost_type.required' => 'Kolom Tipe Kos harus diisi.',
        'available_room.required' => 'Kolom Kamar Tersedia harus diisi.',
        'available_room.integer' => 'Kolom Kamar Tersedia harus berupa bilangan bulat.',
        'available_room.min' => 'Kolom Kamar Tersedia harus bernilai minimal 0.',
        'cost_location.required' => 'Kolom Lokasi Kos harus diisi.',
        'cost_address.required' => 'Kolom Alamat Kos harus diisi.',
        'description.required' => 'Kolom Deskripsi Kos harus diisi.',
        'contact_person.required' => 'Kolom Contact Person harus diisi.',
        'contact_person.regex' => 'Format Kolom Contact Person tidak valid.',
        'contact_person.min' => 'Kolom Contact Person harus bernilai minimal 11.',
        'contact_person.max' => 'Kolom Contact Person harus bernilai maksimal 13.',
        'night_limit.required' => 'Kolom Jam Malam harus diisi.',
        'night_limit.integer' => 'Kolom Jam Malam harus berupa bilangan bulat.',
        'night_limit.min' => 'Kolom Jam Malam harus bernilai minimal 0.',
        'long_add.required' => 'Kolom Titik Lokasi Long harus diisi.',
        'long_add.numeric' => 'Kolom Titik Lokasi Long harus berupa angka.',
        'lat_add.required' => 'Kolom Titik Lokasi Lat harus diisi.',
        'lat_add.numeric' => 'Kolom Titik Lokasi Lat harus berupa angka.',
    ]);

    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }

    $cost = Cost::find($id_cost);

    if (!$cost) {
        return redirect()->back()->withErrors(['message' => 'Data kost tidak ditemukan.']);
    }

    $cost->fill($request->all());

    if ($cost->save()) {
        // Alert::success('Berhasil', 'Data berhasil diperbarui')->persistent(true, false)->autoClose(3000);
        session()->flash('alert', [
            'type' => 'success',
            'title' => 'Berhasil',
            'message' => 'Data berhasil diperbarui',
        ]);
        return redirect()->route('data-kos.index');
    } else {
        // Alert::error('Terjadi kesalahan', 'Data gagal diperbarui')->persistent(true, false)->autoClose(3000);
        session()->flash('alert', [
            'type' => 'error',
            'title' => 'Terjadi kesalahan',
            'message' => 'Data gagal diperbarui',
        ]);
        return redirect()->back()->withInput();
    }
}

     
     



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    
    if (Cost::find($id)->delete()) {
        CostFacility::where('cost_id', $id)->delete();

        Alert::success('Berhasil', 'Data berhasil dihapus');
    } else {
        Alert::error('Terjadi kesalahan', 'Data gagal dihapus');
    }

    return back();
}
}
