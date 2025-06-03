<footer class="bg-gradient-to-br from-green-800 via-green-700 to-green-900 text-white relative overflow-hidden">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-72 h-72 bg-green-200 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full translate-x-1/3 translate-y-1/3"></div>
        <div class="absolute top-1/2 left-1/2 w-64 h-64 bg-green-100 rounded-full -translate-x-1/2 -translate-y-1/2"></div>
    </div>

    <div class="max-w-7xl mx-auto px-6 py-16 relative z-10">
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 lg:gap-12">
            
            <!-- Brand Section -->
            <div class="lg:col-span-1 text-center md:text-left">
                <div class="flex items-center gap-3 justify-center md:justify-start mb-6">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-r from-green-500 to-emerald-600 flex items-center justify-center shadow-lg">
                        <div class="w-4 h-4 bg-white rounded-full"></div>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-green-300 to-emerald-300 bg-clip-text text-transparent">Kebun Sadifa</span>
                </div>
                <p class="text-green-100 text-sm leading-relaxed mb-6">
                    Membangun ekosistem pertanian berkelanjutan melalui teknologi digital dan inovasi ramah lingkungan untuk kehidupan yang lebih hijau.
                </p>
                <div class="flex gap-4 justify-center md:justify-start">
                    <a href="#" class="w-10 h-10 bg-gradient-to-r from-pink-500 to-rose-500 rounded-full flex items-center justify-center hover:scale-110 transform transition-all duration-300 shadow-lg hover:shadow-pink-500/25">
                        <i class="fa-brands fa-instagram text-white text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gradient-to-r from-green-400 to-green-600 rounded-full flex items-center justify-center hover:scale-110 transform transition-all duration-300 shadow-lg hover:shadow-green-500/25">
                        <i class="fa-brands fa-x-twitter text-white text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gradient-to-r from-blue-600 to-blue-800 rounded-full flex items-center justify-center hover:scale-110 transform transition-all duration-300 shadow-lg hover:shadow-blue-600/25">
                        <i class="fa-brands fa-facebook text-white text-lg"></i>
                    </a>
                    <a href="#" class="w-10 h-10 bg-gradient-to-r from-red-500 to-red-700 rounded-full flex items-center justify-center hover:scale-110 transform transition-all duration-300 shadow-lg hover:shadow-red-500/25">
                        <i class="fa-brands fa-youtube text-white text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="text-center md:text-left">
                <h3 class="font-bold text-xl mb-6 relative">
                    <span class="bg-gradient-to-r from-green-300 to-emerald-300 bg-clip-text text-transparent">Quick Links</span>
                    <div class="absolute -bottom-2 left-0 md:left-0 right-0 md:right-auto w-16 h-1 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mx-auto md:mx-0"></div>
                </h3>
                <ul class="space-y-3">
                    <li><a href="{{ route('home') }}" class="text-green-100 hover:text-white hover:translate-x-2 transform transition-all duration-300 inline-flex items-center gap-2 group">
                        <i class="fa-solid fa-chevron-right text-xs text-green-300 group-hover:text-white transition-colors"></i>
                        <span>Home</span>
                    </a></li>
                    <li><a href="{{ route('product') }}" class="text-green-100 hover:text-white hover:translate-x-2 transform transition-all duration-300 inline-flex items-center gap-2 group">
                        <i class="fa-solid fa-chevron-right text-xs text-green-300 group-hover:text-white transition-colors"></i>
                        <span>Produk</span>
                    </a></li>
                    <li><a href="{{ route('community') }}" class="text-green-100 hover:text-white hover:translate-x-2 transform transition-all duration-300 inline-flex items-center gap-2 group">
                        <i class="fa-solid fa-chevron-right text-xs text-green-300 group-hover:text-white transition-colors"></i>
                        <span>Komunitas</span>
                    </a></li>
                    <li><a href="{{ route('about') }}" class="text-green-100 hover:text-white hover:translate-x-2 transform transition-all duration-300 inline-flex items-center gap-2 group">
                        <i class="fa-solid fa-chevron-right text-xs text-green-300 group-hover:text-white transition-colors"></i>
                        <span>About Us</span>
                    </a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="text-center md:text-left">
                <h3 class="font-bold text-xl mb-6 relative">
                    <span class="bg-gradient-to-r from-green-300 to-emerald-300 bg-clip-text text-transparent">Kontak Kami</span>
                    <div class="absolute -bottom-2 left-0 md:left-0 right-0 md:right-auto w-16 h-1 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mx-auto md:mx-0"></div>
                </h3>
                <div class="space-y-4">
                    <div class="flex items-center justify-center md:justify-start gap-3 group">
                        <div class="w-8 h-8 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-phone text-white text-sm"></i>
                        </div>
                        <span class="text-green-100 group-hover:text-white transition-colors">+62 XXX-XXXX-XXXX</span>
                    </div>
                    <div class="flex items-center justify-center md:justify-start gap-3 group">
                        <div class="w-8 h-8 bg-gradient-to-r from-emerald-500 to-green-600 rounded-full flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-envelope text-white text-sm"></i>
                        </div>
                        <span class="text-green-100 group-hover:text-white transition-colors">info@apps.ipb.ac.id</span>
                    </div>
                </div>
            </div>

            <!-- Location -->
            <div class="text-center md:text-left">
                <h3 class="font-bold text-xl mb-6 relative">
                    <span class="bg-gradient-to-r from-green-300 to-emerald-300 bg-clip-text text-transparent">Lokasi Kami</span>
                    <div class="absolute -bottom-2 left-0 md:left-0 right-0 md:right-auto w-16 h-1 bg-gradient-to-r from-green-400 to-emerald-500 rounded-full mx-auto md:mx-0"></div>
                </h3>
                <div class="space-y-3">
                    <div class="flex items-start justify-center md:justify-start gap-3 group">
                        <div class="w-8 h-8 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5 group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-location-dot text-white text-sm"></i>
                        </div>
                        <div class="text-green-100 group-hover:text-white transition-colors">
                            <p class="font-medium">Jl. Raya Dramaga</p>
                            <p>Kampus IPB Dramaga Bogor</p>
                            <p>16680 West Java, Indonesia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="mt-16 mb-12">
            <div class="bg-gradient-to-r from-green-600/20 to-emerald-600/20 backdrop-blur-sm rounded-2xl p-8 border border-white/10">
                <div class="text-center">
                    <h3 class="text-2xl font-bold mb-4 bg-gradient-to-r from-green-300 to-emerald-300 bg-clip-text text-transparent">
                        Subscribe Newsletter
                    </h3>
                    <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                        Dapatkan update terbaru tentang program pertanian, tips berkebun, dan informasi menarik lainnya langsung ke email Anda.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                        <input type="email" placeholder="Masukkan email Anda" 
                               class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-green-200 focus:outline-none focus:ring-2 focus:ring-green-400 focus:border-transparent backdrop-blur-sm">
                        <button class="px-6 py-3 bg-gradient-to-r from-green-500 to-emerald-600 text-white font-semibold rounded-lg hover:from-green-600 hover:to-emerald-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-green-500/25">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-white/10 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-green-200 text-sm text-center md:text-left">
                    &copy; {{ date('Y') }} Kebun Sadifa - Ilmu Komputer IPB University. All rights reserved.
                </p>
                <div class="flex gap-6 text-sm text-green-200">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <a href="#" class="hover:text-white transition-colors">Cookie Policy</a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute top-20 left-10 w-2 h-2 bg-green-300 rounded-full animate-pulse opacity-60"></div>
    <div class="absolute top-32 right-20 w-1 h-1 bg-emerald-300 rounded-full animate-ping opacity-40"></div>
    <div class="absolute bottom-20 left-1/4 w-1.5 h-1.5 bg-green-200 rounded-full animate-pulse opacity-50"></div>
    <div class="absolute bottom-32 right-1/3 w-1 h-1 bg-emerald-200 rounded-full animate-ping opacity-30"></div>
</footer>