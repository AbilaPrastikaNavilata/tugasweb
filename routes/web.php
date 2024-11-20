<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])
    ->middleware(['auth', 'admin'])
    ->name('admin.users');

Route::get('/cekjadwal', function () {
    return view('cekjadwal');
});

Route::middleware('auth')->group(function () {
    Route::get('/pinjamRuang', function () {
        return view('pinjamRuang');
    })->name('pinjamRuang');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/users', [AdminController::class, 'users']);
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/admin/dashboard/ruang', [AdminController::class, 'ruang'])->name('ruang');
    Route::get('/admin/dashboard/ruang/tambah', [AdminController::class, 'tambahRuang'])->name('tambahRuang');
    Route::get('/admin/dashboard/pengguna', [AdminController::class, 'pengguna'])->name('pengguna');
    Route::get('/admin/dashboard/histori', [AdminController::class, 'historiPeminjaman'])->name('histori');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
