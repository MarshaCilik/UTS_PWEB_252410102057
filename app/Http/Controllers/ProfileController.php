<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $admin = (object)[
            'name'     => session('admin_name', 'Administrator UTS'),
            'username' => session('admin_username', 'admin')
        ];

        return view('profile', compact('admin'));
    }
}