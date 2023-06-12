@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="row align-items-center">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Profile
                    </h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-3 col-3">
                    <div class="text-center">
                        <img src="{{ asset('img/undraw_profile.svg') }}" class="rounded" alt="...">
                    </div>
                </div>
                <div class="col-lg-9 col-9">
                    <h2>Welcome Back, <span>{{ Auth::user()->name }}</span>!</h2>
                    <h4 class="color-dark ">Email</h4>
                    <p>{{ Auth::user()->email }}</p>
                    <h4 class="color-dark">Role</h4>
                    <p>{{ Auth::user()->level }}</p>
                    <a href="editprofile.html">Edit Profil</a>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
@endsection