@extends('layouts.app')

@section('content')
<style>
    .drop {
        margin-right: 100px;
    }
</style>
<div>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow border-top border-5 border-primary sticky-top p-0">
        <a href="index.html" class="navbar-brand bg-primary d-flex align-items-center px-4 px-lg-5">
            <h2 class="mb-2 text-white">Perpusda Kendal</h2>
        </a>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link">Home</a>
                <a href="about.html" class="nav-item nav-link">Pinjam Ruang</a>
                <a href="service.html" class="nav-item nav-link">Cek Jadwal</a>
                @guest
                    @if (Route::has('login'))
                        <a href="{{route('login')}}" class="btn btn-primary py-md-4 px-md-4 me-3">MASUK</a>
                    @endif
                @else
                <div class="nav-item drop dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                    <div class="dropdown-menu dropdown-menu-end fade-up m-0">
                        @if (Auth::user()->is_admin)
                            <a href="{{route('dashboard')}}" class="dropdown-item">Dashboard</a>
                        @endif
                        <a href="price.html" class="dropdown-item">Histori Peminjaman</a>
                        <a href="feature.html" class="dropdown-item" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                             {{ __('Keluar') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
                @endguest
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
            <div class="vh-100 d-flex justify-content-center align-items-center">
                <img src="https://plus.unsplash.com/premium_photo-1664300897489-fd98eee64faf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%D%3D" alt="Full-Screen Image" class="img-fluid w-100">
            </div>
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(6, 3, 21, .5);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Dinas Perpustakaan dan Kearsipan Daerah </h5>
                                <h1 class="display-3 text-white animated slideInDown mb-4">Perpustakaan Daerah Kabupaten <span class="text-primary">Kendal</span></h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea elitr.</p>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pinjam Ruang</a>
                                <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Cek Jadwal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: -100px;">
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Dinas Perpustakaan dan Kearsipan Kabupaten Kendal</a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection