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

<div class="bg-gradient-to-b from-gray-50 to-white">
    <div class="container mx-auto px-4 py-16">
        <div class="max-w-7xl mx-auto mb-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="relative">
                    <div class="bg-white rounded-3xl p-6 shadow-2xl">
                        <div class="relative overflow-hidden rounded-2xl">
                            <div id="photoCarousel" class="flex transition-transform duration-500 ease-in-out">
                                <div class="min-w-full relative">
                                    <img src="{{ asset('images/sadifa-farm-overview.jpg') }}" alt="Sadifa Farm Overview" class="w-full h-80 object-cover rounded-2xl">
                                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-4 py-2 rounded-lg backdrop-blur-sm">
                                        <p class="text-sm font-semibold">Kebun Organik Sadifa Farm</p>
                                    </div>
                                </div>

                                <div class="min-w-full relative">
                                    <img src="{{ asset('images/organic-farming.jpg') }}" alt="Organic Farming Process" class="w-full h-80 object-cover rounded-2xl">
                                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-4 py-2 rounded-lg backdrop-blur-sm">
                                        <p class="text-sm font-semibold">Proses Pertanian Organik</p>
                                    </div>
                                </div>

                                <div class="min-w-full relative">
                                    <img src="{{ asset('images/fresh-vegetables.jpg') }}" alt="Fresh Organic Vegetables" class="w-full h-80 object-cover rounded-2xl">
                                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-4 py-2 rounded-lg backdrop-blur-sm">
                                        <p class="text-sm font-semibold">Hasil Panen Segar</p>
                                    </div>
                                </div>

                                <div class="min-w-full relative">
                                    <img src="{{ asset('images/community-farming.jpg') }}" alt="Community Farming" class="w-full h-80 object-cover rounded-2xl">
                                    <div class="absolute bottom-4 left-4 bg-black bg-opacity-50 text-white px-4 py-2 rounded-lg backdrop-blur-sm">
                                        <p class="text-sm font-semibold">Komunitas Pertanian</p>
                                    </div>
                                </div>
                            </div>

                            <button id="prevPhotoBtn" class="absolute left-3 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 text-gray-800 p-2 rounded-full transition-all duration-300 shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                                </svg>
                            </button>
                            
                            <button id="nextPhotoBtn" class="absolute right-3 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-80 hover:bg-opacity-100 text-gray-800 p-2 rounded-full transition-all duration-300 shadow-lg">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="flex justify-center mt-4 space-x-2">
                            <button class="photo-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-slide="0"></button>
                            <button class="photo-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-slide="1"></button>
                            <button class="photo-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-slide="2"></button>
                            <button class="photo-dot w-3 h-3 rounded-full bg-gray-300 transition-all duration-300" data-slide="3"></button>
                        </div>
                    </div>
                </div>

                <div class="space-y-8">
                    <div class="inline-block px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-semibold">
                        🌱 Cerita Kami
                    </div>
                    
                    <div class="space-y-6">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-800 leading-tight">
                            Perjalanan Menuju <span class="text-green-600">Pertanian Berkelanjutan</span>
                        </h2>
                        
                        <div class="prose prose-lg text-gray-700 space-y-4">
                            <p class="leading-relaxed">
                                Sadifa Farm adalah kebun organik yang terletak di lingkungan Institut Pertanian Bogor (IPB), didirikan dengan semangat untuk menghadirkan gaya hidup sehat dan berkelanjutan melalui produk-produk pertanian alami. Kami percaya bahwa alam adalah sumber kehidupan terbaik—dan dari sanalah kami memulai perjalanan ini.
                            </p>
                            
                            <p class="leading-relaxed">
                                Setiap proses di Sadifa Farm dilakukan dengan pendekatan organik, tanpa menggunakan pestisida berbahaya, dan selalu mengutamakan praktik ramah lingkungan. Kami menjaga kesegaran dan kualitas hasil tani agar sampai ke tangan konsumen dalam kondisi terbaik—alami, sehat, dan penuh kebaikan dari tanah.
                            </p>
                            
                            <p class="leading-relaxed">
                                Namun Sadifa Farm bukan sekadar tempat bertani. Kami hadir untuk membangun komunitas, menjalin hubungan yang kuat antara petani, konsumen, dan lingkungan. Melalui kolaborasi, edukasi, dan partisipasi aktif, kami ingin menghidupkan ekosistem pertanian yang saling mendukung dan berkelanjutan—dimulai dari kebun kami di IPB, untuk masa depan yang lebih hijau dan sehat bagi semua.
                            </p>
                        </div>

                        <div class="grid grid-cols-3 gap-4 mt-8">
                            <div class="text-center p-4 bg-green-50 rounded-xl">
                                <div class="text-2xl font-bold text-green-600">100%</div>
                                <div class="text-sm text-gray-600">Organik</div>
                            </div>
                            <div class="text-center p-4 bg-blue-50 rounded-xl">
                                <div class="text-2xl font-bold text-blue-600">3+</div>
                                <div class="text-sm text-gray-600">Tahun Pengalaman</div>
                            </div>
                            <div class="text-center p-4 bg-yellow-50 rounded-xl">
                                <div class="text-2xl font-bold text-yellow-600">500+</div>
                                <div class="text-sm text-gray-600">Pelanggan Puas</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 mb-20">
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

        <div class="bg-gradient-to-r from-green-600 to-emerald-600 rounded-3xl p-12 text-center text-white shadow-2xl">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Bergabunglah Bersama Kami</h2>
                <p class="text-xl text-green-100 leading-relaxed mb-8">
                    Kami terbuka untuk kerja sama, edukasi, maupun kunjungan. Sadifa Farm bukan sekadar tempat menanam, tapi juga tempat tumbuh—untuk semua yang mencintai alam dan masa depan yang lebih hijau.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <button class="bg-white text-green-600 px-8 py-4 rounded-xl font-semibold hover:bg-green-50 transition-all duration-300 transform hover:scale-105 shadow-lg"> 
                        <a href="https://maps.app.goo.gl/KU86oENVCKLKDXWX6" target="_blank" rel="noopener">🌱 Kunjungi Kami</a> 
                    </button>
                    <button class="bg-green-500 bg-opacity-30 backdrop-blur text-white px-8 py-4 rounded-xl font-semibold hover:bg-opacity-40 transition-all duration-300 border border-green-300 border-opacity-30">
                        <a href="https://wa.me/628123456789" target="_blank" rel="noopener">📞 Hubungi Kami</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

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

    .photo-dot.active {
        background-color: #10b981 !important;
        transform: scale(1.2);
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const photoCarousel = document.getElementById('photoCarousel');
    const prevPhotoBtn = document.getElementById('prevPhotoBtn');
    const nextPhotoBtn = document.getElementById('nextPhotoBtn');
    const photoDots = document.querySelectorAll('.photo-dot');
    
    let currentPhotoSlide = 0;
    const totalPhotoSlides = 4;
    
    function updatePhotoCarousel() {
        const translateX = -currentPhotoSlide * 100;
        photoCarousel.style.transform = `translateX(${translateX}%)`;
        
        photoDots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentPhotoSlide);
        });
    }
    
    function nextPhotoSlide() {
        currentPhotoSlide = (currentPhotoSlide + 1) % totalPhotoSlides;
        updatePhotoCarousel();
    }
    
    function prevPhotoSlide() {
        currentPhotoSlide = (currentPhotoSlide - 1 + totalPhotoSlides) % totalPhotoSlides;
        updatePhotoCarousel();
    }
    
    function goToPhotoSlide(slideIndex) {
        currentPhotoSlide = slideIndex;
        updatePhotoCarousel();
    }
    
    nextPhotoBtn.addEventListener('click', nextPhotoSlide);
    prevPhotoBtn.addEventListener('click', prevPhotoSlide);
    
    photoDots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToPhotoSlide(index));
    });
    
    setInterval(nextPhotoSlide, 8000);
    
    updatePhotoCarousel();
});
</script>
@endpush