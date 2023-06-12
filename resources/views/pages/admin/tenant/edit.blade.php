@extends('layouts.admin')

@section('title', 'Edit Data Tenant')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Tenant</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('data-tenant.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('data-tenant.update', $tenant->id_tenant) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <label for="">Kost</label>
                    <select name="cost" class="custom-select" {{ count($cost)==0 ? 'disabled' : '' }}>
                        @if(count($cost) == 0)
                        <option value="">Pilihan Tidak Ada</option>
                        @else
                        <option value="">Silahkan Pilih</option>
                        @foreach($cost as $kos)
                        <option value="{{ $kos->id_cost }}" {{ $tenant->id_cost == $kos->id_cost ? 'selected' :
                            ''}}>{{
                            $kos->cost_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="card-body">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $tenant->name }}" required>
                </div>
                <div class="card-body">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ $tenant->username }}" required>
                </div>
                <div class="card-body">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $tenant->email }}" required>
                </div>
                <div class="card-body">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <div class="card-body">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="phone_no" class="form-control" value="{{ $tenant->phone_no }}" required>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection

@push('addon-script')

@endpush