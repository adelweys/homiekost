    @extends('layouts.master')

    @section('content')
    
    @include('layouts.banner-top')

        <!-- Page Header Start -->
        @include('layouts.header-second')

        <!-- Page Header End -->


        <!-- Filtering Start -->
        @include('layouts.filtering')   
        <!-- Filtering End -->


        <!-- Room Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Pilihan Kos</h6>
                    <h1 class="mb-5">Jelajahi <span class="text-primary text-uppercase">Kos-kosan</span></h1>
                </div>
                <div class="row g-4">
                    @php
                        $i = 0.1;
                    @endphp
                    @foreach ($costs as $index => $cost)
                        @php           
                            // Pastikan jumlah data di $rooms mencukupi
                            $room = isset($rooms[$index]) ? $rooms[$index] : null;
                            // Tambahkan logika pengaturan default jika data tidak tersedia
                        @endphp
                    
                        <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="{{$i}}s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="img/room-1.jpg" alt="" href="{{route('cost.show', $cost->slug)}}">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"><a href="{{ route('cost.show', $cost->slug) }}">{{$cost->cost_name}}</a></h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Kasur  </small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>K. Mandi Dalam </small>
                                        <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                    </div>
                                    <p class="text-body mb-3">{{$cost->cost_location}} <br>
                                        @if ($room)
                                            {{$room->price}}/ Bulan
                                        @else
                                            Data kamar tidak tersedia
                                        @endif
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="/detailkos">Selengkapnya</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Ajukan sewa</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @if (($index + 1) % 3 == 0)
                            <div class="w-100"></div> <!-- Menambahkan elemen div dengan class w-100 untuk membuat baris baru setelah setiap 3 kartu -->
                        @endif
                        @php
                            $i=$i+0.3;
                            if ($i>0.9) {
                                $i=0.1;
                            }
                        @endphp
                    
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Room End -->


        <!-- Newsletter Start -->
        @include('layouts.newsletter')

        <!-- Newsletter Start -->
        

        <!-- Footer Start -->
        @include('layouts.footer')
        <!-- Footer End -->
    
@endsection