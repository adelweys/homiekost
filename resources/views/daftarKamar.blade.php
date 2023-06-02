<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Header Start -->
        <div class="container-fluid bg-dark px-0">
            <div class="row gx-0">
                <div class="col-lg-3 bg-dark d-none d-lg-block">
                    <a href="/"
                        class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
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
                            <div class="h-100 d-inline-flex align-items-center py-2">
                                <i class="fa fa-phone-alt text-primary me-2"></i>
                                <p class="mb-0">+62 123 456 789</p>
                            </div>
                        </div>
                        <div class="col-lg-5 px-5 text-end">
                            <div class="d-inline-flex align-items-center py-2">
                                <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                                <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                                <a class="" href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                    <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0">
                        <a href="/" class="navbar-brand d-block d-lg-none">
                            <h1 class="m-0 text-primary text-uppercase">Homiekost</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto py-0">
                                <a href="/" class="nav-item nav-link">Home</a>
                                <a href="/about" class="nav-item nav-link active">About</a>
                                <a href="/kos_card" class="nav-item nav-link">Kost</a>
                                <a href="/contact" class="nav-item nav-link">Contact</a>
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


        <!-- KAMAR KOST START -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="mb-5">Biodata <span class="text-primary text-uppercase">Kost</span> </h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/kos3.jpg"
                                    style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s"
                                    src="img/kos2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s"
                                    src="img/kamar6.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s"
                                    src="img/kamar2.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <!-- FORM KOST START -->
                            <form id="multistep-form">
                                <!-- step 1 start -->
                                <div class="step">
                                    <div class="row g-3">
                                        <div class="col-md-12" style="text-align: center;">
                                            <h6 class="section-title text-center text-primary text-uppercase">
                                                Spesifikasi Kost
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Nama">
                                                <label for="nama">Nama Kost</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="alamat"
                                                    placeholder="Alamat">
                                                <label for="alamat">Alamat Kos</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select">
                                                    <option value="1"> Dr. Mansur </option>
                                                    <option value="2"> Jamin Ginting </option>
                                                    <option value="3"> Setia Budi </option>
                                                    <option value="4"> Iskandar muda </option>
                                                </select>
                                                <label for="select1">Pilih wilayah</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select">
                                                    <option value="1"> Putra </option>
                                                    <option value="2"> Putri </option>
                                                    <option value="3"> Campur </option>
                                                </select>
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
                                        <div class="col-md-12" style="font-weight: bold;">
                                            Foto Bangunan Kos (Foto dapat lebih dari 1)
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-floating">
                                                <input type="file" id="files" accept="image/x-png,image/gif,image/jpeg"
                                                    name="files" multiple>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- step 1 end -->
                                <!-- step 2 start -->
                                <div class="step">
                                    <div class="row g-3">
                                        <div class="col-md-12" style="text-align: center;">
                                            <h6 class="section-title text-center text-primary text-uppercase">
                                                Spesifikasi Kamar</h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="ukuran" placeholder="Nama">
                                                <label for="ukuran">Ukuran kamar</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="alamat"
                                                    placeholder="Alamat">
                                                <label for="alamat">Harga</label>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Deskripsi" id="message"
                                                    style="height: 100px"></textarea>
                                                <label for="Deskripsi">Deskripsi Kamar </label>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="font-weight: bold;">
                                            Foto kamar (Foto dapat lebih dari 1)
                                        </div>
                                        <div class=" col-md-6">
                                            <div class="form-floating">
                                                <input type="file" id="files" accept="image/x-png,image/gif,image/jpeg"
                                                    name="files" multiple>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        </div>
                                    </div>
                                </div>
                                <!-- step 2 end -->

                                <!-- step 3 start -->
                                <div class="step">
                                    <div class="row g-3">
                                        <div class="col-md-12" style="text-align: center;">
                                            <h6 class="section-title text-center text-primary text-uppercase">
                                                Fasilitas 
                                            </h6>
                                        </div>
                                                                                <div class="col-md-12" style="font-weight: bold;">
                                            Fasilitas Umum
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckpos">
                                            <label class="form-check-label" for="flexCheckpos">
                                                Post Pengaman
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckpmobil">
                                            <label class="form-check-label" for="flexCheckpmobil">
                                                Parkir Mobil
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckpmotor">
                                            <label class="form-check-label" for="flexCheckpmotor">
                                                Parkir Motor
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckdapur">
                                            <label class="form-check-label" for="flexCheckdapur">
                                                Dapur
                                            </label>
                                        </div>

                                        <div class="col-md-12" style="font-weight: bold;">
                                            Fasilitas Kamar Mandi
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckKMD">
                                            <label class="form-check-label" for="flexCheckKMD">
                                                K. mandi dalam
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckKML">
                                            <label class="form-check-label" for="flexCheckKML">
                                                K. mandi luar
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckKlosetD">
                                            <label class="form-check-label" for="flexCheckKlosetD">
                                                Kloset duduk
                                            </label>
                                        </div>
                                        <div class="col-md-12" style="font-weight: bold;">
                                            Fasilitas Kamar
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckwifi">
                                            <label class="form-check-label" for="flexCheckwifi">
                                                Wifi
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckAC">
                                            <label class="form-check-label" for="flexCheckAC">
                                                AC
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckKasur">
                                            <label class="form-check-label" for="flexCheckKasur">
                                                Kasur
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckMeja">
                                            <label class="form-check-label" for="flexCheckMeja">
                                                Meja
                                            </label>
                                        </div>
                                        <div class="col-md-2">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckLemari">
                                            <label class="form-check-label" for="flexCheckLemari">
                                                Lemari
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- step 3 end -->
                                <div class="col-12" style=" margin-top: 20px;">
                                    <div class="buttons" style="text-align: right;">
                                        <button class="btn btn-primary w-70 py-1" type="button"
                                            id="prev-btn">Previous</button>
                                        <button class="btn btn-primary w-70 py-1" type="button"
                                            id="next-btn">Next</button>
                                    </div>
                                </div>
                        </div>

                        </form>
                        <!-- FORM KOST END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- KAMAR KOST END -->


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
                            <a href="index.html"><h1 class="text-white text-uppercase mb-3">Homiekost</h1></a>
                            <p class="text-white mb-0">
							</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">Contact</h6>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Medan, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+62 123 456 789</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@homiekost.com</p>
                        <div class="d-flex pt-2">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Homiekost</a>, All Right Reserved. 							
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



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- script multistep -->
    <script>
        // Ambil elemen-elemen yang diperlukan
        const form = document.getElementById('multistep-form');
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        const steps = form.getElementsByClassName('step');
        let currentStep = 0;

        // Tampilkan langkah pertama
        showStep(currentStep);

        // Fungsi untuk menampilkan langkah
        function showStep(stepIndex) {
            // Sembunyikan semua langkah
            for (let i = 0; i < steps.length; i++) {
                steps[i].style.display = 'none';
            }

            if(stepIndex > steps.length -1) return;

            // Tampilkan langkah yang sedang aktif
            steps[stepIndex].style.display = 'block';

            // Atur tampilan tombol Next dan Previous
            if (stepIndex === 0) {
                prevBtn.style.display = 'none';
                nextBtn.innerHTML = 'Next';
            } else if (stepIndex === steps.length - 1) {
                prevBtn.style.display = 'inline-block';
                nextBtn.innerHTML = 'Submit';
            } else if (stepIndex < steps.length - 1) {
                prevBtn.style.display = 'inline-block';
                nextBtn.innerHTML = 'Next';
            } else if (stepIndex > steps.length - 1) {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
            }
             else {
                prevBtn.style.display = 'none';
                nextBtn.style.display = 'none';
            }

        }

        // Fungsi untuk memvalidasi langkah saat ini
        function validateStep() {
            // Implementasikan logika validasi sesuai kebutuhan
            // Mengembalikan true jika validasi berhasil, false jika gagal
            return true;
        }

        // Fungsi untuk mengubah langkah
        function changeStep(direction) {
            if (direction === 'next') {
                if (!validateStep()) {
                    return; // Hentikan jika validasi gagal
                }
                if (currentStep === steps.length - 1) {
                    return;
                }
                currentStep++;
            } else if (direction === 'prev') {
                currentStep--;
            }

        showStep(currentStep);
        
    }

    // Event listener untuk tombol Previous dan Next
    prevBtn.addEventListener('click', () => changeStep('prev'));
    nextBtn.addEventListener('click', () => changeStep('next'));

    // Fungsi untuk mengirim data form
    function submitForm() {
        // Implementasikan logika pengiriman data form sesuai kebutuhan Anda
        // Misalnya, menggunakan AJAX untuk mengirim data ke server

        // Setelah pengiriman berhasil, tampilkan pesan sukses atau arahkan ke halaman lain
        alert('Form submitted successfully!');
        // window.location.href = 'halaman-berhasil.html';
    }

    // Event listener untuk pengiriman form
    form.addEventListener('submit', (e) => {
        e.preventDefault(); // Mencegah submit form langsung

        // Panggil fungsi pengiriman form jika sudah pada langkah terakhir
        if (currentStep === steps.length - 1) {
            submitForm();
        }
    });

    </script>
    <!-- script multistep end -->




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>