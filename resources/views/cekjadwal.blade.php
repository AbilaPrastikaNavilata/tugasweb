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

    <div class="container-xxl py-2">
        <div class="container py-5">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-secondary text-uppercase">Cek Jadwal</h6>
                <h1 class="mb-5">Cek Jadwal Peminjaman Ruang</h1>
            </div>
            <p>Berikut adalah daftar ruang yang dikelola Dinas Perpustakaan dan Arsip Kabupaten Kendal, baik yang sudah diagendakan penggunaannya maupun belum. Jika Anda ingin mengajukan peminjaman ruang atau tempat, silakan melakukan login.</p>
            <form action="{{route('filter')}}" method="get">
                <p class="fw-bolder">Bulan : <input type="month" name="bulan" value="{{request('bulan', date('Y-m'))}}" id="bulan"><button type="submit" class="ms-2">Pilih</button></p>
            </form>
            <!-- Hoverable Table rows -->
            <div class="card">
                <h5 class="card-header">Jadwal Peminjaman Ruang</h5>
                <div class="table-responsive"> {{-- Hilangkan text-nowrap jika tidak diperlukan --}}
                    <table class="table table-hover table-striped"> {{-- Tambahkan class table-striped untuk garis antar baris --}}
                        <thead>
                            <tr>
                                <th scope="col">Nama Peminjam</th> {{-- Tambahkan scope="col" untuk aksesibilitas --}}
                                <th scope="col">Ruang Dipinjam</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Status</th> {{-- Hilangkan kolom Surat Peminjaman jika tidak diperlukan --}}
                            </tr>
                        </thead>
                        <tbody>
                            @if ($jadwals->isNotEmpty())
                                @foreach ($jadwals as $jadwal)
                                    <tr>
                                        <td>{{ $jadwal->user->name }}</td>
                                        <td>{{ $jadwal->ruang->name_ruang }}</td>
                                        <td>{{ $jadwal->tanggal_peminjaman->format('d F Y') }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm text-uppercase" disabled>{{ $jadwal->status }}</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center py-3"> {{-- colspan disesuaikan dengan jumlah kolom --}}
                                        Tidak ada peminjaman pada bulan ini.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Hoverable Table rows -->
        </div>
    </div>
</div>
@endsection