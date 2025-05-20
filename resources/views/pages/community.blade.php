@extends('layouts.app')

@section('title', 'Komunitas')

@section('content')
    <h1 class="text-3xl font-bold mb-6">Komunitas Kami</h1>

    @if ($communities->count())
        <p class="text-gray-700 text-lg mb-4">Di halaman ini, Anda dapat melihat mitra kerja yang bekerja sama dengan Sadifa Farm.</p>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse ($communities as $community)
            <div class="bg-white border rounded-lg shadow p-4">
                @if($community->image_url)
                    <img src="{{ asset('storage/' . $community->image_url) }}" alt="{{ $community->title }}" class="w-full h-48 object-cover mb-3 rounded">
                @endif
                <h2 class="text-lg font-semibold text-gray-800">{{ $community->title }}</h2>
                <p class="text-gray-600 text-sm">{{ Str::limit($community->description, 100) }}</p>
            </div>
        @empty
            <p class="text-gray-500 text-lg">Belum ada Komunitas yang tersedia.</p>
        @endforelse
    </div>
@endsection
