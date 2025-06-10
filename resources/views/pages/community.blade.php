@extends('layouts.app')

@section('title', 'Komunitas')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gradient-to-br from-green-600 via-green-700 to-emerald-800 text-white py-16 px-6 mb-12 rounded-2xl overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-10"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23ffffff" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="2"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
        
        <div class="relative text-center max-w-4xl mx-auto">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-white bg-opacity-20 rounded-full mb-6 backdrop-blur-sm">
                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                </svg>
            </div>
            <h1 class="text-5xl font-bold mb-4 leading-tight">
                Komunitas <span class="text-yellow-300">Kami</span>
            </h1>
            @if ($communities->count())
                <p class="text-xl text-green-100 font-light leading-relaxed max-w-2xl mx-auto">
                    Bergabunglah dengan jaringan mitra kerja yang berkembang bersama Sadifa Farm dalam membangun ekosistem pertanian berkelanjutan
                </p>
            @endif
        </div>
        
        <div class="absolute top-10 left-10 w-20 h-20 bg-white bg-opacity-10 rounded-full blur-xl"></div>
        <div class="absolute bottom-10 right-10 w-32 h-32 bg-yellow-300 bg-opacity-20 rounded-full blur-2xl"></div>
    </div>

    @if ($communities->count())
        <div class="bg-gradient-to-r from-gray-50 to-gray-100 rounded-2xl p-8 mb-12 border border-gray-200">
            <div class="flex flex-col md:flex-row items-center justify-between">
                <div class="flex items-center space-x-4 mb-4 md:mb-0">
                    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800">{{ $communities->count() }}</h3>
                        <p class="text-gray-600">Mitra Aktif</p>
                    </div>
                </div>
                <div class="text-center md:text-right">
                    <p class="text-gray-700 font-medium">Tumbuh Bersama</p>
                    <p class="text-sm text-gray-500">Membangun masa depan pertanian yang berkelanjutan</p>
                </div>
            </div>
        </div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
        @forelse ($communities as $community)
            <div class="group bg-white border border-gray-200 rounded-2xl shadow-sm hover:shadow-2xl transition-all duration-500 overflow-hidden transform hover:-translate-y-2">
                <div class="relative overflow-hidden">
                    @if($community->image_url)
                        <img src="{{ asset('storage/' . $community->image_url) }}" 
                             alt="{{ $community->title }}" 
                             class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent opacity-0 group-hover:opacity-60 transition-opacity duration-500"></div>
                    @else
                        <div class="w-full h-56 bg-gradient-to-br from-green-400 to-emerald-600 flex items-center justify-center">
                            <svg class="w-16 h-16 text-white opacity-80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                    @endif
                    
                    <div class="absolute top-4 right-4 bg-white bg-opacity-90 backdrop-blur-sm rounded-full px-3 py-1 transform translate-x-full group-hover:translate-x-0 transition-transform duration-500">
                        <span class="text-xs font-semibold text-green-700">Mitra</span>
                    </div>
                </div>

                <div class="p-6">
                    <h2 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-700 transition-colors duration-300 line-clamp-2">
                        {{ $community->title }}
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed line-clamp-3 mb-4">
                        {{ Str::limit($community->description, 100) }}
                    </p>
                    
                    <div class="flex items-center justify-between pt-4 border-t border-gray-100">
                        <div class="flex items-center space-x-2">
                            <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <span class="text-xs text-gray-500 font-medium">Terverifikasi</span>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-span-full flex flex-col items-center justify-center py-20">
                <div class="w-32 h-32 bg-gradient-to-br from-gray-200 to-gray-300 rounded-full flex items-center justify-center mb-8">
                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-700 mb-4">Belum Ada Komunitas</h3>
                <p class="text-gray-500 text-center max-w-md mb-8">
                    Komunitas sedang dalam tahap pengembangan. Bergabunglah dengan kami untuk membangun jaringan mitra yang kuat.
                </p>
                <button class="bg-gradient-to-r from-green-600 to-emerald-600 text-white px-8 py-3 rounded-full font-semibold hover:from-green-700 hover:to-emerald-700 transform hover:scale-105 transition-all duration-300 shadow-lg hover:shadow-xl">
                    Daftar Sebagai Mitra
                </button>
            </div>
        @endforelse
    </div>

    @if ($communities->count())
        <div class="mt-16 bg-gradient-to-r from-green-600 to-emerald-600 rounded-2xl p-8 text-center text-white">
            <h3 class="text-2xl font-bold mb-4">Tertarik Bergabung?</h3>
            <p class="text-green-100 mb-6 max-w-2xl mx-auto">
                Jadilah bagian dari komunitas mitra Sadifa Farm dan kembangkan bisnis pertanian Anda bersama kami.
            </p>
            <button class="bg-white text-green-700 px-8 py-3 rounded-full font-semibold hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                <a href="https://wa.me/628123456789" target="_blank" rel="noopener">Bergabung Sekarang</a>
            </button>
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
        50% { transform: translateY(-10px); }
    }
    
    .group:hover .floating {
        animation: float 3s ease-in-out infinite;
    }
</style>
@endpush