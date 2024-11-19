<?php

namespace App\Http\Controllers;

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
        return view('admin.ruang');
    }

    public function pengguna()
    {
        return view('admin.pengguna');
    }

    public function tambahRuang()
    {
        return view('admin.tambahRuang');
    }
}
