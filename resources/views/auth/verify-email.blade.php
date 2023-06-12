@extends('layouts.master')

@section('content')
    
@include('layouts.header-second')

{{-- css tambahan --}}
<!-- CSS -->
<style>
    .password-toggle-icon {
        position: absolute;
        right: 10px;
        top: 50%;
        transform: translateY(-50%);
        cursor: pointer;
    }

    .password-toggle-icon:before {
        content: "";
        display: block;
        width: 20px;
        height: 20px;
        background-image: url('path/to/open-eye-icon.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: contain;
    }

    .password-toggle-icon.toggled:before {
        background-image: url('path/to/closed-eye-icon.png');
    }
</style>

        <!-- Register Start -->
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="container">
                <div class="text-center wow fadeInUp mb-4" data-wow-delay="0.1s">
                    <h3 class="section-title text-center text-primary text-uppercase">Daftar Akun</h3>
                </div>

                <form action="{{ route('verification.verify') }}" method="POST">
                    @csrf
                
                    {{-- <button type="button" class="btn btn-primary" id="send-verification-code">Kirim Kode Verifikasi</button> --}}
                
                                    
                    <!-- Kode verifikasi input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="verification_code">Kode Verifikasi</label>
                        <input type="text" id="verification_code" class="form-control" name="verification_code" placeholder="Kode Verifikasi" required>
                        @error('verification_code')
                        <span role="alert">{{ $message }}</span>
                    @enderror
                    </div>
                
                   
                
                    <!-- Submit button -->
                    <div class="d-grid mb-4">
                        <button class="btn btn-primary" type="submit">Daftar</button>
                    </div>
                
                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Sudah punya akun? <a href="{{ route('login') }}">Masuk</a></p>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>
<!-- Register End -->
{{-- script tambahan --}}
<script>
    
    document.getElementById('send-verification-code').addEventListener('click', function() {
        var emailInput = document.getElementById('email');
        var email = emailInput.value.trim();

        if (email === '') {
            return;
        }

        // Kirim permintaan AJAX untuk mengirim kode verifikasi ke email
        axios.post('/send-verification-code', { email: email })
            .then(function(response) {
                // Kode verifikasi berhasil dikirim, lakukan tindakan tambahan jika diperlukan
                alert('Kode verifikasi telah dikirim ke email Anda.');
            })
            .catch(function(error) {
                // Terjadi kesalahan saat mengirim kode verifikasi, tangani kesalahan jika diperlukan
                alert('Gagal mengirim kode verifikasi. Silakan coba lagi.');
            });
    });
</script>
                <!-- Footer Start -->
                <!-- Footer End -->


