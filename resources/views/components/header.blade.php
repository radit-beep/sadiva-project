<header class="w-full bg-white shadow-sm fixed top-0 left-0 right-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <!-- Desktop Layout -->
        <div class="hidden md:flex justify-between items-center">
            <div class="flex items-center gap-3">
                <span class="text-lg font-medium text-black">Sadifa</span>
            </div>

            <nav class="flex gap-10 text-gray-500 text-md">
                <a href="{{ route('home') }}" class="hover:text-black transition-colors">Home</a>
                <a href="{{ route('product') }}" class="hover:text-black transition-colors">Produk</a>
                <a href="{{ route('community') }}" class="hover:text-black transition-colors">Komunitas</a>
                <a href="{{ route('about') }}" class="hover:text-black transition-colors">About Us</a>
            </nav>

            <div class="w-20"></div>
        </div>

        <!-- Mobile Layout -->
        <div class="md:hidden">
            <div class="flex justify-between items-center">
                <div class="flex items-center gap-3">
                    <div class="w-6 h-6 bg-black rounded-full"></div>
                    <span class="text-lg font-medium text-black">Logo</span>
                </div>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-gray-500 hover:text-black focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <nav x-show="mobileMenuOpen" x-transition class="mt-4 pb-4">
                <div class="flex flex-col space-y-4 text-center">
                    <a href="{{ route('home') }}" class="text-gray-500 hover:text-black py-2 transition-colors">Home</a>
                    <a href="{{ route('product') }}" class="text-gray-500 hover:text-black py-2 transition-colors">Produk</a>
                    <a href="{{ route('community') }}" class="text-gray-500 hover:text-black py-2 transition-colors">Komunitas</a>
                    <a href="{{ route('about') }}" class="text-gray-500 hover:text-black py-2 transition-colors">About Us</a>
                </div>
            </nav>
        </div>
    </div>
</header>

<div class="pt-20">
</div>