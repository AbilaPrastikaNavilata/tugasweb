@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <a href="{{route('dashboard')}}" class="text-muted fw-light">Dashboard /</a>
    <a href="{{route('ruang')}}" class="text-muted fw-light">Edit Ruang /</a>
    <a href="{{route('tambahRuang')}}"> Tambah Ruang</a>
  </h4>
</div>
@endsection