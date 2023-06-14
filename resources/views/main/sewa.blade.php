@extends('layouts.master2')

@section('content')

    @include('layouts.banner-top')

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url('img/carousel-1.jpg');">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center pb-5">
                <h1 class="display-3 text-white mb-3 animated slideInDown"> Homiekost<span class="color-primary">. </span></h1>
                <h5 class="display-6 text-white mb-3 animated slideInDown">Teman terbaik untuk cari kos
                </h5>
            </div>
        </div>
    </div>
    {{-- @include('layouts.header-second') --}}

    <!-- Page Header End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Penyewaan <span class="text-primary text-uppercase">Kost {{ $cost->cost_name }}</span> </h1>
                </div>
                
                <div class="row g-4">
                <div class="col-md-6">
                    <img src="/img/about-1.jpg" alt="about-1">
                </div>
                <div class="col-md-6">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <form action="{{ route('sewaStore') }}" method="post">
                            @method('post')
                            @csrf
                            <input type="hidden" name="cost_id" value="{{ $cost->id }}">
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <select class="form-select" id="durasi" name="durasi" aria-label="durasi">
                                            <option value="1" selected>1 Bulan</option>
                                            <option value="3">3 Bulan</option>
                                            <option value="6">6 Bulan</option>
                                            <option value="12">12 Bulan</option>
                                        </select>
                                        <label for="durasi">Pilih Durasi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nomor" name="nomor" placeholder="Your Name">
                                        <label for="nomor">Nomor yang bisa dihubungi</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="harga" name="harga" placeholder="harga" disabled>
                                        <label for="harga">Rp. {{ number_format($cost->harga_bulan, 0, ',', '.') }}</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="contact_person" placeholder="contact" disabled>
                                        <label for="contact_person"><b>CP :</b> {{ $cost->contact_person }}</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Pesan Kos</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
    
    <!-- KAMAR KOST END -->
    
    <!-- About End -->

 <!-- Newsletter Start -->
 @include('layouts.newsletter')

 <!-- Newsletter Start -->
 

 <!-- Footer Start -->
 @include('layouts.footer')

 <!-- Footer End -->
 @endsection

