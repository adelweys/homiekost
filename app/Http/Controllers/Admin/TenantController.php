<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cost;
use App\Models\Tenant;
use Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TenantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenant = Tenant::OrderBy('name', 'asc')->get();

        return view('pages.admin.tenant.index', ['tenant' => $tenant]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cost = Cost::all();
        return view('pages.admin.tenant.create', [
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
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone_no' => 'required|numeric',
            'gender' => 'required'
        ]);

        if ($validasi) :
            $store = Tenant::create([
                'id_cost' => $request->cost,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone_no' => $request->phone_no,
                'gender' => $request->gender
            ]);
            if ($store) :
                Alert::success('Berhasil', 'Data berhasil ditambahkan');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal ditambahkan');
            endif;
        endif;

        return redirect()->route('data-tenant.index');
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
    public function edit($id_tenant)
    {
        $tenant = Tenant::find($id_tenant);
        $cost = Cost::all();
        return view('pages.admin.tenant.edit', [
            'tenant' => $tenant,
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
    public function update(Request $request, $id_tenant)
    {
        $validasi = $request->validate([
            'cost' => 'required',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'phone_no' => 'required|numeric'
        ]);

        if ($validasi) :
            $update = Tenant::findOrFail($id_tenant)->update([
                'id_cost' => $request->cost,
                'name' => $request->name,
                'username' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone_no' => $request->phone_no
            ]);
            if ($update) :
                Alert::success('Berhasil', 'Data berhasil diubah');
            else :
                Alert::error('Terjadi kesalahan', 'Data gagal diubah');
            endif;
        endif;

        return redirect()->route('data-tenant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tenant)
    {
        if (Tenant::find($id_tenant)->delete()) :
            Alert::success('Berhasil', 'Data berhasil dihapus');
        else :
            Alert::error('Terjadi kesalahan', 'Data gagal dihapus');
        endif;

        return back();
    }
}
