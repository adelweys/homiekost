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
                        <form>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email</label>
                                <input type="email" id="form2Example1" class="form-control" placeholder="Email" />
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Kata sandi</label>
                                <input type="password" id="form2Example2" class="form-control"
                                    placeholder="Kata sandi" />
                            </div>

                            <div class="row mb-4">
                                <div class="col d-flex justify-content-end">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31"> ingat saya </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <!-- Simple link -->
                                    <a href="#!">Lupa kata sandi?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="d-grid mb-4">
                                <button class="btn btn-primary" type="button">Masuk</button>
                            </div>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Belum punya akun? <a href="/register">Daftar</a></p>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Login End -->
 <!-- Footer Start -->

 <!-- Footer End -->
     
 @endsection