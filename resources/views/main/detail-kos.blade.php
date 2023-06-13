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
                                    <img class="img-fluid" src="/img/kos1.jpg" alt="">
                                    {{-- {{$cost->photo}} --}}
                                @else
                                    <img class="img-fluid" src="/img/kos1.jpg')}" alt="">
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
                               
                                    <h6>
                                        <i><svg fill="#000000" height="18" width="18" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 511.998 511.998" xml:space="preserve" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M299.102,0v42.278v30.417V225.11H20.279v42.278v25.349v5.068h0.088c0.89,28.175,9.183,55.51,24.136,79.35 c13.72,21.875,32.505,40.054,54.693,53.018v81.824h301.282v-80.794c0-19.06,6.787-37.564,19.113-52.103l45.798-54.024 c16.979-20.028,26.329-45.516,26.329-71.771V72.695V42.278V0H299.102z M50.696,255.529h248.406v11.861H50.696V255.529z M461.303,253.307c0,19.059-6.787,37.563-19.113,52.102l-45.798,54.023c-16.979,20.027-26.329,45.515-26.329,71.772v50.378 H129.615V411.81l-8.331-4.224c-42.024-21.305-68.685-63.048-70.489-109.78h278.725v-72.695V72.695h131.783V253.307z M461.303,42.278H329.519V30.417h131.783V42.278z"></path> </g> </g> </g></svg></i>
                                    Kloset Duduk</h6>
                                
                                @elseif($room->closet == 'jongkok')

                                        <h6><i><svg fill="#000000" height="18" width="18" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" data-darkreader-inline-fill="" style="--darkreader-inline-fill: #181a1b;"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M20.062,4.25l-3.4-3A1,1,0,0,0,16,1H8a1,1,0,0,0-.662.25l-3.4,3a1,1,0,0,0-.329.618l-1.6,12A1,1,0,0,0,3,18H5.111C5.756,20.883,9.09,23,12,23s6.244-2.117,6.889-5H21a1,1,0,0,0,.991-1.132l-1.6-12A1,1,0,0,0,20.062,4.25ZM18,16a1,1,0,0,0-1,1c0,2.154-2.75,4-5,4s-5-1.846-5-4a1,1,0,0,0-1-1H4.142l.133-1H6a1,1,0,0,0,0-2H4.542l.134-1H6a1,1,0,0,0,0-2H4.942l.134-1H6A1,1,0,0,0,6,7H5.342l.2-1.5L8.378,3h7.244l2.836,2.5.2,1.5H18a1,1,0,0,0,0,2h.924l.134,1H18a1,1,0,0,0,0,2h1.324l.134,1H18a1,1,0,0,0,0,2h1.725l.133,1ZM13,5H11A3,3,0,0,0,8,8v6a4,4,0,0,0,8,0V8A3,3,0,0,0,13,5Zm1,9a2,2,0,0,1-4,0V8a1,1,0,0,1,1-1h2a1,1,0,0,1,1,1Z"></path></g></svg>
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
                        @if (auth()->check())
                            @include('partials.rating')
                            @include('partials.comment')
                            @include('partials.chat')
                        @else
                            <h6 class="ms-5">Log in to comment and rate and chat with the owner</h6>
                        @endif
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

