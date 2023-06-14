@extends('layouts.master')

@section('content')

    @include('layouts.banner-top')

    <!-- Page Header Start -->
    @include('layouts.header-second')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h6 class="section-title text-start text-primary"></h6>
                    <h1 class="mb-4">Status         <span class="text-primary text-uppercase">Kos Anda</span></h1>
                    <div class="row g-3 pb-4">
                        @foreach($kos as $sewa)
                        <h3>Kos <span class="text-primary text-uppercase">{{ $sewa->cost->cost_name }} </span> yang sudah anda pesan dalam keadaan @if ($sewa->status == 'aktif')
                            <span class="text-secondary text-uppercase">{{ $sewa->status }} </span>
                        @else
                            <span class="text-danger text-uppercase">{{ $sewa->status }} </span>
                        @endif</h3>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Newsletter Start -->
@include('layouts.newsletter')

<!-- Newsletter Start -->


<!-- Footer Start -->
@include('layouts.footer')
<!-- Footer End -->