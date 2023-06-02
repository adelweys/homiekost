@extends('layouts.master')

@section('content')
    
@include('layouts.header-second')

{{-- css tambahan --}}
<!-- CSS -->
<style>
    .password-toggle-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .password-toggle-icon:before {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        background-image: url('path/to/open-eye-icon.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    .password-toggle-icon.toggled:before {
        background-image: url('path/to/closed-eye-icon.png');
    }
</style>

        <!-- Register Start -->
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="container">
                <div class="text-center wow fadeInUp mb-4" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">Daftar Akun</h3>
                </div>

                <form action="{{ route('register.submit') }}" method="POST">
                    @csrf
                    <!-- Nama input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="name">Nama</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Nama" required />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email</label>
                        <input type="email" id="email" class="form-control" name="email" placeholder="Email" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline position-relative mb-4">
                        <label class="form-label" for="password">Kata sandi</label>
                        <input type="password" id="password" class="form-control" name="password"
                            placeholder="Kata sandi" required />
                        <span toggle="#password" class="password-toggle-icon"></span>
                    </div>

                    <!-- Konfirmasi Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="password_confirmation">Konfirmasi Kata sandi</label>
                        <input type="password" id="password_confirmation" class="form-control"
                            name="password_confirmation" placeholder="Konfirmasi Kata sandi" required />
                    </div>

                    <div class="row mb-4">
                        <div class="col d-flex left-content-end">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="ingat" />
                                <label class="form-check-label" for="ingat">Ingat saya</label>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-grid mb-4">
                        <button class="btn btn-primary" type="submit">Daftar</button>
                    </div>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Register End -->
{{-- script tambahan --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const togglePassword = document.querySelector('.password-toggle-icon');
        const passwordInput = document.querySelector(togglePassword.getAttribute('toggle'));

        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
            this.classList.toggle('toggled');
        });
    });
</script>
                <!-- Footer Start -->
                <!-- Footer End -->


