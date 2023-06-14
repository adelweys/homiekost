<!-- Header Start -->
<div class="container-fluid bg-dark px-0">
    <div class="row gx-0">
        <div class="col-lg-3 bg-dark d-none d-lg-block">
            <a href="{{ route('index') }}" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                <h1 class="m-0 text-light text-uppercase">Homiekost<span class="color-primary">.</span></h1>
                
            </a>
        </div>
        <div class="col-lg-9">
            <div class="row gx-0 bg-white d-none d-lg-flex">
                <div class="col-lg-7 px-5 text-start">
                    <div class="d-inline-flex align-items-center py-1 me-4">
                        <i class="fa fa-envelope text-primary me-2"></i>
                        <p class="mb-0">info@homiekost.com</p>
                    </div>
                    <div class="d-inline-flex align-items-center py-1">
                        <i class="fa fa-phone-alt text-primary m-2"></i>
                        <p class="mb-0">+628123456789</p>
                    </div>
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="d-inline-flex align-items-center py-2">
                        <!-- <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="me-3" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="" href=""><i class="fab fa-youtube"></i></a> -->
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
                        <a class="nav-item nav-link {{ Route::currentRouteName() === 'index' ? ' active' : '' }}" href="{{ route('index') }}">Home</a>
                        <a class="nav-item nav-link {{ Route::currentRouteName() === 'cost-list' ? ' active' : '' }}" href="{{ route('cost-list') }}">Kost</a>
                        <a class="nav-item nav-link {{ Route::currentRouteName() === 'about' ? ' active' : '' }}" href="{{ route('about') }}">About</a>
                        <a class="nav-item nav-link {{ Route::currentRouteName() === 'message.create' ? ' active' : '' }}" href="{{ route('message.create') }}">Contact</a>
                        @auth
                            <a class="nav-item nav-link {{ Route::currentRouteName() === 'cost.kos' ? ' active' : '' }}" href="{{ route('cost.kos') }}">Kos Anda</a>
                        @endauth
                    </div>
                </div>

                @auth
                <!-- notifikasi -->
                <div class="" style="width:80px;">
                    <button type="button" class="icon-button">
                        <span class="material-icons"><i class="fi fi-bs-bell"></i></span>
                        <span class="icon-button__badge">2</span>
                    </button>                        
                </div>
                <!-- Tombol Logout -->
                    
                    <div class="dropdown show" >
                        <a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div style=" width: 160px; height: 60px;  border-radius: 10px; margin-right:15px;">
                            <div class="flex-shrink-0">
                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-2.webp"
                                alt="Generic placeholder image" class="img-fluid rounded-circle border border-primary
                                 border-5" style="margin-right:100px; margin-left:50px;width: 60px; ">
                       
                            </div>
                            </div>
                        </a>
                        

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:2px">
                            <li class="dropdown-item" href="" style="width:2px">
                                <button type="submit" style="background-color:white; border:white; font-size:15px"><a href="{{route('profile.edit')}}">Profile</a></button>
                            </li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <li class="dropdown-item"  style="width:2px">
                                
                                <button type="submit" style="background-color:white; border:white; font-size:15px">Logout</button>
                                    <li>
                            </form>
                        </div>
                    </div>
                 
                
            @else
                <!-- Tombol Login -->
                @guest
                    <a href="{{ route('login') }}" class="btn btn-primary rounded-0 py-4 px-md-5 d-none d-lg-flex">Login<i class="fa fa-arrow-right ms-3"></i></a>
                @endguest
            @endauth
            
            </nav>
        </div>
    </div>
</div>
<!-- Header End -->