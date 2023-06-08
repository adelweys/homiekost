@extends('layouts.master')

@section('content')
    

    @include('layouts.banner-top')

        <!-- Carousel Start -->
        @include('layouts.header-utama')
        <!-- Carousel End -->



        {{-- Filtering  --}}
        @include('layouts.filtering')


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h6 class="section-title text-start text-primary"></h6>
                        <h1 class="mb-4">Selamat datang di <span class="text-primary text-uppercase">Homiekost</span></h1>
                        <p class="mb-4">Homiekost, sebuah website pencarian kos di sekitar Universitas Sumatera Utara. Kini kamu dapat menemukan kos impian kamu melalui platform digital. </p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text-primary mb-2"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">50</h2>
                                        <p class="mb-0">Kost</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users-cog fa-2x text-primary mb-2"></i>
                                        <div class="row">
                                            <div class="column" >
                                                <h2 class="mb-1" data-toggle="counter-up"> 965 </h2>
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
                                        <h2 class="mb-1" data-toggle="counter-up">40</h2>
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
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/kos2.jpg">
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
                <div class="text-center wow " data-wow-delay="0.1s">
                    <h1 class="mb-5"> Jelajahi <span class="text-primary text-uppercase">Homiekost</span></h1>
                </div>
                <div class="row g-4">
                    @php
                        $cardCount = 0; // Inisialisasi variabel untuk menghitung jumlah card yang ditampilkan
                        $i = 0.1;
                    @endphp
                    {{-- @foreach ($costs as $index => $cost) --}}
                    @foreach ($costs as $cost)
               
                        @php
                      
                            // Pastikan jumlah card yang ditampilkan tidak lebih dari 12
                            if ($cardCount >= 9) {
                                break;
                            }
                            
                            // Pastikan jumlah data di $rooms mencukupi
                            
                            // $room = isset($rooms[$index]) ? $rooms[$index] : null;
                            $cardCount++;
                            // Tambahkan logika pengaturan default jika data tidak tersedia
                        @endphp
                    
                        <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="{{$i}}s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <a href="{{ route('cost.show', ['slug' => Str::slug($cost->cost_name)]) }}"><img class="img-fluid" src="img/room-1.jpg" alt=""></a>
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"><a href="{{ route('cost.show', ['slug' => $cost->slug]) }}">{{$cost->cost_name}}</a></h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Kasur </small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>K. Mandi Dalam</small>
                                        <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    </div>
                                    <p class="text-body mb-3">{{$cost->cost_location}} <br>
                                        @if ($cost->rooms->count() > 0)
                                        {{ $cost->rooms->min('price') }}/Bulan
                                    @else
                                        Data Kamar tidak tersedia
                                    @endif
                                
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="{{ route('cost.show', ['slug' => $cost->slug]) }}">Selengkapnya</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Ajukan sewa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @php
                            $i=$i+0.3;
                            if ($i>0.9) {
                                $i=0.1;
                            }
                        @endphp
                    
                    @endforeach
                </div>
                
                <div class="col-mb-12" style="text-align: right;">
                    <a class="btn btn-primary py-2 px-3 mt-2"  style="align-content: right;"href="{{route('cost-list')}}"><i class="bi bi-arrow-right-circle-fill" style="font-size:20px"></i></a>
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Video Start -->
        <div class="container-xxl py-5 px-0 wow zoomIn" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5">
                        <h6 class="section-title text-start text-white text-uppercase mb-3"></h6>
                        <h1 class="text-white mb-4">Website pencarian kos sekitar USU</h1>
                        <p class="text-white mb-4"> Mencari kos kini jauh lebih mudah. </p>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 me-3">Jelajahi kos</a>
                        <a href="sewa.html" class="btn btn-light py-md-3 px-md-5">Ajukan sewa</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="img/kos1.jpg" alt="">
                </div>
            </div>
        </div>

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Start -->


        


        <!-- Newsletter Start -->

        @include('layouts.newsletter')
        <!-- Newsletter Start -->

        {{-- footer --}}
       @include('layouts.footer')

    
@endsection
