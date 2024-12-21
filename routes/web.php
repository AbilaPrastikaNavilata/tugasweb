<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\RuangController;
use App\Models\Ruang;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pinjam-ruang', [RuangController::class, 'showRuangGuest'])->name('pinjamRuang');

Route::get('/cekjadwal', function () {
    return view('cekjadwal');
});

Route::middleware('auth')->group(function () {
    Route::post('/pinjam', [PeminjamanController::class, 'store'])->name('peminjaman.store');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'users']);
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard/ruang', [AdminController::class, 'ruang'])->name('ruang');
    Route::get('/admin/dashboard/ruang/tambah', [AdminController::class, 'tambahRuang'])->name('tambahRuang');
    Route::get('/admin/dashboard/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');
    Route::get('/admin/dashboard/histori', [AdminController::class, 'historiPeminjaman'])->name('histori');

    Route::post('/admin/dashboard/ruang/tambah/add', [RuangController::class, 'store'])->name('ruang.store');
    Route::get('/admin/dashboard/ruang/edit/{id}', [RuangController::class, 'edit'])->name('ruang.edit');
    Route::post('/admin/dashboard/ruang/update/{id}', [RuangController::class, 'update'])->name('ruang.update');
    Route::delete('/admin/dashboard/ruang/delete/{id}', [RuangController::class, 'destroy'])->name('ruang.destroy');

    Route::put('/admin/dashboard/peminjaman/{id}/status', [PeminjamanController::class, 'updateStatus'])->name('peminjaman.updateStatus');
});

Auth::routes();
