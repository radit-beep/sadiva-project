@extends('layouts.app')

@section('title', $product->name)

@section('content')
    <div class="max-w-3xl mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $product->name }}</h1>

        @if ($product->image_url)
        <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-3 rounded">
        @endif

        <p class="text-gray-700 text-lg">{{ $product->description }}</p>
        <p class="text-2xl text-green-600 font-semibold mb-4">Rp{{ number_format($product->price, 0, ',', '.') }}</p>

        <div class="mt-4">
            <a href="{{ route('product') }}" class="text-gray-600 hover:underline">&larr; Kembali ke Daftar Produk</a>
        </div>
    </div>
@endsection
