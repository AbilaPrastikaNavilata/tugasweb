<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use App\Models\User;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('admin.users');
    }

    public function dashboard()
    {
        $jumlahPeminjaman = Peminjaman::all()->count();
        $jumlahPengguna = User::where('is_admin', 0)->count();
        $peminjamans = Peminjaman::whereIn('status', ['peminjaman diproses', 'peminjaman diterima'])
                          ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan created_at secara descending (terbaru)
                          ->paginate(7);
        return view('admin.dashboard', compact('peminjamans', 'jumlahPeminjaman', 'jumlahPengguna'));
    }
    public function ruang()
    {
        $ruangs = Ruang::paginate(3);
        return view('admin.ruang', compact('ruangs'));
    }

    public function pengguna()
    {
        $users = User::where('is_admin', 0)->paginate(10);
        return view('admin.pengguna', compact('users'));
    }

    public function tambahRuang()
    {
        return view('admin.tambahRuang');
    }

    public function historiPeminjaman()
    {
        $peminjamans = Peminjaman::whereIn('status', ['peminjaman selesai', 'peminjaman ditolak'])->paginate(10);
        return view('admin.histori', compact('peminjamans'));
    }
}
