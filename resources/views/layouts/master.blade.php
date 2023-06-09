<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Homiekost</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">
<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    {{-- <link href="{{asset('/img/favicon.ico')}}" rel="icon"> --}}
    <link href="img/favicon.ico" rel="icon">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    {{-- <link href="{{asset('/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" /> --}}
    <link href="/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Flaticon -->
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-rounded/css/uicons-bold-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-thin-rounded/css/uicons-thin-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-bold-straight/css/uicons-bold-straight.css'>
    
    {{-- start ariyo --}}
    <!-- Customized Bootstrap Stylesheet -->
    {{-- <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    {{-- <link href="{{asset('/css/style.css')}}" rel="stylesheet"> --}}
    <link href="/css/style.css" rel="stylesheet">
    {{-- ens ariyo --}}

    {{-- start arya --}}
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sass/rating.scss') }}" rel="stylesheet"

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    {{-- end arya --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <div class="container-fluid bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    

    @yield('content')

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>

  <!-- rating.js file -->
  <script src="{{ asset('js/rating.js') }}"></script>
This code uses jQuery to listen for changes in the selected duration and calculates the total price by multiplying the base price with the selected duration. The updatePrice function is called initially on page load and whenever the duration selection changes. The calculated total price is then displayed in the disabled input field with the id harga.







  {{-- start ariyo  --}}

 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 {{-- <script src="{{asset('/lib/wow/wow.min.js')}}"></script>
 <script src="{{asset('/lib/easing/easing.min.js')}}"></script>
 <script src="{{asset('/lib/waypoints/waypoints.min.js')}}"></script>
 <script src="{{asset('/lib/counterup/counterup.min.js')}}"></script>
 <script src="{{asset('/lib/owlcarousel/owl.carousel.min.js')}}"></script>
 <script src="{{asset('/lib/tempusdominus/js/moment.min.js')}}"></script>
 <script src="{{asset('/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
 <script src="{{asset('/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script> --}}

 <script src="/lib/wow/wow.min.js"></script>
 <script src="/lib/easing/easing.min.js"></script>
 <script src="/lib/waypoints/waypoints.min.js"></script>
 <script src="/lib/counterup/counterup.min.js"></script>
 <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
 <script src="/lib/tempusdominus/js/moment.min.js"></script>
 <script src="/lib/tempusdominus/js/moment-timezone.min.js"></script>
 <script src="/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

 <!-- Template Javascript -->
 <script src="/js/main.js"></script>    
 {{-- <script src="{{asset('/js/main.js')}}"></script> --}}

 {{-- end ariyo --}}

 {{-- satrt arya --}}
 
 <script src="{{ asset('https://code.jquery.com/jquery-3.4.1.min.js') }}"></script>
 <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
 <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
 <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

 <!-- Template Javascript -->
 <script src="{{ asset('js/main.js') }}"></script>

 {{-- end arya --}}
    
</body>
</html>