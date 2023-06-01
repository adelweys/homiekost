@extends('master')

@section('content')
    

        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-4">
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Filtering Start -->
        @include('filtering')
        <!-- Filtering End -->


        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Kost <span class="text-primary ">Lavender</span> </h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-8" >
                        <div class="row g-3" style="margin-left: 10%;">
                            <div class="col-md-12">
                                <h5>Deskripsi Kost</h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
                                    ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                    anim id est laborum.
                                </p>
                            </div>
                            <div class="col-md-12">
                                <h5>Spesifikasi Kamar</h5>
                                <p>

                                </p>
                            </div>
                            <div class="col-md-12">
                                <h5>Fasilitas Umum</h5>
                                <div class="row g-3">
                                    <h7><i class="fi fi-rr-restroom-simple"></i>Kamar Mandi Luar</h7>
                                    <h7>Kulkas</h7>
                                    <h7><i class="fi fi-rs-screen"></i>TV</h7>
                                    <h7>Ruang Cuci</h7>
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
                                    <h7> Jendela</h7>
                                    <h7><i class="fi fi-rs-chair"></i>Kursi</h7>
                                    <h7>Bantal</h7>
                                    <h7>Bantal Guling</h7>
                                    <h7>Sprei</h7>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5>Fasilitas Kamar Mandi</h5>
                                <div class="row g-3">
                                    <h7>Kamar Mandi Dalam</h7>
                                    <h7>Kloset Duduk</h7>
                                    <h7>Kloset Jongkok</h7>
                                    <h7>Shower</h7>
                                    <h7>Water Heater</h7>
                                    <h7>Ember mandi</h7>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h5>Fasilitas Kamar Mandi</h5>
                                <div class="row g-3">
                                    <h7>Kamar Mandi Dalam</h7>
                                    <h7>Kamar Mandi Luar</h7>
                                    <h7>Kloset Duduk</h7>
                                    <h7>Kloset Jongkok</h7>
                                    <h7>Shower</h7>
                                    <h7>Water Heater</h7>
                                    <h7>Ember mandi</h7>
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
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <h5>Deskripsi Kost</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <h5>Deskripsi Kost</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <h5>Deskripsi Kost</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <h5>Deskripsi Kost</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <h5>Deskripsi Kost</h5>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <label for="alamat">Alamat Kos</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">

                                                <label for="select1">Jenis kost</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="harga" placeholder="link">
                                                <label for="link">Link Google maps</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Deskripsi" id="message"
                                                    style="height: 100px"></textarea>
                                                <label for="Deskripsi">Deskripsi Kos</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- step 1 end -->
                            </div> 
                       
                            </form>
                            <!-- FORM KOST END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- KAMAR KOST END -->
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Our Team</h6>
                    <h1 class="mb-5">Kost <span class="text-primary text-uppercase">Lavender</span></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-1.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-2.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-3.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="rounded shadow overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="img/team-4.jpg" alt="">
                                <div class="position-absolute start-50 top-100 translate-middle d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4 mt-3">
                                <h5 class="fw-bold mb-0">Full Name</h5>
                                <small>Designation</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
    
        <!-- Newsletter Start -->
        <div class="container newsletter mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="row justify-content-center">
                <div class="col-lg-10 border rounded p-1">
                    <div class="border rounded text-center p-1">
                        <div class="bg-white rounded text-center p-5">
                            <h4 class="mb-4 text-dark text-uppercase">Masukkan email untuk mendapatkan info terbaru</span></h4>
                            <div class="position-relative mx-auto" style="max-width: 400px;">
                                <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="email">
                                <button type="button" class="btn btn-primary py-2 px-3 position-absolute top-0 end-0 mt-2 me-2">Kirim</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter Start -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container pb-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-4">
                        <div class="bg-primary rounded p-4">
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">Hotelier</h1></a>
                            <p class="text-white mb-0">
								Download <a class="text-dark fw-medium" href="https://htmlcodex.com/hotel-html-template-pro">Hotelier – Premium Version</a>, build a professional website for your hotel business and grab the attention of new visitors upon your site’s launch.
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <div class="row gy-5 g-4">
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Company</h6>
                                <a class="btn btn-link" href="">About Us</a>
                                <a class="btn btn-link" href="">Contact Us</a>
                                <a class="btn btn-link" href="">Privacy Policy</a>
                                <a class="btn btn-link" href="">Terms & Condition</a>
                                <a class="btn btn-link" href="">Support</a>
                            </div>
                            <div class="col-md-6">
                                <h6 class="section-title text-start text-primary text-uppercase mb-4">Services</h6>
                                <a class="btn btn-link" href="">Food & Restaurant</a>
                                <a class="btn btn-link" href="">Spa & Fitness</a>
                                <a class="btn btn-link" href="">Sports & Gaming</a>
                                <a class="btn btn-link" href="">Event & Party</a>
                                <a class="btn btn-link" href="">GYM & Yoga</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
        @endsection
