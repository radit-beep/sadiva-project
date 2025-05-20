@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Produk Kami</h1>
    
    @if ($products->count())
        <p class="text-black text-lg mb-6">
            Di halaman ini, anda dapat melihat katalog lengkap produk yang tersedia di Sadifa Farm.
        </p>
    @endif
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($products as $product)
            <a href="{{ route('product.detail', $product->id) }}" class="block bg-white border rounded-lg shadow p-4 hover:shadow-md transition">
                @if($product->image_url)
                <img src="{{ asset('storage/' . $product->image_url) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover mb-3 rounded">
                @endif
                <h2 class="text-lg font-semibold text-gray-800">{{ $product->name }}</h2>
                <p class="text-gray-600 text-sm">{{ Str::limit($product->description, 100) }}</p>
                <p class="text-green-600 font-bold mt-2">Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            </a>
        @empty
            <p class="text-gray-500 text-lg">Belum ada produk yang tersedia.</p>
        @endforelse
    </div>
@endsection
