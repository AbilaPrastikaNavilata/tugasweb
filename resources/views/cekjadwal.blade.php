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
            <p class="fw-bolder">Bulan : <input type="month" name="bulan" value="2024-11" id="bulan"><button type="submit" class="ms-2">Pilih</button></p>
            
        </div>
    </div>
</div>
@endsection