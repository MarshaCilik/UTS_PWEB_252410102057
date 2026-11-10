<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengelolaanController extends Controller
{
    public function index()
    {
        $mahasiswas = [
            (object)[
                'id'           => 1,
                'nama_lengkap' => 'Budi Santoso',
                'nim'          => '220101001',
                'fakultas'     => 'Fakultas Ilmu Komputer',
                'prodi'        => 'Sistem Informasi'
            ],
            (object)[
                'id'           => 2,
                'nama_lengkap' => 'Siti Aminah',
                'nim'          => '220101002',
                'fakultas'     => 'Fakultas Teknik',
                'prodi'        => 'Teknik Informatika'
            ],
            (object)[
                'id'           => 3,
                'nama_lengkap' => 'Rian Hidayat',
                'nim'          => '220101003',
                'fakultas'     => 'Fakultas Ekonomi',
                'prodi'        => 'Manajemen'
            ],
        ];

        return view('pengelolaan', compact('mahasiswas'));
    }
}