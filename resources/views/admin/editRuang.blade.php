@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="{{route('dashboard')}}" class="text-muted fw-light">Dashboard /</a>
    <a href="{{route('ruang')}}" class="text-muted fw-light">Edit Ruang /</a>
    <a href=""> Update Ruang</a>
  </h4>

  <div class="card mb-4">
    <div class="card-header d-flex align-items-center justify-content-between">
      <h5 class="mb-0">Update Ruang</h5>
    </div>
    <div class="card-body">
      <form 
        action="@if (isset($edit->id)) {{route('ruang.update', ['id'=>$edit->id]) }}@else{{route('ruang.update')}} @endif" 
        method="POST" 
        enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
          <label class="col-sm-2 col-form-label" for="basic-default-name">Nama Ruang</label>
          <div class="col-sm-10">
            <input type="text" name="nama_ruang" class="form-control" id="basic-default-name" placeholder="Auditorium" value="@if (isset($edit->id)) {{$edit->name_ruang}} @else {{old('name_ruang')}} @endif" />
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
                value="@if (isset($edit->id)) {{$edit->kapasitas}} @else {{old('kapasitas')}} @endif"
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
            <input 
                type="text" 
                name="fasilitas" 
                class="form-control" id="basic-default-name" 
                placeholder="Proyektor, AC, Meja" 
                value="@if (isset($edit->id)) {{$edit->fasilitas}} @else {{old('fasilitas')}} @endif" />
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
            <input class="form-control" type="file" id="formFile" name="foto_ruang" accept=".png, .jpg, .jpeg" onchange="previewImage(this)" />
          </div>
          @error('foto_ruang')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="row justify-content-end">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Update</button>
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