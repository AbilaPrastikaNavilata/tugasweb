<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\HttpException; //Import HttpException

class CekJadwalController extends Controller
{
    public function cekJadwal(Request $request)
    {
        $jadwals = Peminjaman::where('status', 'peminjaman diterima')
                                ->orderby('tanggal_peminjaman', 'asc')
                                ->paginate(7);
        if (Auth::check()) {
            $user = Auth::user();
            $historiPeminjamans = Peminjaman::where('user_id', $user->id)->with('ruang')->get();
    
            if ($historiPeminjamans->isNotEmpty()) {
                return view('cekjadwal', compact('historiPeminjamans', 'jadwals')); // Data diteruskan
            } else {
                return view('cekjadwal', compact('jadwals'));
            }
        }else {
            return view('cekjadwal', compact('jadwals'));
        }
    }

    public function filterByMonth(Request $request)
    {
        $request->validate([
            'bulan' => 'required|date_format:Y-m', // Validasi format input
        ]);

        $bulan = $request->input('bulan');
        $date = Carbon::parse($bulan); // Parsing string ke objek Carbon

        $jadwals = Peminjaman::where('status', 'peminjaman diterima')
                                    ->whereMonth('tanggal_peminjaman', $date->month)
                                    ->whereYear('tanggal_peminjaman', $date->year)
                                    ->orderby('tanggal_peminjaman', 'asc')
                                    ->paginate(7);
        
        return view('cekjadwal', compact('jadwals'));
    }
}