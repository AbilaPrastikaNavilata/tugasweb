<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Symfony\Component\HttpKernel\Exception\HttpException; //Import HttpException

class CekJadwalController extends Controller
{
    public function cekJadwal(Request $request)
    {
        $jadwals = Peminjaman::where('status', 'dipinjam')->get();
        return view('cekjadwal', compact('jadwals'));
    }

    public function filterByMonth(Request $request)
    {
        $request->validate([
            'bulan' => 'required|date_format:Y-m', // Validasi format input
        ]);

        $bulan = $request->input('bulan');
        $date = Carbon::parse($bulan); // Parsing string ke objek Carbon

        $jadwals = Peminjaman::where('status', 'dipinjam')
                                    ->whereMonth('tanggal_peminjaman', $date->month)
                                    ->whereYear('tanggal_peminjaman', $date->year)
                                    ->get();
        
        return view('cekjadwal', compact('jadwals'));
    }
}