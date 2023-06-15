<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owner = User::OrderBy('name', 'asc')->where('level', 'owner')->get();
        return view('pages.admin.owner.index', ['owner' => $owner]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() : View
    {
        return view('pages.admin.owner.create');
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
            'name' => 'required',
            'email' => 'required',
            'created_at' => 'required',
        ]);

        if ($validasi) :
            $store = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'created_at' => $request->created_at,
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-owner.index');
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
    public function edit($id) : View
    {
        $owner = User::find($id);
        return view('pages.admin.owner.edit', ['owner' => $owner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'created_at' => 'required'
        ]);

        if ($validasi) :
            $update = User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'created_at' => $request->created_at
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data berhasil diubah');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal diubah');
            endif;
        endif;

        return redirect()->route('data-owner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (User::find($id)->delete()) :
            Alert::success('Berhasil', 'Data berhasil dihapus');
        else :
            Alert::error('Terjadi kesalahan', 'Data gagal dihapus');
        endif;

        return back();
    }
}
