@extends('layouts.master')

@section('content')
    
@include('layouts.banner-top')

@include('layouts.header-second')


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
                                                Identitas pemilik
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Nama">
                                                <label for="nama">Nama pemilik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Nama">
                                                <label for="nama">Alamat pemilik</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" placeholder="Nama">
                                                <label for="nama">No. telepon</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <select class="form-select">
                                                    <option value="1"> laki-laki </option>
                                                    <option value="2"> perempuan </option>
                                                </select>
                                                <label for="jeniskelamin">Jenis kelamin</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6" style="font-weight: bold;">
                                            Foto diri
                                        </div>
                                        <div class="col-md-6" style="font-weight: bold;">
                                            KTP
                                        </div>
                                        <!-- foto diri atart-->
                                        <div class=" col-md-6">
                                            <div class="form-floating">
                                                <input type="file" id="files" accept="image/x-png,image/gif,image/jpeg"
                                                    name="files" multiple>
                                            </div>
                                        </div>
                                        <!-- foro diri end -->
                                        <!-- ktp start -->
                                        <div class=" col-md-6">
                                            <div class="form-floating">
                                                <input type="file" id="files" name="files" multiple>
                                            </div>
                                        </div>
                                        <!-- ktp end -->
                                    </div>
                                </div>
                                <!-- step 1 end -->
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

            if (stepIndex > steps.length - 1) return;

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

    @include('layouts.footer')
    <!-- script multistep end -->

    @endsection