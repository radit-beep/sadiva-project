<footer class="bg-white border-t text-black">
    <div class="max-w-7xl mx-auto px-6 py-12">
        <!-- Responsive Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-12">
            
            <!-- About Section -->
            <div class="text-center md:text-left">
                <div class="flex items-center gap-2 justify-center md:justify-start">
                    <div class="w-6 h-6 rounded-full bg-black"></div>
                    <span class="text-lg font-medium">Logo</span>
                </div>
                <h3 class="font-semibold text-lg mt-6 mb-4">About Us</h3>
                <ul class="text-md space-y-2">
                    <li><a href="{{ route('about') }}" class="hover:underline transition-all hover:text-gray-600">Visi dan Misi</a></li>
                    <li><a href="{{ route('about') }}" class="hover:underline transition-all hover:text-gray-600">Moto dan Harapan</a></li>
                </ul>
            </div>

            <!-- Contact Section -->
            <div class="text-center md:text-left lg:text-center">
                <h3 class="font-semibold text-lg mt-6 mb-4">Kontak Kami</h3>
                <div class="space-y-2">
                    <p class="text-md flex items-center justify-center md:justify-start lg:justify-center gap-2">
                        <i class="fa-solid fa-phone text-sm"></i>
                        <span>+62 XXX-XXXX-XXXX</span>
                    </p>
                    <p class="text-md flex items-center justify-center md:justify-start lg:justify-center gap-2">
                        <i class="fa-solid fa-envelope text-sm"></i>
                        <span>info@apps.ipb.ac.id</span>
                    </p>
                </div>
            </div>

            <!-- Social Media & Location Section -->
            <div class="text-center md:text-left md:col-span-2 lg:col-span-1">
                <!-- Social Media -->
                <div class="mb-6">
                    <h3 class="font-semibold text-lg mt-6 mb-4">Follow Us</h3>
                    <div class="flex gap-4 justify-center md:justify-start text-black text-2xl lg:text-3xl">
                        <a href="#" class="hover:text-pink-500 transition-colors">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="hover:text-blue-400 transition-colors">
                            <i class="fa-brands fa-x-twitter"></i>
                        </a>
                        <a href="#" class="hover:text-blue-600 transition-colors">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-red-500 transition-colors">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Location -->
                <div>
                    <h3 class="font-semibold text-lg mb-4">Lokasi Kami</h3>
                    <div class="space-y-1 text-md">
                        <p class="flex items-center justify-center md:justify-start gap-2">
                            <i class="fa-solid fa-location-dot text-sm"></i>
                            <span>Jl. Raya Dramaga</span>
                        </p>
                        <p class="text-center md:text-left">Kampus IPB Dramaga Bogor</p>
                        <p class="text-center md:text-left">16680 West Java, Indonesia</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copyright Section -->
        <div class="border-t mt-8 pt-6 text-center text-sm text-gray-600">
            <p>&copy; 2024 Logo. All rights reserved.</p>
        </div>
    </div>
</footer>