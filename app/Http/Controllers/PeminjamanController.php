<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'ruang_id' => 'required|exists:ruangs,id',
            'tanggal_peminjaman' => 'required|date|after_or_equal:today',
            'surat' => 'required|mimes:pdf|max:2048',
        ]);

        // Inisialisasi model Peminjaman
        $insert = new Peminjaman();
        $insert->user_id = auth()->user()->id;
        $insert->ruang_id = $request->ruang_id;
        $insert->tanggal_peminjaman = $request->tanggal_peminjaman;

        if ($request->hasFile('surat')) {
            $file = $request->file('surat');
            $file_name = time() . '_' . $file->getClientOriginalName();
        
            // Simpan file ke folder 'uploads' di disk 'public'
            $path = $file->storeAs('uploads', $file_name, 'public');
    
            $insert->surat_peminjaman = $path;
        }        
        
        // Simpan data ke database
        $result = $insert->save();

        // Redirect ke route pinjamRuang
        return redirect()->route('pinjamRuang');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:dipinjam,batal',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->status = $request->status;
        $peminjaman->save();

        return redirect()->back();
    }

    public function historiPengguna(){
        if(Auth::check()){
            $user = Auth::user();
            $historiPeminjamans = Peminjaman::where('user_id', $user->id)->get();
            return view('welcome', compact('historiPeminjamans'));
        } else {
            return view('welcome');
        }
    }
}
