@extends('layouts.admin')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <a href="{{route('dashboard')}}" class="text-muted fw-light">Dashboard /</a>
        <a href="{{route('histori')}}"> Histori Peminjaman</a>
    </h4>
    <!-- Hoverable Table rows -->
    <div class="card">
        <h5 class="card-header">Peminjaman Ruang</h5>
        <div class="table-responsive text-nowrap">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nama Peminjam</th>
                <th>Ruang Dipinjam</th>
                <th>Tanggal Peminjaman</th>
                <th>Surat Peminjaman</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($peminjamans as $peminjaman )
                <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$peminjaman->user->name}}</strong></td>
                  <td>{{$peminjaman->ruang->name_ruang}}</td>
                  <td>{{$peminjaman->tanggal_peminjaman->format('d F Y')}}</td>
                  <td><a href="{{ Storage::url($peminjaman->surat_peminjaman) }}" target="blank">Surat Peminjaman</a></td>
                  <td>
                    <span class="badge me-1 text-uppercase
                        {{ $peminjaman->status == 'peminjaman diproses' ? 'bg-label-primary' :
                           ($peminjaman->status == 'peminjaman diterima' ? 'bg-label-success' :
                           ($peminjaman->status == 'peminjaman ditolak' ? 'bg-label-danger' :
                           ($peminjaman->status == 'peminjaman selesai' ? 'bg-label-warning' : 'bg-label-secondary'))) }}">
                        {{ $peminjaman->status }}
                    </span>
                  </td>
                </tr>
              @endforeach
            </tbody>
        </table>
        </div>
        <div class="d-flex justify-content-center mt-4">
          {{$peminjamans->links()}}
      </div>
    </div>
    <!--/ Hoverable Table rows -->
</div>
@endsection