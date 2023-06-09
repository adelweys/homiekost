@extends('layouts.master')

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


    <!-- Filtering Start -->
    @include('layouts.filtering')   
    <!-- Filtering End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Kost <span class="text-primary "></span>
                    {{$cost->cost_name}}
                    </h1>
                </div>
                <div class="row g-5 wow fadeInUp">
                    <div class="col-lg-8">
                        <div class="row g-3" style="margin-left: 10%;">
                            <div class="col-md-12">
                                
                                @if ($cost->costFacility)
                                    <img class="img-fluid" src="{{$cost->photo}}" alt="">
                                @else
                                    <img class="img-fluid" src="{{asset('/img/kos1.jpg')}}" alt="">
                                @endif
                                
                            </div>

                            <div class="col-md-12">
                                <h4>Deskripsi Kamar</h4>
                                <p>
                                    {{$cost->description}}
                                </p>
                            </div>
                            <hr>

                            {{-- list fasilitasi kos --}}
                            <div class="col-md-12">
                                @if ($cost->costFacility)
                                <h4>Fasilitas Kos
                                    <br>
                                    <p></p>
                                </h4>
                                <div class="row g-3">
                                    {{-- kamar mandi --}}
                                    @if ($cost->costFacility->bathroom == 'inside')
                                    
                                        <h6><i class="fi fi-rr-restroom-simple"></i>Kamar Mandi Dalam</h6>
                                    
                                    @elseif($cost->costFacility->bathroom == 'outside')
                                        <h6><i class="fi fi-rr-restroom-simple"></i>Kamar Mandi Luar</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif
                                    
                                    {{-- parkir mobil --}}
                                    @if ($cost->costFacility->car_park == 'yes')
                                    
                                        <h6><i class="fi fi-ts-cars"></i> Tersedia Parkir Mobil</h6>
                                    
                                    @elseif($cost->costFacility->car_park == 'no')
                                        <h6><i class="fi fi-ts-cars"></i> Tidak Ada Parkir Mobil</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- parkir kereta --}}
                                    @if ($cost->costFacility->bike_park == 'yes')
                                    
                                        <h6><i class="fi fi-rs-motorcycle"></i> Tersedia Parkir motor</h6>
                                    
                                    @elseif($cost->costFacility->bike_park == 'no')
                                        <h6><i class="fi fi-rs-motorcycle"></i> Tidak Ada Parkir motor</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- wifi --}}
                                    @if ($cost->costFacility->wifi == 'yes')
                                    
                                        <h6><i class="fi fi-br-wifi"></i> Tersedia WiFi</h6>
                                    
                                    @elseif($cost->costFacility->wifi == 'no')
                                        <h6><i class="fi fi-br-wifi"></i> Tidak Ada WiFi</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- dapur --}}
                                    @if ($cost->costFacility->kitchen == 'yes')
                                    
                                        <h6><i class="fi fi-rs-restaurant"></i> Tersedia Dapur</h6>
                                    
                                    @elseif($cost->costFacility->kitchen == 'no')
                                        <h6><i class="fi fi-rs-restaurant"></i> Tidak Ada Dapur</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- pos satpam --}}
                                    @if ($cost->costFacility->security == 'yes')
                                    
                                        <h6><i class="fi fi-rs-shield-check"></i>Ada Pos Keamanan</h6>
                                    
                                    @elseif($cost->costFacility->security == 'no')
                                        <h6><i class="fi fi-rs-shield-check"></i>Tidak Ada Pos Keamanan</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- listrik --}}
                                    @if ($cost->costFacility->electric == 'yes')
                                    
                                        <h6><i class="fi fi-rr-restroom-simple"></i>Listrik Gratis</h6>
                                    
                                    @elseif($cost->costFacility->electric == 'no')
                                        <h6><i class="fi fi-rr-restroom-simple"></i> Token Listrik</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- air pam/sumur --}}
                                    @if ($cost->costFacility->pam == 'yes')
                                    
                                        <h6><i class="fi fi-rr-restroom-simple"></i> Air Gratis </h6>
                                    
                                    @elseif($cost->costFacility->pam == 'no')
                                        <h6><i class="fi fi-rr-restroom-simple"></i> Air PAM </h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif
                                    
                                </div>
                                @endif
                            </div>
                            <hr>

                            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                                <h3 class="mb-5">Tipe Kamar Kost <span class="text-primary "></span>
                                     {{$cost->cost_name}}
                                </h3>
                            </div>
                            {{-- list kamar dan fasilitas nya --}}
                            @foreach ($cost->rooms as $room)
                                
                            <br>
                            <div class="col-md-12">
                                <h4>Kamar {{$room->room_name}}</h4>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <h5>Fasilitas Kamar </h5>
                                <div class="row g-3">
                                    {{-- leamri baju --}}
                                    @if ($room->wardrobe == 'yes')
                                    
                                        <h6><i class="fi fi-ts-cars"></i> Tersedia Lemari Pakaian</h6>
                                    
                                    @elseif($room->wardrobe == 'no')
                                        <h6><i class="fi fi-ts-cars"></i> Tidak Tersedia Lemari Pakaian</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif

                                    {{-- bed --}}
                                    @if ($room->bed == 'yes')
                                    
                                        <h6><i class="fi fi-ts-cars"></i> Tersedia Tempat Tidur</h6>
                                    
                                    @elseif($room->bed == 'no')
                                        <h6><i class="fi fi-ts-cars"></i> Tidak Tersedia Tempat Tidur</h6>
                                    
                                    @else
                                        <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                    @endif
                                    
                                    {{-- table set --}}
                                @if ($room->tableset == 'yes')
                                    
                                    <h6><i class="fi fi-rr-restroom-simple"></i>Tersedia Meja Belajar</h6>
                                
                                @elseif($room->tableset == 'no')
                                    <h6><i class="fi fi-rr-restroom-simple"></i>Tidak Tersedia Meja Belajar</h6>
                                
                                @else
                                    <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                @endif
                                

                                {{-- closet --}}
                                @if ($room->closet == 'duduk')
                                
                                    <h6><i><img src="{{asset('/img/tduduk.svg')}}" style="padding: 0%;" />
                                    </i>Kloset Duduk</h6>
                                
                                @elseif($room->closet == 'jongkok')

                                        <h6><i><img src="{{asset('/img/tjongkok.svg')}}" style="padding: 0%;" />
                                        </i>Kloset jongkok</h6>
                              
                                @else
                                    <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                @endif

                                {{-- fan --}}
                                @if ($room->fan == 'yes')
                                
                                    <h6><i class="fi fi-rs-motorcycle"></i> Tersedia Kipas Angin</h6>
                                
                                @elseif($room->fan == 'no')
                                    <h6><i class="fi fi-rs-motorcycle"></i> Tidak Tersedia Kipas Angin</h6>
                                
                                @else
                                    <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                @endif

                                {{-- closet --}}
                                @if ($room->ac == 'yes')
                                
                                    <h6><i class="fi fi-rs-motorcycle"></i> Tersedia AC</h6>
                                
                                @elseif($room->ac == 'no')
                                    <h6><i class="fi fi-rs-motorcycle"></i> Tidak Tersedia AC</h6>
                                
                                @else
                                    <h6>Data Belum dilengkapi Pemilik Kos</h6>
                                @endif
                                <h2></h2>

                                </div>
                            </div>

                            
                            @endforeach
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

