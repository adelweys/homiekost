@extends('layouts.master')

@section('content')
    

@include('layouts.banner-top')

        <!-- Carousel Start -->
        @include('layouts.header-second')
        <!-- Carousel End -->



        {{-- Filtering  --}}
        @include('layouts.filtering')


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Kost <span class="text-primary ">Lavender</span> </h1>
                </div>
                <div class="row g-5 wow fadeInUp">
                    <div class="col-lg-8">
                        <div class="row g-3" style="margin-left: 10%;">
                            <div class="col-md-12">
                                <img class="img-fluid" src="img/kos1.jpg" alt="">
                            </div>

                            <div class="col-md-12">
                                <h5>Deskripsi Kamar</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                                    laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                    officia deserunt mollit
                                    anim id est laborum.
                                </p>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <h5>Fasilitas Umum</h5>
                                <div class="row g-3">
                                    <h7><i class="fi fi-rr-restroom-simple"></i>Kamar Mandi Luar</h7>
                                    <h7><i class="fi fi-rs-restaurant"></i>Dapur</h7>
                                    <h7><i class="fi fi-ts-cars"></i> Parkir Mobil</h7>
                                    <h7><i class="fi fi-rs-motorcycle"></i> Parkir motor</h7>
                                    <h7><i class="fi fi-br-wifi"></i> WiFi</h7>
                                    <h7><i class="fi fi-rs-shield-check"></i> Pos Pengaman</h7>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <h5>Fasilitas Kamar</h5>
                                <div class="row g-3">
                                    <h7><i class="fi fi-rr-bed-alt"></i>Kasur</h7>
                                    <h7>AC</h7>
                                    <h7><i class="fi fi-rs-chair"></i>Kursi</h7>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <h5>Fasilitas Kamar Mandi</h5>
                                <div class="row g-3">
                                    <h7><i class="fi fi-rr-bed-alt"></i>Kasur</h7>
                                    <h7>AC</h7>
                                    <h7><i class="fi fi-rs-chair"></i>Kursi</h7>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5>Fasilitas Kamar Mandi</h5>
                                <div class="row g-3">
                                    <h7>Kamar Mandi Dalam</h7>
                                    <div class="row g-1">
                                        <div class="col-1 icondetail" style="margin-right: -1.2rem">
                                            <img src="img/tduduk.svg" style="padding: 0%;" />
                                        </div>
                                        <div class="col">
                                            <h7>Kloset Duduk</h7>
                                        </div>
                                    </div>
                                    <h7>Kamar Mandi Dalam</h7>
                                    <div class="row g-1">
                                        <div class="col-1 icondetail" style="margin-right: -1.2rem">
                                            <img src="img/tjongkok.svg" style="padding: 0%;" />
                                        </div>
                                        <div class="col">
                                            <h7>Kloset jongkok</h7>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <!-- FORM KOST START -->
                            <!-- step 1 start -->
                            <div class="row g-3">
                                <div class="col-md-12" style="text-align: center;">
                                </div>
                                <div class="col-md-12" style="max-height: py-30;">
                                    <img class="img-fluid" src="img/kos1.jpg" alt="">
                                </div>
                                <div class="col-md-12" style="text-align: right;">
                                    <a class="btn btn-primary py-2 px-2 mt-2" href="foto.html">lihat foto</a>
                                </div>
                            </div>
                        </div>
                        <!-- step 1 end -->
                    </div>

                    </form>
                    <!-- FORM KOST END -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- KAMAR KOST END -->
    </div>
    </div>
    </div>
    <!-- About End -->


        


        <!-- Newsletter Start -->

        @include('layouts.newsletter')
        <!-- Newsletter Start -->

        {{-- footer --}}
       @include('layouts.footer')

    
@endsection
