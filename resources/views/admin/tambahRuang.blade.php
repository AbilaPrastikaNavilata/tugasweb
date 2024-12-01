@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="{{route('dashboard')}}" class="text-muted fw-light">Dashboard /</a>
    <a href="{{route('ruang')}}" class="text-muted fw-light">Edit Ruang /</a>
    <a href="{{route('tambahRuang')}}"> Tambah Ruang</a>
  </h4>

  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Tambah Ruang</h5>
    </div>
    <div class="card-body">
      <form action="{{route('ruang.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ruang</label>
          <div class="col-sm-10">
            <input type="text" name="nama_ruang" class="form-control" id="basic-default-name" placeholder="Auditorium" />
          </div>
          @error('nama_ruang')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-email">Kapasitas</label>
          <div class="col-sm-10">
            <div class="input-group input-group-merge">
              <input
                type="text"
                id="basic-default-email"
                class="form-control"
                placeholder="69"
                name="kapasitas"
                aria-label="john.doe"
                aria-describedby="basic-default-email2"
              />
              <span class="input-group-text" id="basic-default-email2">orang</span>
            </div>
            @error('kapasitas')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-message">Fasilitas</label>
          <div class="col-sm-10">
            <textarea
              id="basic-default-message"
              class="form-control"
              name="fasilitas"
              placeholder="Proyektor, AC, Kursi, Meja"
              aria-label="Hi, Do you have a moment to talk Joe?"
              aria-describedby="basic-icon-default-message2"
            ></textarea>
          </div>
          @error('fasilitas')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Foto Ruang</label>
          <div class="col-sm-10">
              <input class="form-control" type="file" id="formFile" name="foto_ruang[]" multiple accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
          </div>
          @error('foto_ruang')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
        <div class="row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- <script type="text/javascript">
  function previewImage(input){
    if (input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function(e){
        $("#imagePreview").css('background-image', 'url('+ e.target.result+')');
        $("#imagePreview").hide();
        $("#imagePreview").fadeIn(700);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script> --}}
@endsection