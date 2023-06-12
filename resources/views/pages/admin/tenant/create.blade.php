@extends('layouts.admin')

@section('title', 'Tambah Data Tenant')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Tenant</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('data-tenant.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('data-tenant.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <label for="">Kost</label>
                    <select name="cost" class="custom-select" {{ count($cost)==0 ? 'disabled' : '' }}>
                        @if(count($cost) == 0)
                        <option value="">Pilihan Tidak Ada</option>
                        @else
                        <option value="">Silahkan Pilih</option>
                        @foreach($cost as $kos)
                        <option value="{{ $kos->id_cost }}">{{ $kos->cost_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="card-body">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Username</label>
                    <input type="text" name="username" class="form-control" value="{{ old('username') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control" value="{{ old('password') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="phone_no" class="form-control" value="{{ old('phone_no') }}" required>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                    </div>
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