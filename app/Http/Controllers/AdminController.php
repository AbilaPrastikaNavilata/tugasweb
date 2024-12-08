<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function users()
    {
        return view('admin.users');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function ruang()
    {
        $ruangs = Ruang::all();
        return view('admin.ruang', compact('ruangs'));
    }

    public function pengguna()
    {
        $users = User::where('is_admin', 0)->get();
        return view('admin.pengguna', compact('users'));
    }

    public function tambahRuang()
    {
        return view('admin.tambahRuang');
    }

    public function historiPeminjaman()
    {
        return view('admin.histori');
    }
}
