@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="w-screen relative left-1/2 right-1/2 -mx-[50vw]">
        <div class="relative overflow-hidden">
            <!-- Carousel Container -->
            <div id="carousel" class="flex transition-transform duration-[1200ms] [transition-timing-function:cubic-bezier(0.25,0.1,0.25,1)] [will-change:transform]">
                <div class="min-w-full relative">
                    <img src="{{ asset('images/sadifa farm.jpg') }}" alt="Sadifa Farm 1" class="w-full h-[70vh] object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-5xl md:text-7xl font-bold mb-4 drop-shadow-2xl animate-fade-in">
                                Sadifa Farm
                            </h1>
                            <p class="text-xl md:text-2xl font-light drop-shadow-lg animate-fade-in-delay">
                                Pertanian Organik Berkelanjutan
                            </p>
                        </div>
                    </div>
                </div>

                <div class="min-w-full relative">
                    <img src="{{ asset('images/joki.jpg') }}" alt="Joki" class="w-full h-[70vh] object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-5xl md:text-7xl font-bold mb-4 drop-shadow-2xl animate-fade-in">
                                Produk Organik
                            </h1>
                            <p class="text-xl md:text-2xl font-light drop-shadow-lg animate-fade-in-delay">
                                100% Alami & Sehat
                            </p>
                        </div>
                    </div>
                </div>

                <div class="min-w-full relative">
                    <img src="{{ asset('images/konsultasi.jpg') }}" alt="Konsultasi" class="w-full h-[70vh] object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40"></div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white px-4">
                            <h1 class="text-5xl md:text-7xl font-bold mb-4 drop-shadow-2xl animate-fade-in">
                                Pertanian Masa Depan
                            </h1>
                            <p class="text-xl md:text-2xl font-light drop-shadow-lg animate-fade-in-delay">
                                Teknologi & Tradisi Berpadu
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-3 rounded-full transition-all duration-300 backdrop-blur-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            
            <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-30 text-white p-3 rounded-full transition-all duration-300 backdrop-blur-sm">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="carousel-dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300" data-slide="0"></button>
                <button class="carousel-dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300" data-slide="1"></button>
                <button class="carousel-dot w-3 h-3 rounded-full bg-white bg-opacity-50 transition-all duration-300" data-slide="2"></button>
            </div>
        </div>
    </section>

    <section class="py-[4rem] px-[1.5rem] md:px-[4rem] bg-gradient-to-br from-green-50 to-emerald-50">
        <div class="max-w-5xl mx-auto text-center">
            <div class="mb-8">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mb-4">
                    Selamat Datang di <span class="text-green-600">Sadifa Farm</span>
                </h2>
                <div class="w-32 h-1 bg-gradient-to-r from-green-500 to-emerald-500 mx-auto rounded-full mb-6"></div>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-4xl mx-auto">
                    Tempat di mana alam bertemu dengan inovasi untuk menghadirkan produk pertanian organik berkualitas tinggi. 
                    Kami berkomitmen untuk menyediakan solusi pertanian yang sehat, berkelanjutan, dan ramah lingkungan 
                    untuk masa depan yang lebih hijau.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6 mt-12">
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-green-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-seedling text-2xl text-green-600"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-800 mb-2">100% Organik</h3>
                    <p class="text-gray-600">Tanpa pestisida berbahaya, hanya kebaikan alami dari tanah yang sehat</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-users text-2xl text-blue-600"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-800 mb-2">Komunitas</h3>
                    <p class="text-gray-600">Membangun hubungan kuat antara petani, konsumen, dan lingkungan</p>
                </div>
                
                <div class="bg-white p-6 rounded-2xl shadow-lg border border-yellow-100 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-2xl text-yellow-600"></i>
                    </div>
                    <h3 class="font-bold text-xl text-gray-800 mb-2">Berkelanjutan</h3>
                    <p class="text-gray-600">Melestarikan lingkungan untuk generasi mendatang dengan praktik ramah alam</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-white">
        <div class="max-w-6xl mx-auto text-center mb-[2rem]">
            <h2 class="text-[2rem] font-bold mb-[1rem]">Jasa yang Ditawarkan</h2>
            <p class="text-gray-700 max-w-3xl mx-auto">
                Kami menyediakan layanan berkualitas untuk mendukung kebutuhan pertanian organik Anda, mulai dari konsultasi, pelatihan, hingga pengelolaan kebun.
            </p>
        </div>

        <div class="max-w-6xl mx-auto grid gap-6 md:grid-cols-3">
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/konsultasi.jpg') }}" alt="Konsultasi" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Konsultasi Pertanian</h3>
                    <p class="text-gray-600">Dapatkan konsultasi ahli untuk metode pertanian organik yang efektif dan ramah lingkungan.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/pelatihan.jpg') }}" alt="Pelatihan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Pelatihan Petani</h3>
                    <p class="text-gray-600">Pelatihan praktis untuk meningkatkan keterampilan bercocok tanam organik secara langsung.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/joki.jpg') }}" alt="Pengelolaan Kebun Organik" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Pengelolaan Kebun Organik</h3>
                    <p class="text-gray-600">Tim ahli kami siap membantu mulai dari perencanaan, pemeliharaan, hingga panen.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-gray-50">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-[2rem] font-bold mb-[2rem] text-center">Review Pelanggan</h2>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($reviews as $review)
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col justify-between hover:shadow-lg transition-shadow duration-300">
                        <div>
                            <div class="flex items-center mb-2">
                                <div class="text-yellow-400">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $review->rating)
                                            <svg class="inline w-5 h-5 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><polygon points="10 1.5 12.9 7.3 19.3 7.3 14 11.7 16 17.5 10 14 4 17.5 6 11.7 0.7 7.3 7.1 7.3"/></svg>
                                        @else
                                            <svg class="inline w-5 h-5 text-gray-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><polygon points="10 1.5 12.9 7.3 19.3 7.3 14 11.7 16 17.5 10 14 4 17.5 6 11.7 0.7 7.3 7.1 7.3" stroke="none"/></svg>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <p class="text-gray-800 italic mb-4">"{{ $review->comment }}"</p>
                        </div>
                        <div class="text-right text-gray-600 font-semibold">
                            — {{ $review->name }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

@push('styles')
<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fade-in-delay {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in {
        animation: fade-in 1s ease-out;
    }
    
    .animate-fade-in-delay {
        animation: fade-in-delay 1s ease-out 0.5s both;
    }

    .carousel-dot.active {
        background-color: white !important;
        opacity: 1 !important;
    }
</style>
@endpush

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('carousel');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    const dots = document.querySelectorAll('.carousel-dot');
    
    let currentSlide = 0;
    const totalSlides = 3;
    
    function updateCarousel() {
        const translateX = -currentSlide * 100;
        carousel.style.transform = `translateX(${translateX}%)`;
        
        dots.forEach((dot, index) => {
            dot.classList.toggle('active', index === currentSlide);
        });
    }
    
    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateCarousel();
    }
    
    function prevSlide() {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateCarousel();
    }
    
    function goToSlide(slideIndex) {
        currentSlide = slideIndex;
        updateCarousel();
    }
    
    nextBtn.addEventListener('click', nextSlide);
    prevBtn.addEventListener('click', prevSlide);
    
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => goToSlide(index));
    });
    
    setInterval(nextSlide, 5000);
    
    updateCarousel();
});
</script>
@endpush