

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="index.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                        <h1 class="m-0 text-primary text-uppercase">Homiekost</h1>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="row gx-0 bg-white d-none d-lg-flex">
                        <div class="col-lg-7 px-5 text-start">
                            <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                                <i class="fa fa-envelope text-primary me-2"></i>
                                <p class="mb-0">info@homiekost.com</p>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="index.html" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Homiekost</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                            @yield('navbar_active')
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Homiekost</h1>
                    <h5 class="display-6 text-white mb-3 animated slideInDown">Teman terbaik untuk cari kos
                    </h5>
                </div>
            </div>
        </div>
        <!-- Page Header End -->


        <!-- Filtering Start -->
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-6">
                                    <form action="/action_page.php">
                                        <input class="form-control col-md-3" type="text" placeholder="Mau cari kos apa?">
                                    </form>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected> Wilayah</option>
                                        <option value="1"> Dr. Mansur </option>
                                        <option value="2"> Jamin Ginting </option>
                                        <option value="3"> Setia Budi </option> 
                                        <option value="4"> Iskandar muda </option> 
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Harga</option>
                                        <option value="1"> < Rp 500.000 </option>
                                        <option value="2"> Rp 500.000 - Rp 850.000</option>
                                        <option value="3"> Rp 850.000 - Rp 1.300.000 </option> 
                                        <option value="4"> > Rp 1.300.000 </option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100">Cari</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Filtering End -->