@extends('layouts.master')

@section('content')

    @include('layouts.banner-top')
    

        <!-- Begin Page Content -->
        <div class="container-xxl py-5">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <h5 class="card-title my-2">Edit Profil</h5>
                </div>
                <form method="POST" action="{{ route('profile.update') }}">
                    @csrf
                    <div class="row py-2">
                        <div class="col-lg-3 col-3">
                            <div class="text-center">
                                <img src="img/about-1.jpg" class="rounded-circle my-4" style="width: 16rem;" alt="...">
                            </div>
                        </div>
                        <div class="col-lg-8 col-8 py-2 pb-5">
                            <div class="mb-3">
                                <label for="photo" class="form-label mt-3">Foto Profil</label>
                                <input type="file" class="form-control text-center" id="photo" value="">
                            </div>
                
                            <div class="form-group mb-3">
                                <label for="name">Nama</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{ $profile->nama ?? '' }}">
                            </div>
                
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $profile->email ?? '' }}" readonly>
                            </div>
                
                            <div class="form-group mb-3">
                                <label for="nomor_telepon">Nomor Telepon</label>
                                <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" placeholder="No. Telepon" value="{{ $profile->nomor_telepon ?? '' }}">
                            </div>
                
                            <div class="form-group mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_pria" value="Pria" {{ (isset($profile) && $profile->jenis_kelamin === 'Pria') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jenis_kelamin_pria">
                                        Pria
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_wanita" value="Wanita" {{ (isset($profile) && $profile->jenis_kelamin === 'Wanita') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="jenis_kelamin_wanita">
                                        Wanita
                                    </label>
                                </div>
                            </div>
                
                            <button type="submit" class="btn btn-primary rounded-3">Simpan</button>
                        </div>
                    </div>
                </form>
                
            </div>
        </div>

@endsection
    