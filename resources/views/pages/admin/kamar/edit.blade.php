@extends('layouts.admin')

@section('title', 'Edit Data Kamar')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data Kamar</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('data-kamar.index') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="card-body p-0">
            <form action="{{ route('data-kamar.update', $room->id_room) }}" method="POST">
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
                        <option value="{{ $kos->id_cost }}" {{ $room->id_cost == $kos->id_cost ? 'selected' :
                            ''}}>{{
                            $kos->cost_name }}</option>
                        @endforeach
                        @endif
                    </select>
                </div>
                <div class="card-body">
                    <label for="">Nama Ruangan</label>
                    <input type="text" name="room_name" class="form-control" value="{{ $room->room_name }}" required>
                </div>
                <div class="card-body">
                    <label for="">Ukuran Ruangan</label>
                    <input type="text" name="roomsize" class="form-control" value="{{ $room->roomsize }}" required>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="tableset">Meja</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tableset" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="tableset" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="wardrobe">Cermin Ruangan</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="wardrobe" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="wardrobe" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="closet">Closet</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="closet" id="duduk" value="duduk" checked>
                            <label class="form-check-label" for="duduk">
                                Duduk
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="closet" id="jongkok" value="jongkok">
                            <label class="form-check-label" for="jongkok">
                                Jongkok
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="bed">Tempat Tidur</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bed" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="bed" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="fan">Kipas Angin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fan" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="fan" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="ac">AC</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ac" id="yes" value="yes" checked>
                            <label class="form-check-label" for="yes">
                                Ada
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ac" id="no" value="no">
                            <label class="form-check-label" for="no">
                                Tidak Ada
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="electric">Listrik PLN</label>
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
                    <label for="">Harga</label>
                    <input type="text" name="price" class="form-control" value="{{ $room->price }}" required>
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