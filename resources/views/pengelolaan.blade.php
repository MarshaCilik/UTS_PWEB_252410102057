@extends('layouts.app')

@section('title', 'Pengelolaan Mahasiswa')

@section('content')
<div class="max-w-[800px] mx-auto mt-12 p-5 text-gray-900 font-sans">
    <h1 class="text-[42px] font-bold mb-10 tracking-tight">Pengelolaan Data</h1>

    <h2 class="text-lg font-bold mb-6">DAFTAR MAHASISWA TERDAFTAR</h2>
    <div class="overflow-x-auto">
        <table class="w-full border-collapse border border-gray-300 rounded-sm text-sm text-left"> 
        <thead>
            <tr class="bg-gray-100 text-gray-900 font-semibold">
                <th class="border border-gray-300 px-4 py-2">NAMA MAHASISWA</th>
                <th class="border border-gray-300 px-4 py-2">NIM</th>
                <th class="border border-gray-300 px-4 py-2">FAKULTAS</th>
                <th class="border border-gray-300 px-4 py-2">PROGRAM STUDI</th>
            </tr>
        </thead>
        <tbody>
            @forelse($mahasiswas as $mhs)
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="border border-gray-300 px-4 py-3 text-gray-800">{{ $mhs->nama_lengkap }}</td>
                    <td class="border border-gray-300 px-4 py-3 text-gray-800">{{ $mhs->nim }}</td>
                    <td class="border border-gray-300 px-4 py-3 text-gray-800">{{ $mhs->fakultas }}</td>
                    <td class="border border-gray-300 px-4 py-3 text-gray-800">{{ $mhs->prodi }}</td>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="border border-gray-300 px-4 py-6 text-center text-gray-500 italic">
                    Belum ada data mahasiswa yang terdaftar.
                    </td>
                </tr>
            @endforelse
        </tbody>
        </table>
    </div>
</div>
@endsection