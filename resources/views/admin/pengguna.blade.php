@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{route('dashboard')}}" class="text-muted fw-light">Dashboard /</a>
        <a href="{{route('pengguna')}}"> Daftar Pengguna</a>
    </h4>
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Daftar Pengguna Website</h5>
        <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nama Pengguna</th>
                <th>Instansi</th>
                <th>Email</th>
                <th>Tanggal Buat Akun</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($users as $user)
                <tr>
                    <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$user->name}}</strong></td>
                    <td>{{$user->instansi}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at->format('d F Y')}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{$users->links()}}
        </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>
@endsection