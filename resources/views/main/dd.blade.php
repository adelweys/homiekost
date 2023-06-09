        @extends('layouts.master')

        @section('content')


        @include('layouts.banner-top')

        <!-- Carousel Start -->
        @include('layouts.header-utama')
        <!-- Carousel End -->



        {{-- Filtering --}}
        @include('layouts.filtering')


        <!-- About Start -->
       
        <!-- About End -->


        <!-- Room Start -->
        
                <div class="container-fluid py-5">
                    <div class="container">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-5">Kost <span class="text-primary ">{{$cost->cost_name}}</span> </h1>
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
                                <div class="card my-3">
                                    <div class="card-body">
                                        <h5 class="card-title">Rp500.000<span class="color-primary"> /bulan</span></h5>
                                        <p class="card-text">Top 2 Rekomendasi dari Kami.</p>
                                        <div class="d-grid gap-2">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Ajukan Sewa
                                            </button>
                                            </div>
                                            <!-- Modal -->
                                        <div class="modal fade" id="exampleModal" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Konfirmasi Pengajuan Sewa</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Apakah Anda benar ingin mengajukan sewa ini?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <button type="button" class="btn btn-primary">Konfirmasi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            </form>
                            <!-- FORM KOST END -->
                        </div>
                    
                {{-- <div class="row g-4">
                    @php
                    $cardCount = 0; // Inisialisasi variabel untuk menghitung jumlah card yang ditampilkan
                    $i = 0.1;
                    @endphp
                    @foreach ($costs as $cost)
                    @foreach ($cost->rooms as $room)
                    @php
                    // Pastikan jumlah card yang ditampilkan tidak lebih dari 12
                    if ($cardCount >= 9) {
                    break;
                    }
                    $cardCount++;
                    @endphp

                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="{{$i}}s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <a href=""><img class="img-fluid" src="img/room-1.jpg" alt=""></a>
                                <small
                                    class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><a href="">{{$cost->cost_name}}</a>
                                    </h5>
                                    <h3>

                                        {{$room->room_name}}
                                    </h3>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Kasur
                                    </small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>K. Mandi
                                        Dalam</small>
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
                                    @if ($room->count() > 0)
                                    {{ $room->min('price') }}/Bulan
                                    @else
                                    Data Kamar tidak tersedia
                                    @endif

                                </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Selengkapnya</a>
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
                    @endforeach
                </div>  --}}
                {{-- ini adalah comment untuk card dimana card tersebut sudah dapat mengambil data
                dari ke 3 tabel, dan mengulanginya sesuai dengan jumlah rooms yang ada --}}

                {{-- href="{{ route('cost.show', ['slug' => $cost->slug]) }}">Selengkapnya</a> --}}

                {{-- <div class="row g-4">
                    @php
                    $cardCount = 0; // Inisialisasi variabel untuk menghitung jumlah card yang ditampilkan
                    $i = 0.1;
                    @endphp
                    @foreach ($costs as $cost)
                    @php
                    // Pastikan jumlah card yang ditampilkan tidak lebih dari 12
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
                
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="{{$i}}s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <a href=""><img class="img-fluid" src="img/room-1.jpg" alt=""></a>
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><a href="">{{$cost->cost_name}}</a></h5>
                                    @if ($cheapestRoom)
                                        <h3>{{$cheapestRoom->room_name}}</h3>
                                    @endif
                                    <!--rating-->
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <!-- end rating -->
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
                                    @if ($cheapestRoom)
                                        {{ $minPrice }}/Bulan
                                    @else
                                        Data Kamar tidak tersedia
                                    @endif
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Selengkapnya</a>
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
                </div> --}}
                
                {{-- ini adalah comment untuk card dimana card tersebut  dapat mengambil data
                    dari ke 3 tabel, dan show price terendah dari sebuah cost --}}
                    
          
                {{-- <div class="row g-4">
                    @php
                    $cardCount = 0; // Inisialisasi variabel untuk menghitung jumlah card yang ditampilkan
                    $i = 0.1;
                    @endphp
                    @foreach ($costs as $cost)
                    @php
                    // Pastikan jumlah card yang ditampilkan tidak lebih dari 12
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
                
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="{{$i}}s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <a href=""><img class="img-fluid" src="img/room-1.jpg" alt=""></a>
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">{{$cost->cost_type}}</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h4 class="mb-0"><a href="">KOS {{$cost->cost_name}}</a></h4>
                                    
                                    <!-- rating -->
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <!-- end rating -->
                                </div>
                                <div class="d-flex justify-content-between mb-3">
                                    @if ($cheapestRoom)
                                        <h5 class="mb-0">Kamar {{$cheapestRoom->room_name}}</h5>
                                    @endif
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
                                    @if ($cheapestRoom)
                                        {{ $minPrice }}/Bulan
                                    @else
                                        Data Kamar tidak tersedia
                                    @endif
                                </p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="">Selengkapnya</a>
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
                </div> --}}

                {{-- ini adalah comment untuk card dimana card tersebut  dapat mengambil data
                    dari ke 3 tabel, dan show price terendah dari sebuah cost dan menampilkan room yang sesuai dengan harga  --}}


                
                <div class="col-mb-12" style="text-align: right;">
                    <a class="btn btn-primary py-2 px-3 mt-2" style="align-content: right;" href="{{route('cost-list')}}"><i
                            class="bi bi-arrow-right-circle-fill" style="font-size:20px"></i></a>
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