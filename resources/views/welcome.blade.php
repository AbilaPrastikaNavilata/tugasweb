@extends('layouts.app')

@section('content')
<style>
    .drop {
        margin-right: 100px;
    }
</style>
<div>
    @extends('layouts.spinner')
    @extends('layouts.navbar')

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
                                <a href="{{route('pinjamRuang')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Pinjam Ruang</a>
                                <a href="{{route('jadwal')}}" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Cek Jadwal</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid overflow-hidden py-5 px-lg-0 mb-5">
            <div class="container about py-5 px-lg-0">
                <div class="row g-5 mx-lg-0">
                    <div class="col-lg-6 ps-lg-0 wow fadeInLeft" data-wow-delay="0.1s" style="min-height: 400px;">
                        <div class="position-relative h-100">
                            <img class="position-absolute img-fluid w-100 h-100" src="https://images.unsplash.com/photo-1529148482759-b35b25c5f217?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 about-text wow fadeInUp" data-wow-delay="0.3s">
                        <h6 class="text-secondary text-uppercase mb-3">Tentang Kita</h6>
                        <h1 class="mb-5">Dinas Kearsipan dan Perpustakaan Kab. Kendal</h1>
                        <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <div class="row g-4 mb-5">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <i class="fa fa-globe fa-3x text-primary mb-3"></i>
                                <h5>Global Coverage</h5>
                                <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <i class="fa fa-shipping-fast fa-3x text-primary mb-3"></i>
                                <h5>On Time Delivery</h5>
                                <p class="m-0">Stet stet justo dolor sed duo. Ut clita sea sit ipsum diam lorem diam justo.</p>
                            </div>
                        </div>
                        <a href="" class="btn btn-primary py-3 px-5">Explore More</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top: -100px;">
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