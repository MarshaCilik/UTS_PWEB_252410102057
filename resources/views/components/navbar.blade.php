<!-- Main Navbar -->
<nav class="bg-white border-b border-gray-100 py-4 px-8 flex items-center justify-between text-sm font-medium">
    <!-- Left Menu -->
    <div class="flex items-center space-x-8">
        <a href="{{ route('dashboard') }}"
           class="{{ request()->routeIs('dashboard')
                      ? 'text-gray-900 font-semibold after:scale-x-100'
                      : 'text-gray-600 hover:text-black' }}">
            Dashboard
        </a>
        <a href="{{ route('pengelolaan') }}" 
           class="{{ request()->routeIs('pengelolaan') 
           ? 'text-gray-900 border-b-2 border-black pb-1 font-semibold' 
           : 'text-gray-600 hover:text-black transition-colors'}} ">
           Pengelolaan
        </a>
    </div>

    <div class="w-12 h-6"></div>

    <div class="flex items-center space-x-6">
        <a href="{{ route('profile') }}" 
           class="{{ request()->routeIs('profile')
                    ? 'text-gray-900 font-semibold after:scale-x-100' 
                    : 'text-gray-600 hover:text-black' }}">
           Profile
        </a>
    </div>
</nav>

<!-- Dark Announcement Bar -->
<div class="bg-[#0b1437] text-white text-xs font-semibold tracking-widest text-center py-2.5 uppercase">
    AMBIL KENDALI JUMLAH MAHASISWA
</div>