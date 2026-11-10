<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function daftarmahasiswa() : array
    {
        return [
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
                'nama_lengkap' => 'Rian Didi Hidayat',
                'nim'          => '220101003',
                'fakultas'     => 'Fakultas Ekonomi',
                'prodi'        => 'Manajemen'
            ],
            (object)[
                'id'           => 4,
                'nama_lengkap' => 'Dewi Lestari',
                'nim'          => '220101004',
                'fakultas'     => 'Fakultas Ilmu Sosial dan Politik',
                'prodi'        => 'Ilmu Komunikasi'
            ],
        ];
    }
    public function login()
    {
        return view('login');
    }

    public function proses(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Username wajib diisi.',
            'password.required' => 'Password wajib diisi.',
        ]);

        $adminUsername = 'marsha';
        $adminPassword = '123';

        if ($request->input('password') === $adminPassword) {
            session([
                'admin_logged_in' => true,
                'admin_username'  => $request->input('username'),
                'admin_role'      => 'Admin'
            ]);
            return redirect()->route('dashboard');
        }

        return back()
            ->withInput($request->only('username'))
            ->with('error', 'Username atau password salah.');

    }

    public function dashboard(Request $request)
    {
        $jumlahMahasiswa = count($this->daftarmahasiswa());

        return view('dashboard', compact('jumlahMahasiswa'));
    }

    public function pengelolaan()
    {
        $mahasiswas = $this->daftarmahasiswa();

        return view('pengelolaan', compact('mahasiswas'));
    }

    public function profile()
    {
        return view('profile');
    }
}