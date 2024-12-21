<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';

    protected $fillable = ['user_id', 'ruang_id', 'tanggal_peminjaman', 'status', 'surat_peminjaman'];

    protected $casts = [
        'tanggal_peminjaman' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ruang()
    {
        return $this->belongsTo(Ruang::class);
    }
}
