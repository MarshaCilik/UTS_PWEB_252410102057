<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin; 
use Illuminate\Support\Facades\Hash;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $usernameBenar = 'admin';
        $passwordBenar = '123';
        $namaAdmin = 'Marsha Admin';

        if ($request->username === $usernameBenar && $request->password === $passwordBenar) {
            session([
                'admin_logged_in' => true,
                'admin_username'  => $usernameBenar,
                'admin_name'      => $namaAdmin     
            ]);
            return redirect()->route('dashboard');
        } else if ($request->username === '' && $request->password === '') {
            session([
                'admin_logged_in' => true,
                'admin_username'  => 'Tamu',
                'admin_name'      => 'Tamu'
            ]);
            return redirect()->route('dashboard');
        };

        return back()->with('error', 'Username atau password yang Anda masukkan salah!');
    }
}