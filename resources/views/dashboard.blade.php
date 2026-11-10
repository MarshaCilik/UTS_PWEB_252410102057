@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-white text-gray-900 antialiased">
    <main class="max-w-7xl mx-auto px-8 pt-12 pb-16">
        <!-- Title Header -->
        <h1 class="text-4xl font-extrabold tracking-tight text-black mb-4">
            Halo <strong>{{ session('admin_username') }}</strong>!
        </h1>

        <div class="space-y-2 text-gray-600 text-base max-w-2xl">
            <p>
                Selamat datang di panel kendali sistem pengelolaan data mahasiswa.
            </p>
            <p class="pt-2">
                <span class="inline-block bg-gray-100 text-gray-900 font-semibold px-4 py-2 rounded-md border border-gray-200">
                    Jumlah Mahasiswa Terdaftar: <span class="font-bold text-black">{{ $jumlahMahasiswa }}</span>
                </span>
            </p>
        </div>
    </main>

</body>
</html>
@endsection