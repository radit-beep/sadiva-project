@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-emerald-600 via-green-600 to-teal-700 text-white py-16 px-6 mb-12 rounded-2xl overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.03"%3E%3Cpath d="M20 20c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10zm10 0c0-5.5-4.5-10-10-10s-10 4.5-10 10 4.5 10 10 10 10-4.5 10-10z"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
        
        <div class="relative text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 backdrop-blur-sm">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                </svg>
            </div>
            <h1 class="text-5xl font-bold mb-4 leading-tight">
                Produk <span class="text-yellow-300">Kami</span>
            </h1>
            @if ($products->count())
                <p class="text-xl text-green-100 font-light leading-relaxed max-w-2xl mx-auto">
                    Temukan katalog lengkap produk berkualitas tinggi dari Sadifa Farm yang diproduksi dengan standar terbaik
                </p>
            @endif
        </div>
        
        <!-- Decorative elements -->
        <div class="absolute top-8 left-16 w-24 h-24 bg-yellow-300 bg-opacity-20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-12 right-12 w-32 h-32 bg-white bg-opacity-10 rounded-full blur-xl"></div>
    </div>

    @if ($products->count())
        <!-- Filter & Stats Section -->
        <div class="bg-gradient-to-r from-gray-50 to-white rounded-2xl p-8 mb-12 border border-gray-200 shadow-sm">
            <div class="flex flex-col lg:flex-row items-center justify-between">
                <div class="flex items-center space-x-6 mb-6 lg:mb-0">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 bg-emerald-500 rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl font-bold text-gray-800">{{ $products->count() }}</h3>
                            <p class="text-gray-600">Produk Tersedia</p>
                        </div>
                    </div>
                    
                    <div class="hidden md:block w-px h-12 bg-gray-300"></div>
                    
                    <div class="flex items-center space-x-2">
                        <div class="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                        <span class="text-gray-700 font-medium">Stok Tersedia</span>
                    </div>
                </div>
                
                <!-- Filter Buttons -->
                <div class="flex flex-wrap gap-3">
                    <button class="px-4 py-2 bg-emerald-600 text-white rounded-full text-sm font-medium hover:bg-emerald-700 transition-colors duration-300 shadow-sm">
                        Semua Produk
                    </button>
                </div>
            </div>
        </div>
    @endif

    <!-- Products Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse ($products as $product)
            <a href="{{ route('product.detail', $product->id) }}" class="group block bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                <!-- Image Container -->
                <div class="relative overflow-hidden">
                    @if($product->image_url)
                        <img src="{{ asset('storage/' . $product->image_url) }}" 
                             alt="{{ $product->name }}" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-50 transition-opacity duration-500"></div>
                    @else
                        <div class="w-full h-56 bg-gradient-to-br from-emerald-400 to-green-600 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                    @endif
                    
                    <!-- Product Badge -->
                    <div class="absolute top-4 left-4 bg-emerald-500 text-white rounded-full px-3 py-1 text-xs font-semibold shadow-lg">
                        Segar
                    </div>
                    
                    <!-- Quick Action -->
                    <div class="absolute top-4 right-4 opacity-0 group-hover:opacity-100 transition-opacity duration-500">
                        <button class="w-10 h-10 bg-white bg-opacity-90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors duration-300 shadow-lg">
                            <svg class="w-5 h-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Content -->
                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-emerald-700 transition-colors duration-300 line-clamp-2">
                        {{ $product->name }}
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
                        {{ Str::limit($product->description, 100) }}
                    </p>
                    
                    <!-- Price & Stock -->
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex flex-col">
                            <span class="text-2xl font-bold text-emerald-600 group-hover:text-emerald-700 transition-colors duration-300">
                                Rp{{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <span class="text-xs text-gray-500">per unit</span>
                        </div>
                        <div class="flex items-center space-x-1">
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                            <span class="text-xs text-gray-600 font-medium">Stok Tersedia</span>
                        </div>
                    </div>
                    
                    <!-- Action Area -->
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="flex items-center space-x-1">
                                <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-xs text-gray-600">4.8</span>
                            </div>
                            <span class="text-xs text-gray-400">•</span>
                            <span class="text-xs text-gray-600">124 terjual</span>
                        </div>
                        
                        <div class="flex items-center space-x-1 text-emerald-600 font-medium text-sm opacity-0 group-hover:opacity-100 transition-all duration-300 transform translate-x-4 group-hover:translate-x-0">
                            <span>Lihat Detail</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        @empty
            <!-- Empty State -->
            <div class="col-span-full flex flex-col items-center justify-center py-20">
                <div class="w-32 h-32 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mb-8 relative">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    <div class="absolute -top-2 -right-2 w-8 h-8 bg-yellow-300 rounded-full flex items-center justify-center">
                        <span class="text-xs font-bold text-gray-700">!</span>
                    </div>
                </div>
                <h3 class="text-3xl font-bold text-gray-700 mb-4">Produk Sedang Disiapkan</h3>
                <p class="text-gray-500 text-center max-w-md mb-8 leading-relaxed">
                    Kami sedang mempersiapkan produk-produk terbaik untuk Anda. Pantau terus halaman ini untuk update terbaru!
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="bg-gradient-to-r from-emerald-600 to-green-600 text-white px-8 py-3 rounded-full font-semibold hover:from-emerald-700 hover:to-green-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                        Notify Saya
                    </button>
                    <button class="border-2 border-emerald-600 text-emerald-600 px-8 py-3 rounded-full font-semibold hover:bg-emerald-50 transition-all duration-300">
                        Hubungi Kami
                    </button>
                </div>
            </div>
        @endforelse
    </div>

    @if ($products->count())
        <!-- Newsletter Section -->
        <div class="mt-16 bg-gradient-to-r from-emerald-600 via-green-600 to-teal-600 rounded-2xl p-8 text-center text-white relative overflow-hidden">
            <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-30"></div>
            <div class="relative z-10">
                <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold mb-4">Dapatkan Update Produk Terbaru</h3>
                <p class="text-green-100 mb-8 max-w-2xl mx-auto text-lg">
                    Jadilah yang pertama mengetahui produk baru, promo spesial, dan tips bercocok tanam dari Sadifa Farm.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Masukkan email Anda" class="flex-1 px-6 py-3 rounded-full text-gray-700 font-medium focus:outline-none focus:ring-4 focus:ring-white focus:ring-opacity-30">
                    <button class="bg-white text-emerald-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg whitespace-nowrap">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    @endif
@endsection

@push('styles')
<style>
    .line-clamp-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    .line-clamp-3 {
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-5px); }
    }
    
    .group:hover .floating {
        animation: float 2s ease-in-out infinite;
    }
    
    /* Custom scrollbar for better UX */
    ::-webkit-scrollbar {
        width: 8px;
    }
    
    ::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb {
        background: #10b981;
        border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
        background: #059669;
    }
</style>
@endpush