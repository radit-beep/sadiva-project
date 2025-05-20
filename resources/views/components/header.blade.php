<header class="w-full bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <div class="flex items-center gap-3">
            <div class="w-6 h-6 bg-black rounded-full"></div>
            <span class="text-lg font-medium text-black">Logo</span>
        </div>


        <nav class="hidden md:flex gap-10 text-gray-500 text-md">
            <a href="{{ route('home') }}" class="hover:text-black">Home</a>
            <a href="{{ route('product') }}" class="hover:text-black">Produk</a>
            <a href="{{ route('jasa') }}" class="hover:text-black">Jasa</a>
            <a href="{{ route('community') }}" class="hover:text-black">Komunitas</a>
        </nav>


        <div>
            <a href="{{ route('login') }}" class="px-4 py-2 bg-black text-white rounded-md hover:opacity-80 transition">
                Sign In
            </a>
        </div>
    </div>
</header>
