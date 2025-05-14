@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Carousel (belum geser) -->
    <div>
        <img src="" alt="Foto Kegiatan" class="w-full h-[25rem] object-cover">
    </div>

    <!-- Moto Kebun Sadiva -->
    <section class="py-12 px-6 md:px-16 bg-white">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div>
                <h2 class="text-2xl font-bold mb-2">Moto Kebun Sadiva</h2>
                <p class="text-gray-700 leading-relaxed">
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

    <!-- Headline -->
    <section class="py-12 px-6 md:px-16 bg-gray-50">
        <div class="grid md:grid-cols-2 gap-8 items-center">
            <div class="rounded-lg overflow-hidden shadow-inner flex items-center justify-center">
                <img src="" alt="Gambar Headline" class="object-cover w-full h-[16rem]">
            </div>
            <div>
                <h2 class="text-2xl font-bold mb-2">Title • Headline</h2>
                <p class="text-gray-700 leading-relaxed">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce a ullamcorper sem. Integer eget purus
                    eu ligula malesuada fermentum. Quisque at velit eget justo posuere efficitur. Cras cursus, mi in
                    fermentum bibendum, sapien dolor porta justo, at dapibus magna risus et tortor. Duis congue sem nec
                    nibh imperdiet, in sagittis ligula lobortis. Donec pharetra vel lacus ac placerat.
                </p>
            </div>
        </div>
    </section>
@endsection
