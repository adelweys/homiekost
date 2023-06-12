@extends('layouts.admin')

@section('title', 'Tambah Data Owner')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Owner</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('data-owner.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('data-owner.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <label for="">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name')}}" required>
                </div>
                <div class="card-body">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Tanggal Pengajuan</label>
                    <input type="text" name="created_at" class="form-control" value="{{ old('created_at') }}" required>
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