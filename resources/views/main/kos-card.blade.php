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
                    @forelse ($costs as $cost)
                        @foreach ($cost->rooms as $room)
                        @php
                        $price = $room->price;
                        @endphp
                                {{-- @php
                                $selectedRoom = $cost->rooms->where('room_name', $room->room_name)->first();
                                $minPrice = $selectedRoom ? $selectedRoom->price : 0;
                                $maxPrice = $selectedRoom ? $selectedRoom->price : 0;
                                // Ganti 0 dengan nilai default yang sesuai jika $selectedRoom tidak ada
                                @endphp --}}
                                @if (($price >= $minPrice && $price <= $maxPrice) && ($cost->cost_location == $selectedLocation) && (str_contains(strtolower($cost->cost_name), strtolower($searchQuery))))                        

                            <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="{{$i}}s">
                                <div class="room-item shadow rounded overflow-hidden">
                                    <div class="position-relative">
                                        <a href="{{ route('show',  $cost->slug) }}"><img class="img-fluid" src="/img/room-1.jpg" alt=""></a>
                                        <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                                    </div>
                                    <div class="p-4 mt-2">
                                        <div class="d-flex justify-content-between mb-3">
                                            <h4 class="mb-0"><a href="{{ route('show',  $cost->slug) }}">
                                                KOS {{$cost->cost_name}}</a></h4>
                                            
                                            <div class="ps-2">
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                                <small class="fa fa-star text-primary"></small>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-3">
                                            <h5 class="mb-0">
                                                Kamar {{$room->room_name}}
                                            </h5>
                                        </div>
                                        <div class="d-flex mb-3">
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Kasur</small>
                                            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>K. Mandi Dalam</small>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        </div>
                                        <p>Facilities:</p>
                                        <ul>
                                            @if ($cost->costFacility)
                                            <li>wifi : {{ $cost->costFacility->wifi }}</li>
                                            <li>parkir mobil: {{ $cost->costFacility->car_park }}</li>
                                            <li>parkir motor:{{ $cost->costFacility->bike_park }}</li>
                                            @endif
                                        </ul>
                                        <p class="text-body mb-3">{{$cost->cost_location}} <br>
                                            @php
                                            $selectedRoom = $cost->rooms->where('room_name', $room->room_name)->first();
                                            $price = $selectedRoom ? $selectedRoom->price : 'Data Kamar tidak tersedia';
                                            @endphp
                                            {{ $price }}/Bulan
                                        </p>
                                        <div class="d-flex justify-content-between">
                                            <a class="btn btn-sm btn-primary rounded py-2 px-4" 
                                            href="{{ route('show',  $cost->slug) }}">Selengkapnya</a>
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
                            @endif
                        @endforeach
                        @empty
                            <p>Tidak ada hasil yang sesuai dengan filter yang diberikan.</p>
                    @endforelse
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