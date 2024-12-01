@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><a href="{{route('dashboard')}}" class="text-muted fw-light">Dashboard /</a> <a href="route{{route('ruang')}}">Edit Ruang</a></h4>

  <a href="{{route('tambahRuang')}}">
    <button type="button" class="btn btn-primary mb-4">Tambah Ruang</button>
  </a>
  <!-- Hoverable Table rows -->
  <div class="card">
    <h5 class="card-header">Ruang</h5>
    <div class="table-responsive text-nowrap">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Nama Ruang</th>
            <th>Kapasitas</th>
            <th>Fasilitas</th>
            <th>Foto</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @foreach ($ruangs as $ruang)
          <tr>
              <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{ $ruang->name_ruang }}</strong></td>
              <td>{{ $ruang->kapasitas }} orang</td>
              <td>{{ $ruang->fasilitas }}</td>
              <td>
                  @if($ruang->foto_ruang)
                  <div id="carousel-{{ $ruang->id }}" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                          @foreach(json_decode($ruang->foto_ruang, true) as $key => $image)
                          <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                              <img src="{{ asset('uploads/' . $image) }}" class="d-block w-100" style="height: 150px; width: 150px; object-fit: cover;" alt="Image">
                          </div>
                          @endforeach
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carousel-{{ $ruang->id }}" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carousel-{{ $ruang->id }}" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                      </button>
                  </div>
                  @else
                      <img style="width: 150px; height: 150px; object-fit: cover;" src="{{ asset('assets/img/ruang.jpg') }}" alt="Default Image">
                  @endif
              </td>
              <td>
                  <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                          <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                          <a class="dropdown-item" href="{{ route('ruang.edit', ['id' => $ruang->id]) }}">
                              <i class="bx bx-edit-alt me-1"></i> Edit
                          </a>
                          <form action="{{ route('ruang.destroy', ['id' => $ruang->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="dropdown-item">
                                  <i class="bx bx-trash me-1"></i> Delete
                              </button>
                          </form>
                      </div>
                  </div>
              </td>
          </tr>
          @endforeach
      </tbody>
      </table>
    </div>
  </div>
  <!--/ Hoverable Table rows -->
</div>
@endsection