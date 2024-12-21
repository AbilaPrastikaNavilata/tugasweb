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
                                @guest
                                  <div class="mt-3">
                                    <a href="{{route('login')}}">
                                      <button
                                      type="button"
                                      class="btn btn-primary"
                                    >
                                      Pinjam
                                    </button>
                                    </a>
                                  </div>
                                  @else
                                    <div class="mt-3">
                                      <!-- Button trigger modal -->
                                      <button
                                        type="button"
                                        class="btn btn-primary"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modalCenter"
                                      >
                                        Pinjam
                                      </button>
              
                                      <!-- Modal -->
                                      <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="modalCenterTitle">Form Peminjaman Ruang {{$ruang->name_ruang}}</h5>
                                              <button
                                                type="button"
                                                class="btn-close"
                                                data-bs-dismiss="modal"
                                                aria-label="Close"
                                              ></button>
                                            </div>
                                            <form action="{{route('peminjaman.store')}}" method="POST" enctype="multipart/form-data">
                                              @csrf
                                              <input type="hidden" name="ruang_id" value="{{$ruang->id}}">
                                              <div class="modal-body">
                                                <div class="row">
                                                  <div class="col mb-3">
                                                    <label for="nameWithTitle" class="form-label">Name</label>
                                                    <input
                                                      type="text"
                                                      id="nameWithTitle"
                                                      class="form-control"
                                                      placeholder="Enter Name"
                                                      value="{{ Auth::user()->name }}"
                                                      disabled
                                                    />
                                                  </div>
                                                </div>
                                                <div class="row g-2">
                                                  <div class="col mb-0">
                                                    <label for="emailWithTitle" class="form-label">Email</label>
                                                    <input
                                                      type="text"
                                                      id="emailWithTitle"
                                                      class="form-control"
                                                      placeholder="xxxx@xxx.xx"
                                                      value="{{Auth::user()->email}}"
                                                      disabled
                                                    />
                                                  </div>
                                                  <div class="col mb-3">
                                                    <label for="dobWithTitle" class="form-label">Instansi</label>
                                                    <input
                                                      type="text"
                                                      id="dobWithTitle"
                                                      class="form-control"
                                                      disabled
                                                      value="{{Auth::user()->instansi}}"
                                                    />
                                                  </div>
                                                </div>
                                                <div class="row g-2">
                                                  <div class="col mb-3">
                                                    <label for="emailWithTitle" class="form-label">Tanggal Peminjaman</label>
                                                    <input
                                                      type="date"
                                                      name="tanggal_peminjaman"
                                                      id="emailWithTitle"
                                                      class="form-control"
                                                      placeholder="xxxx@xxx.xx"
                                                      required
                                                    />
                                                  </div>
                                                </div>
                                                <div class="row g-2">
                                                  <div class="col mb-3">
                                                    <label for="dobWithTitle" class="form-label">Upload Surat Peminjaman</label>
                                                    <input
                                                      type="file"
                                                      name="surat"
                                                      id="dobWithTitle"
                                                      class="form-control"
                                                      required
                                                    />
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                  Close
                                                </button>
                                                <button type="submit" class="btn btn-primary">Pinjam Ruang</button>
                                              </div>
                                            </form>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                @endguest
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