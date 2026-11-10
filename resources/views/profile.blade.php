@extends('layouts.app')

@section('title', 'Profil Admin')

@section('content')
<div class="max-w-[800px] mx-auto mt-12 p-5 text-gray-900 font-sans">
    <h1 class="text-[42px] font-bold mb-10 tracking-tight">Profil Akun</h1>
    <h2 class="text-lg font-bold mb-6">INFORMASI ADMIN</h2>

    <div class="bg-white p-6 border border-gray-200 rounded-sm">
        
        <div class="mb-5">
            <label class="block text-[13px] font-semibold text-gray-500 mb-2 uppercase">
                ROLE
            </label>
            <input type="text" value="{{ session('admin_role') }}" class="w-full p-3 border border-gray-300 rounded-sm text-base bg-gray-50 outline-none" readonly>
        </div>

        <div class="mb-5">
            <label class="block text-[13px] font-semibold text-gray-500 mb-2 uppercase">
                USERNAME
            </label>
            <input type="text" value="{{ session('admin_username') }}" class="w-full p-3 border border-gray-300 rounded-sm text-base bg-gray-50 outline-none" readonly>
        </div>

        <div class="mb-5">
            <label class="block text-[13px] font-semibold text-gray-500 mb-2 uppercase">
                PASSWORD
            </label>
            <div class="relative">
                <input type="password" id="passwordField" value="********" class="w-full p-3 border border-gray-300 rounded-sm text-base bg-gray-50 outline-none pr-12" readonly>
            </div>
        </div>

    </div>
</div>
@endsection