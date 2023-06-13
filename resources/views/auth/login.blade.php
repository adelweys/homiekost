@extends('layouts.master')

@section('content')

@include('layouts.header-second')



<!-- Login Start -->
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="container">
                <div class="text-center wow fadeInUp mb-4" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">Masuk Ke Homiekost</h3>
                </div>
                @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password">Kata sandi</label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Kata sandi" required>
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ingat saya</label>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid mb-4">
                        <button class="btn btn-primary" type="submit">Masuk</button>
                    </div>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Belum punya akun? <a href="{{ route('register') }}">Daftar</a></p>
                    </div>
                </form>

            </div>
        </div>
        <!-- Login End -->
        <!-- Footer Start -->

        <!-- Footer End -->

        @endsection