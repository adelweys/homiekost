@extends('layouts.master')

@section('content')
    @include('layouts.banner-top')

    <!-- Carousel Start -->
    @include('layouts.header-utama')
    <!-- Carousel End -->

    {{-- Filtering --}}
    @include('layouts.filtering')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary"></h6>
                    <h1 class="mb-4">Selamat datang di <span class="text-primary text-uppercase">Homiekost</span></h1>
                    <p class="mb-4">Homiekost, sebuah website pencarian kos di sekitar Universitas Sumatera Utara. Kini kamu dapat menemukan kos impian kamu melalui platform digital.</p>
                    <div class="row g-3 pb-4">
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ $costCount }}</h2>
                                    <p class="mb-0">Kost</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                    <div class="row">
                                        <div class="column">
                                            <h2 class="mb-1" data-toggle="counter-up">{{ $roomCount }}</h2>
                                        </div>
                                    </div>
                                    <p class="mb-0">Kamar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-primary mb-2"></i>
                                    <h2 class="mb-1" data-toggle="counter-up">{{ $ownerCount }}</h2>
                                    <p class="mb-0">Penyewa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/kos3.jpg" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/kos10.jpg">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/kos8.jpg">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/kos9.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    <!-- Room Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow" data-wow-delay="0.1s">
            <h1 class="mb-5">Jelajahi <span class="text-primary text-uppercase">Homiekost</span></h1>
        </div>
        <div class="row g-4">
            @php
            $cardCount = 0; // Inisialisasi variabel untuk menghitung jumlah card yang ditampilkan
            $i = 0.1;
            @endphp
            @foreach ($costs as $cost)
                @php
                // Pastikan jumlah card yang ditampilkan tidak lebih dari 9
                if ($cardCount >= 9) {
                    break;
                }
                $minPrice = null;
                $cheapestRoom = null;

                foreach ($cost->rooms as $room) {
                    if (!$minPrice || $room->price < $minPrice) {
                        $minPrice = $room->price;
                        $cheapestRoom = $room;
                    }
                }
                $cardCount++;
                @endphp
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{$i}}s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <a href="{{ route('show', $cost->slug) }}">
                                <img class="img-fluid" src="/img/room-1.jpg" alt="">
                            </a>
                            <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                        </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h4 class="mb-0">
                                    <a href="{{ route('show', $cost->slug) }}">KOS {{$cost->cost_name}}</a>
                                </h4>
                                <p class="text-body mb-3">
                                    <h4>Rp <span class="color-primary">
                                        @php
                                        $selectedRoom = $cost->rooms->where('room_name', $cheapestRoom->room_name)->first();
                                        $price = $selectedRoom ? $selectedRoom->price : 'Data Kamar tidak tersedia';
                                        @endphp
                                        {{ number_format($price, 0, ',', '.') }}
                                    </span></h4>/ bulan
                                </p>
                            </div>
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">
                                    Kamar {{$cheapestRoom->room_name}}
                                </h5>
                            </div>
                            <div class="d-flex mb-3">
                                <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><br>
                                    @if ($cheapestRoom->bed == 'yes')
                                        Tersedia Kasur
                                    @else
                                        Tidak Tersedia Kasur
                                    @endif
                                </small>
                                <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><br>
                                    @if ($cost->costFacility->bathroom == 'inside')
                                        Kamar Mandi Dalam
                                    @else
                                        K.Mandi Luar
                                    @endif
                                </small>
                                <small><i class="fa fa-wifi text-primary me-2"></i><br>
                                    @if ($cost->costFacility->wifi == 'yes')
                                        Tersedia Wifi
                                    @else
                                        Tidak Tersedia Wifi
                                    @endif
                                </small>
                            </div>
                            <h6>{{$cost->cost_location}}</h6>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('show', $cost->slug) }}">Selengkapnya</a>
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="{{ route('sewa', $cost->slug) }}">Ajukan sewa</a>
                            </div>
                        </div>
                    </div>
                </div>
                @php
                $i += 0.3;
                if ($i > 0.9) {
                    $i = 0.1;
                }
                @endphp
            @endforeach
        </div>
        <div class="col-mb-12" style="text-align: right;">
            <a class="btn btn-primary py-2 px-3 mt-2" style="align-content: right;" href="{{route('cost-list')}}">
                <i class="bi bi-arrow-right-circle-fill" style="font-size:20px"></i>
            </a>
        </div>
    </div>
</div>
<!-- Room End -->

        <!-- Contact Start -->
        @include('layouts.newsletter')
        <!-- Contact End -->
    
        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->
    @endsection
    
