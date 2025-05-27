@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Banner Gambar Lebar Penuh -->
    <section>
        <img src="{{ asset('images/sadifa farm.jpg') }}" alt="Banner Image" class="w-full h-auto object-cover">
    </section>

    <!-- Jasa yang Ditawarkan -->
    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-white">
        <div class="max-w-6xl mx-auto text-center mb-[2rem]">
            <h2 class="text-[2rem] font-bold mb-[1rem]">Jasa yang Ditawarkan</h2>
            <p class="text-gray-700 max-w-3xl mx-auto">
                Kami menyediakan layanan berkualitas untuk mendukung kebutuhan pertanian organik Anda, mulai dari konsultasi, pelatihan, hingga pengelolaan kebun.
            </p>
        </div>

        <div class="max-w-6xl mx-auto grid gap-6 md:grid-cols-3">
            <!-- Card 1 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/konsultasi.jpg') }}" alt="Konsultasi" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Konsultasi Pertanian</h3>
                    <p class="text-gray-600">Dapatkan konsultasi ahli untuk metode pertanian organik yang efektif dan ramah lingkungan.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/pelatihan.jpg') }}" alt="Pelatihan" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Pelatihan Petani</h3>
                    <p class="text-gray-600">Pelatihan praktis untuk meningkatkan keterampilan bercocok tanam organik secara langsung.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
                <img src="{{ asset('images/joki.jpg') }}" alt="Pengelolaan Kebun Organik" class="w-full h-48 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Pengelolaan Kebun Organik</h3>
                    <p class="text-gray-600">Tim ahli kami siap membantu mulai dari perencanaan, pemeliharaan, hingga panen.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Review dari Pelanggan -->
    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-white">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-[2rem] font-bold mb-[2rem] text-center">Review Pelanggan</h2>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($reviews as $review)
                    <div class="bg-white p-6 rounded-lg shadow-md flex flex-col justify-between">
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
