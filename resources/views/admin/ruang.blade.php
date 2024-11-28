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
            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$ruang->name_ruang}}</strong></td>
            <td>{{$ruang->kapasitas}} orang</td>
            <td>{{$ruang->fasilitas}}</td>
            <td>
              <img style="width: 120px; height: 100px;" src="{{$ruang->foto_ruang ? asset('uploads/'.$ruang->foto_ruang) : asset('assets/img/ruang.jpg')}}" alt="">
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{route('ruang.edit', ['id' => $ruang->id])}}"
                    ><i class="bx bx-edit-alt me-1"></i> Edit</a
                  >
                  <form action="{{ route('ruang.destroy', ['id'=>$ruang->id]) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
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