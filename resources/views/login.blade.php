<script src="https://cdn.tailwindcss.com"></script>
<div class="max-w-[800px] mx-auto mt-12 p-5 text-gray-900 font-sans">
    <h1 class="text-[42px] font-bold mb-10 tracking-tight">My account</h1>

    <h2 class="text-lg font-bold mb-6">LOGIN</h2>
    <form action="{{ route('login.proses') }}" method="POST">
        @csrf 

        <div class="mb-5">
            <label for="username" class="block text-[13px] font-semibold text-gray-500 mb-2 uppercase">
                USERNAME<span class="text-red-600">*</span>
            </label>
            <input type="text" id="username" name="username" class="w-full p-3 border border-gray-300 rounded-sm text-base outline-none transition-colors duration-200 focus:border-gray-400" required>
        </div>

        <div class="mb-5">
            <label for="password" class="block text-[13px] font-semibold text-gray-500 mb-2 uppercase">
                PASSWORD <span class="text-red-600">*</span>
            </label>
            <div class="relative">
                <input type="password" id="password" name="password" class="w-full p-3 border border-gray-300 rounded-sm text-base outline-none transition-colors duration-200 focus:border-gray-400" required>

                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 cursor-pointer hover:text-gray-600">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                </svg>
            </div>
        </div>

        <div class="flex items-center gap-2 mb-6">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 border-gray-300 rounded-sm cursor-pointer accent-gray-700">
            <label for="remember" class="text-[13px] font-semibold text-gray-500 cursor-pointer uppercase m-0">REMEMBER ME</label>
        </div>

        <button type="submit" class="bg-gray-100 text-gray-800 text-sm font-bold py-3 px-7 rounded-sm cursor-pointer mb-8 transition-colors duration-200 hover:bg-gray-200">
            LOG IN
        </button>
    </form>

    <h1 class="block text-gray-900 text-base hover:underline">Lost your password?</h1>
</div>
