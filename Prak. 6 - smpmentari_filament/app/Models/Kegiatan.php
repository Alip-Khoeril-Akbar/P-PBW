<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'tanggal',
        'ringkasan',
        'isi',
        'foto',
        // tambahkan kolom lain yang ada di form create kamu
    ];
}