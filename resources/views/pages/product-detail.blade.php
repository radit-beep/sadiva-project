@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="min-h-screen bg-gradient-to-br from-green-50 via-white to-emerald-50">
    <!-- Breadcrumb -->
    <div class="container mx-auto px-4 pt-6">
        <nav class="flex items-center space-x-2 text-sm text-gray-600 mb-8">
            <a href="{{ route('home') }}" class="hover:text-green-600 transition-colors">Home</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <a href="{{ route('product') }}" class="hover:text-green-600 transition-colors">Produk</a>
            <i class="fas fa-chevron-right text-xs"></i>
            <span class="text-green-600 font-medium">{{ $product->name }}</span>
        </nav>
    </div>

    <!-- Main Product Section -->
    <div class="container mx-auto px-4 pb-12">
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
            <div class="grid lg:grid-cols-2 gap-0">
                <!-- Product Image Section -->
                <div class="relative bg-gradient-to-br from-green-100 to-emerald-100 p-8 lg:p-12 flex items-center justify-center">
                    @if ($product->image_url)
                        <div class="relative group">
                            <div class="absolute -inset-4 bg-gradient-to-r from-green-400 to-emerald-500 rounded-2xl blur-lg opacity-20 group-hover:opacity-30 transition-opacity"></div>
                            <img src="{{ asset('storage/' . $product->image_url) }}" 
                                 alt="{{ $product->name }}" 
                                 class="relative w-full max-w-md h-80 object-contain rounded-2xl shadow-lg transform group-hover:scale-105 transition-transform duration-500">
                        </div>
                    @else
                        <div class="w-full max-w-md h-80 bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl flex items-center justify-center">
                            <div class="text-center text-gray-400">
                                <i class="fas fa-image text-6xl mb-4"></i>
                                <p>No Image Available</p>
                            </div>
                        </div>
                    @endif
                    
                    <!-- Floating Badges -->
                    <div class="absolute top-4 left-4">
                        <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-leaf mr-1"></i>Organik
                        </span>
                    </div>
                    
                    <div class="absolute top-4 right-4">
                        <span class="bg-yellow-400 text-gray-800 px-3 py-1 rounded-full text-sm font-medium shadow-lg">
                            <i class="fas fa-star mr-1"></i>Fresh
                        </span>
                    </div>
                </div>

                <!-- Product Info Section -->
                <div class="p-8 lg:p-12 flex flex-col justify-center">
                    <!-- Product Title -->
                    <div class="mb-6">
                        <h1 class="text-4xl lg:text-5xl font-bold text-gray-800 mb-3 leading-tight">
                            {{ $product->name }}
                        </h1>
                        <div class="w-20 h-1 bg-gradient-to-r from-green-500 to-emerald-500 rounded-full"></div>
                    </div>

                    <!-- Price -->
                    <div class="mb-8">
                        <div class="flex items-baseline space-x-2">
                            <span class="text-4xl font-bold text-green-600">
                                Rp{{ number_format($product->price, 0, ',', '.') }}
                            </span>
                            <span class="text-gray-500 text-lg">/kg</span>
                        </div>
                        <p class="text-green-600 text-sm font-medium mt-1">
                            <i class="fas fa-truck mr-1"></i>Free ongkir area Bogor
                        </p>
                    </div>

                    <!-- Description -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Deskripsi Produk</h3>
                        <p class="text-gray-700 text-lg leading-relaxed">{{ $product->description }}</p>
                    </div>

                    <!-- Product Features -->
                    <div class="grid grid-cols-2 gap-4 mb-8">
                        <div class="bg-green-50 p-4 rounded-xl text-center">
                            <i class="fas fa-seedling text-2xl text-green-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">100% Organik</p>
                        </div>
                        <div class="bg-blue-50 p-4 rounded-xl text-center">
                            <i class="fas fa-shield-alt text-2xl text-blue-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Bebas Pestisida</p>
                        </div>
                        <div class="bg-yellow-50 p-4 rounded-xl text-center">
                            <i class="fas fa-clock text-2xl text-yellow-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Segar Dipetik</p>
                        </div>
                        <div class="bg-purple-50 p-4 rounded-xl text-center">
                            <i class="fas fa-heart text-2xl text-purple-600 mb-2"></i>
                            <p class="text-sm font-medium text-gray-700">Sehat & Bergizi</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-4">
                        <!-- WhatsApp Order Button -->
                        <a href="https://wa.me/6281234567890?text=Halo! Saya tertarik untuk memesan {{ $product->name }} dengan harga Rp{{ number_format($product->price, 0, ',', '.') }}" 
                           target="_blank"
                           class="w-full bg-gradient-to-r from-green-500 to-emerald-600 hover:from-green-600 hover:to-emerald-700 text-white font-semibold py-4 px-8 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-3 group">
                            <i class="fab fa-whatsapp text-2xl group-hover:animate-bounce"></i>
                            <span class="text-lg">Pesan via WhatsApp</span>
                        </a>

                        <!-- Call Button -->
                        <a href="tel:+6281234567890" 
                           class="w-full bg-gradient-to-r from-blue-500 to-indigo-600 hover:from-blue-600 hover:to-indigo-700 text-white font-semibold py-4 px-8 rounded-2xl transition-all duration-300 transform hover:scale-105 hover:shadow-xl flex items-center justify-center space-x-3 group">
                            <i class="fas fa-phone text-xl group-hover:animate-pulse"></i>
                            <span class="text-lg">Hubungi Langsung</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Information Section -->
        <div class="mt-12 grid md:grid-cols-3 gap-8">
            <!-- Shipping Info -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-green-100">
                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-2xl text-green-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Pengiriman Cepat</h3>
                    <p class="text-gray-600 text-sm">Dikirim fresh dari kebun dalam 24 jam</p>
                </div>
            </div>

            <!-- Quality Guarantee -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-blue-100">
                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-award text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Jaminan Kualitas</h3>
                    <p class="text-gray-600 text-sm">100% organik bersertifikat dari IPB</p>
                </div>
            </div>

            <!-- Customer Support -->
            <div class="bg-white p-6 rounded-2xl shadow-lg border border-yellow-100">
                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="font-semibold text-gray-800 mb-2">Customer Support</h3>
                    <p class="text-gray-600 text-sm">Siap membantu 24/7 untuk kepuasan Anda</p>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-12 text-center">
            <a href="{{ route('product') }}" 
               class="inline-flex items-center space-x-2 text-gray-600 hover:text-green-600 font-medium transition-colors group">
                <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
                <span>Kembali ke Daftar Produk</span>
            </a>
        </div>
    </div>
</div>

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
</style>
@endpush
@endsection