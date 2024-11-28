<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ruang extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_ruang',
        'kapasitas',
        'fasilitas',
        'foto_ruang',
    ];
}
