<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';

    // Sesuaikan dengan nama kolom di file migration Anda
    protected $fillable = [
        'nim',
        'nama_lengkap',
        'prodi',
        'fakultas',
        'password',
    ];
}
