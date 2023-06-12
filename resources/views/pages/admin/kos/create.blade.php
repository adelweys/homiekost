@extends('layouts.admin')

@section('title', 'Tambah Data Kos')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Kos</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('data-kos.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('data-kos.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <label for="">Nama Kos</label>
                    <input type="text" name="cost_name" class="form-control" value="{{ old('cost_name') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Nama Pemilik Kos</label>
                    <input type="text" name="user" class="form-control" value="{{ old('user') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Alamat Kos</label>
                    <input type="text" name="cost_address" class="form-control" value="{{ old('cost_address') }}"
                        required>
                </div>
                <div class="card-body">
                    <label for="">Deskripsi Kos</label>
                    <input type="text" name="description" class="form-control" value="{{ old('description') }}"
                        required>
                </div>
                <div class="card-body">
                    <label for="">Total Kamar</label>
                    <input type="text" name="total_kamar" class="form-control" value="{{ old('total_kamar') }}"
                        required>
                </div>
                <div class="card-body">
                    <label for="">Kamar Tersedia</label>
                    <input type="text" name="available_room" class="form-control" value="{{ old('available_room') }}"
                        required>
                </div>
                <div class="card-body">
                    <label for="">Jam Malam</label>
                    <input type="text" name="night_limit" class="form-control" value="{{ old('night_limit') }}"
                        required>
                </div>
                <div class="card-body">
                    <label for="">Titik Lokasi Long</label>
                    <input type="text" name="long_add" class="form-control" value="{{ old('long_add') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Titik Lokasi Lat</label>
                    <input type="text" name="lat_add" class="form-control" value="{{ old('lat_add') }}" required>
                </div>
                <div class="card-body">
                    <label for="">Contact Person</label>
                    <input type="text" name="contact_person" class="form-control" value="{{ old('contact_person') }}"
                        required>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="location">Lokasi Kos</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="Dr Mansur"
                                value="Dr Mansur" checked>
                            <label class="form-check-label" for="Dr Mansur">
                                Dr Mansur
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="Jamin Ginting"
                                value="Jamin Ginting">
                            <label class="form-check-label" for="Jamin Ginting">
                                Jamin Ginting
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="Setia Budi"
                                value="Setia Budi">
                            <label class="form-check-label" for="Setia Budi">
                                Setia Budi
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="location" id="Iskandar Muda"
                                value="Iskandar Muda">
                            <label class="form-check-label" for="Iskandar Muda">
                                Iskandar Muda
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="tikos">Tipe Kos</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tikos" id="male" value="male" checked>
                            <label class="form-check-label" for="male">
                                Pria
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tikos" id="female" value="female">
                            <label class="form-check-label" for="female">
                                Wanita
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tikos" id="campuran" value="campuran">
                            <label class="form-check-label" for="campuran">
                                Campuran
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