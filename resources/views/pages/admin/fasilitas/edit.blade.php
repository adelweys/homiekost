@extends('layouts.admin')

@section('title', 'Edit Data Fasilitas Kos')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Fasilitas Kos</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('data-fasilitas.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('data-kamar.update', $aset->cost->id_cost) }}" method="POST">
                @csrf
                @method('put')
                <div class="card-body">
                    <label for="">Kost</label>
                    <select name="cost" class="custom-select" {{ count($costfacy)==0 ? 'disabled' : '' }}>
                        @if(count($costfacy) == 0)
                        <option value="">Pilihan Tidak Ada</option>
                        @else
                        <option value="">Silahkan Pilih</option>
                        @foreach($costfacy as $kos)
                        <option value="{{ $kos->id_cost }}" {{ $aset->cost->id_cost == $kos->id_cost ?
                            'selected'
                            :
                            ''}}>{{
                            $kos->cost_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="car_park">Parkir Mobil</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="car_park" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="car_park" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="bike_park">Parkir Kereta</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bike_park" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bike_park" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="wifi">Wifi</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="wifi" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="wifi" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="security">Pos Security</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="security" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="security" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="electric">Listrik / PLN</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="electric" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="electric" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="pam">Air / PDAM</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pam" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pam" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="bathroom">Listrik PLN</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bathroom" id="inside" value="inside"
                                checked>
                            <label class="form-check-label" for="inside">
                                Di dalam
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bathroom" id="outside" value="outside">
                            <label class="form-check-label" for="outside">
                                Di luar
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