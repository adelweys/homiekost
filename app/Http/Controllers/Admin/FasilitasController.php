<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use App\Models\CostFacility;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facy = CostFacility::orderBy('bathroom', 'asc')->get();
        return view('pages.admin.fasilitas.index', ['facy' => $facy]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aset = Cost::all();
        return view('pages.admin.fasilitas.create', [
            'aset' => $aset
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
            'aset' => 'required',
            'car_park' => 'required',
            'bike_park' => 'required',
            'wifi' => 'required',
            'kitchen' => 'required',
            'security' => 'required',
            'electric' => 'required',
            'pam' => 'required',
            'bathroom' => 'required'
        ]);

        if ($validasi) :
            $store = CostFacility::create([
                'id_cost' => $request->aset,
                'car_park' => $request->car_park,
                'bike_park' => $request->bike_park,
                'wifi' => $request->wifi,
                'kitchen' => $request->kitchen,
                'security' => $request->security,
                'electric' => $request->electric,
                'pam' => $request->pam,
                'bathroom' => $request->bathroom
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-fasilitas.index');
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
        $aset = CostFacility::find($id_cost);
        $costfacy = Cost::all();
        return view('pages.admin.fasilitas.edit', [
            'aset' => $aset,
            'costfacy' => $costfacy
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
            'aset' => 'required',
            'car_park' => 'required',
            'bike_park' => 'required',
            'wifi' => 'required',
            'kitchen' => 'required',
            'security' => 'required',
            'electric' => 'required',
            'pam' => 'required',
            'bathroom' => 'required'
        ]);

        if ($validasi) :
            $update = CostFacility::findOrFail($id_cost)->update([
                'id_cost' => $request->aset,
                'car_park' => $request->car_park,
                'bike_park' => $request->bike_park,
                'wifi' => $request->wifi,
                'kitchen' => $request->kitchen,
                'security' => $request->security,
                'electric' => $request->electric,
                'pam' => $request->pam,
                'bathroom' => $request->bathroom
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_cost)
    {
        if (CostFacility::find($id_cost)->delete()) :
            Alert::success('Berhasil', 'Data berhasil dihapus');
        else :
            Alert::error('Terjadi kesalahan', 'Data gagal dihapus');
        endif;

        return back();
    }
}
