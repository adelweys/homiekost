<div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/kos1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Homiekost<span class="color-primary">.</span></h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Temukan lebih banyak pilihan kos</h1>
                        <a href="{{ route('cost-list') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat kos</a>
                        <a href="{{ route('daftar-penyewa') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Ajukan sewa</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/kos2.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 700px;">
                        <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Homiekost</h6>
                        <h1 class="display-3 text-white mb-4 animated slideInDown">Temukan lebih banyak pilihan kos</h1>
                        <a href="{{ route('cost-list') }}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Lihat kos</a>
                        <a href="{{ route('daftar-penyewa') }}" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Ajukan sewa</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>