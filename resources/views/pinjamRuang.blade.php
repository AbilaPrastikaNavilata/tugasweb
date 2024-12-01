@extends('layouts.app')

@section('content')
<style>
    .drop {
        margin-right: 100px;
    }

    .image-container {
        height: 200px; /* Tinggi gambar disesuaikan */
        overflow: hidden; /* Memastikan gambar tidak melebihi container */
    }

    .image-container img {
        height: 100%; /* Gambar menyesuaikan tinggi container */
        width: auto; /* Lebar gambar menyesuaikan proporsi */
        object-fit: cover; /* Gambar dipotong untuk mengisi area */
    }
</style>
<div>
    @extends('layouts.spinner')
    @extends('layouts.navbar')

    <div class="container-xxl py-2">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Pinjam Ruang</h6>
                <h1 class="mb-5">Silahkan pilih ruangan yang ingin dipinjam</h1>
            </div>
            
            <div class="row mb-5">
                @foreach ($ruangs as $index => $ruang )
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="card h-100">
                            <div id="carouselExample{{ $index }}" class="carousel slide" data-bs-ride="carousel">
                                <ol class="carousel-indicators">
                                <li data-bs-target="#carouselExample{{ $index }}" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselExample{{ $index }}" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselExample{{ $index }}" data-bs-slide-to="2"></li>
                                </ol>
                                <div class="carousel-inner image-container">
                                    @foreach(json_decode($ruang->foto_ruang, true) as $key => $image)
                                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                            <img src="{{ asset('uploads/' . $image) }}" class="d-block w-100" style="width: 150px; object-fit: cover;" alt="Image">
                                        </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExample{{ $index }}" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExample{{ $index }}" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                                </a>
                            </div>
                        <div class="card-body">
                            <h5 class="card-title">{{$ruang->name_ruang}}</h5>
                            <p class="card-text">
                                Kapasitas: {{ $ruang->kapasitas }} orang
                            </p>
                            <p class="card-text">
                                Fasilitas:
                                @if (is_string($ruang->fasilitas))
                                    {{$ruang->fasilitas}}
                                @else
                                    Tidak ada fasilitas.
                                @endif
                            </p>
                            <a href="javascript:void(0)" class="btn btn-outline-primary">Pinjam</a>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
</div>
@endsection