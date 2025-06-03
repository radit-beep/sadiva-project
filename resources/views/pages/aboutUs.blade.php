@extends('layouts.app')

@section('title', 'Tentang Kami - Sadifa Farm')

@section('content')
<!-- Hero Section -->
<div class="relative bg-gradient-to-br from-green-600 via-green-700 to-emerald-800 text-white overflow-hidden">
    <div class="absolute inset-0 bg-black opacity-20"></div>
    <div class="absolute inset-0">
        <div class="absolute top-0 left-0 w-64 h-64 bg-green-400 rounded-full mix-blend-multiply filter blur-xl opacity-30 animate-pulse"></div>
        <div class="absolute top-0 right-0 w-96 h-96 bg-emerald-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-pulse delay-1000"></div>
        <div class="absolute bottom-0 left-1/2 w-80 h-80 bg-teal-400 rounded-full mix-blend-multiply filter blur-xl opacity-25 animate-pulse delay-500"></div>
    </div>
    
    <div class="relative container mx-auto px-4 py-20 md:py-32">
        <div class="text-center max-w-4xl mx-auto">
            <h1 class="text-5xl md:text-7xl font-bold mb-6 bg-gradient-to-r from-white to-green-100 bg-clip-text text-transparent leading-tight">
                Tentang Sadifa Farm
            </h1>
            <p class="text-xl md:text-2xl text-green-100 leading-relaxed max-w-3xl mx-auto">
                Membangun masa depan pertanian organik berkelanjutan di jantung Institut Pertanian Bogor
            </p>
            <div class="mt-8 flex justify-center">
                <div class="w-24 h-1 bg-gradient-to-r from-green-300 to-emerald-300 rounded-full"></div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 py-16">
        <!-- Story Section -->
        <div class="max-w-4xl mx-auto mb-20">
            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="space-y-6">
                    <div class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
                        🌱 Cerita Kami
                    </div>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Sadifa Farm adalah kebun organik yang terletak di lingkungan Institut Pertanian Bogor (IPB), didirikan dengan semangat untuk menghadirkan gaya hidup sehat dan berkelanjutan melalui produk-produk pertanian alami. Kami percaya bahwa alam adalah sumber kehidupan terbaik—dan dari sanalah kami memulai perjalanan ini.
                    </p>
                </div>
                <div class="relative">
                    <div class="w-full h-64 bg-gradient-to-br from-green-400 to-emerald-600 rounded-2xl shadow-2xl transform rotate-3 absolute"></div>
                    <div class="w-full h-64 bg-gradient-to-br from-green-300 to-teal-500 rounded-2xl shadow-xl relative z-10 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-4xl mb-2">🌿</div>
                            <p class="font-semibold">Organik & Alami</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center mb-16">
                <div class="order-2 md:order-1 relative">
                    <div class="w-full h-64 bg-gradient-to-br from-emerald-400 to-green-600 rounded-2xl shadow-2xl transform -rotate-3 absolute"></div>
                    <div class="w-full h-64 bg-gradient-to-br from-teal-300 to-green-500 rounded-2xl shadow-xl relative z-10 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-4xl mb-2">🌍</div>
                            <p class="font-semibold">Ramah Lingkungan</p>
                        </div>
                    </div>
                </div>
                <div class="order-1 md:order-2 space-y-6">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Setiap proses di Sadifa Farm dilakukan dengan pendekatan organik, tanpa menggunakan pestisida berbahaya, dan selalu mengutamakan praktik ramah lingkungan. Kami menjaga kesegaran dan kualitas hasil tani agar sampai ke tangan konsumen dalam kondisi terbaik—alami, sehat, dan penuh kebaikan dari tanah.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-6">
                    <p class="text-lg text-gray-700 leading-relaxed">
                        Namun Sadifa Farm bukan sekadar tempat bertani. Kami hadir untuk membangun komunitas, menjalin hubungan yang kuat antara petani, konsumen, dan lingkungan. Melalui kolaborasi, edukasi, dan partisipasi aktif, kami ingin menghidupkan ekosistem pertanian yang saling mendukung dan berkelanjutan—dimulai dari kebun kami di IPB, untuk masa depan yang lebih hijau dan sehat bagi semua.
                    </p>
                </div>
                <div class="relative">
                    <div class="w-full h-64 bg-gradient-to-br from-blue-400 to-green-600 rounded-2xl shadow-2xl transform rotate-2 absolute"></div>
                    <div class="w-full h-64 bg-gradient-to-br from-cyan-300 to-emerald-500 rounded-2xl shadow-xl relative z-10 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="text-4xl mb-2">🤝</div>
                            <p class="font-semibold">Membangun Komunitas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Vision, Mission, Motto Section -->
        <div class="grid lg:grid-cols-3 gap-8 mb-20">
            <!-- Visi -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-400 to-emerald-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-2xl text-white">🎯</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Visi Kami</h2>
                </div>
                <p class="text-gray-600 leading-relaxed text-center">
                    Menjadi pelopor dalam pertanian organik berkelanjutan yang memberdayakan masyarakat dan melestarikan lingkungan untuk generasi mendatang.
                </p>
            </div>

            <!-- Misi -->
            <div class="bg-white rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-green-100">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-br from-emerald-400 to-teal-600 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg">
                        <span class="text-2xl text-white">🚀</span>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-800">Misi Kami</h2>
                </div>
                <div class="space-y-3">
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                        <p class="text-gray-600 text-sm">Menyediakan produk pertanian berkualitas, alami, dan sehat</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                        <p class="text-gray-600 text-sm">Mengedukasi masyarakat tentang pentingnya pola hidup sehat</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                        <p class="text-gray-600 text-sm">Berinovasi dalam teknologi pertanian berkelanjutan</p>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="w-2 h-2 bg-green-500 rounded-full mt-2 flex-shrink-0"></div>
                        <p class="text-gray-600 text-sm">Memberdayakan petani lokal dan komunitas sekitar</p>
                    </div>
                </div>
            </div>

            <!-- Motto -->
            <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-3xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 text-white">
                <div class="text-center mb-6">
                    <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mx-auto mb-4 shadow-lg backdrop-blur">
                        <span class="text-2xl">💫</span>
                    </div>
                    <h2 class="text-2xl font-bold">Motto Kami</h2>
                </div>
                <div class="text-center">
                    <p class="text-xl font-semibold italic mb-4 leading-relaxed">
                        "Dari Tanah yang Sehat, untuk Hidup yang Berkah"
                    </p>
                    <p class="text-green-100 text-sm leading-relaxed">
                        Motto ini mencerminkan komitmen kami untuk menjaga kesehatan tanah sebagai fondasi utama menghasilkan produk pertanian yang berkualitas dan membawa kebaikan bagi semua.
                    </p>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-3xl p-12 text-center text-white shadow-2xl">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Bergabunglah Bersama Kami</h2>
                <p class="text-xl text-green-100 leading-relaxed mb-8">
                    Kami terbuka untuk kerja sama, edukasi, maupun kunjungan. Sadifa Farm bukan sekadar tempat menanam, tapi juga tempat tumbuh—untuk semua yang mencintai alam dan masa depan yang lebih hijau.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="https://maps.app.goo.gl/KU86oENVCKLKDXWX6" target="_blank" rel="noopener" class="bg-white text-green-600 px-8 py-4 rounded-xl font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105 shadow-lg">
                        🌱 Kunjungi Kami
                    </a>
                    <a href="https://wa.me/628123456789" target="_blank" rel="noopener" class="bg-green-500 bg-opacity-30 backdrop-blur text-white px-8 py-4 rounded-xl font-semibold hover:bg-opacity-40 transition-all duration-300 border border-green-300 border-opacity-30">
                        📞 Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <!-- Floating Elements -->
<div class="fixed bottom-8 right-8 z-50">
    <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center shadow-lg hover:shadow-xl transition-all duration-300 cursor-pointer hover:scale-110">
        <span class="text-white text-xl">↑</span>
    </div>
</div> --}}

@endsection

@push('styles')
<style>
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }
    
    .animate-float {
        animation: float 3s ease-in-out infinite;
    }
    
    .animate-float-delay {
        animation: float 3s ease-in-out infinite;
        animation-delay: 1.5s;
    }
</style>
@endpush

@push('scripts')
<script>
    // Smooth scrolling for back to top button
    document.addEventListener('DOMContentLoaded', function() {
        const backToTop = document.querySelector('.fixed.bottom-8.right-8');
        if (backToTop) {
            backToTop.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
        
        // Show/hide back to top button based on scroll position
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                backToTop.style.opacity = '1';
                backToTop.style.visibility = 'visible';
            } else {
                backToTop.style.opacity = '0';
                backToTop.style.visibility = 'hidden';
            }
        });
    });
</script>
@endpush