<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class RuangController extends Controller
{
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama_ruang' => 'required',
                'kapasitas' => 'required|numeric',
                'fasilitas' => 'required',
                'foto_ruang' => 'required|mimes:png,jpg,jpeg|max:2048',
            ]
        );

        $filePath = public_path('uploads');
        $insert = new Ruang();
        $insert->name_ruang = $request->nama_ruang;
        $insert->kapasitas = $request->kapasitas;
        $insert->fasilitas = $request->fasilitas;

        if ($request->hasFile('foto_ruang')) {
            $file = $request->file('foto_ruang');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $insert->foto_ruang = $file_name;
        }

        $result = $insert->save();
        return redirect()->route('ruang');
    }

    public function edit($id)
    {
        $edit = Ruang::findOrFail($id);
        return view('admin.editRuang', compact('edit'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama_ruang' => 'required',
                'kapasitas' => 'required|numeric',
                'fasilitas' => 'required',
                'foto_ruang' => 'mimes:png,jpg,jpeg|max:2048',
            ]
        );
        $update = Ruang::findOrFail($id);
        $update->name_ruang = $request->nama_ruang;
        $update->kapasitas = $request->kapasitas;
        $update->fasilitas = $request->fasilitas;

        if ($request->hasFile('foto_ruang')) {
            $filePath = public_path('uploads');
            $file = $request->file('foto_ruang');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            //delete old foto
            if (!is_null($update->foto_ruang)) {
                $oldImage = public_path('uploads/' . $update->foto_ruang);
                if (File::exists($oldImage)) { // Metode yang benar
                    unlink($oldImage);
                }
            }
            $update->foto_ruang = $file_name;
        }
        $result = $update->save();
        return redirect()->route('ruang');
    }

    public function destroy($id)
    {
        $ruang = Ruang::findOrFail($id);

        // hapus jika ada
        if (File::exists(public_path('uploads/' . $ruang->foto_ruang))) {
            File::delete(public_path('uploads/' . $ruang->foto_ruang));
        }
        // hapus data
        $ruang->delete();
        return redirect()->route('ruang');
    }
}
