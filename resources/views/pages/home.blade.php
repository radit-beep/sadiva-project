@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Carousel (belum geser) -->
    <div>
        <img src="" alt="Foto Kegiatan" class="w-full h-[25rem] object-cover">
    </div>

    <!-- Moto Kebun Sadiva -->
    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-white">
        <div class="grid md:grid-cols-2 gap-[2rem] items-center">
            <div>
                <h2 class="text-[2rem] font-bold mb-[0.5rem]">Moto Kebun Sadiva</h2>
                <p class="text-gray-700 leading-relaxed text-[1rem]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ullamcorper sem. Integer eget purus
                    eu ligula malesuada fermentum. Quisque at velit eget justo posuere efficitur. Cras cursus, mi in
                    fermentum bibendum, sapien dolor porta justo, at dapibus magna risus et tortor. Duis congue sem nec
                    nibh imperdiet, in sagittis ligula lobortis. Donec pharetra vel lacus ac placerat.
                </p>
            </div>
            <div class="rounded-lg overflow-hidden shadow-inner flex items-center justify-center">
                <img src="" alt="Gambar Moto" class="object-cover w-full h-[16rem]">
            </div>
        </div>
    </section>

    <!-- Visi Misi Sadiva -->
    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-white">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-[2rem] font-bold mb-[1rem]">Visi & Misi Kebun Sadiva</h2>

            <div class="mb-[2rem]">
                <h3 class="text-[1.25rem] font-semibold mb-[0.5rem]">Visi</h3>
                <p class="text-gray-700 leading-relaxed text-[1rem]">
                    Lorem ipsum
                </p>
            </div>

            <div>
                <h3 class="text-[1.25rem] font-semibold mb-[0.5rem]">Misi</h3>
                <ul class="text-gray-700 leading-relaxed text-[1rem] list-disc list-inside text-left inline-block">
                    <li>c</li>
                    <li>b</li>
                    <li>a</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Headline -->
    <section class="py-[3rem] px-[1.5rem] md:px-[4rem] bg-white">
        <div class="grid md:grid-cols-2 gap-[2rem] items-center">
            <div class="rounded-lg overflow-hidden shadow-inner flex items-center justify-center">
                <img src="https://via.placeholder.com/600x16rem?text=Gambar+Headline" alt="Gambar Headline" class="object-cover w-full h-[16rem]">
            </div>
            <div>
                <h2 class="text-[2rem] font-bold mb-[0.5rem]">Title • Headline</h2>
                <p class="text-gray-700 leading-relaxed text-[1rem]">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ullamcorper sem. Integer eget purus
                    eu ligula malesuada fermentum. Quisque at velit eget justo posuere efficitur. Cras cursus, mi in
                    fermentum bibendum, sapien dolor porta justo, at dapibus magna risus et tortor. Duis congue sem nec
                    nibh imperdiet, in sagittis ligula lobortis. Donec pharetra vel lacus ac placerat.
                </p>
            </div>
        </div>
    </section>
@endsection
