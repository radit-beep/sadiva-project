@extends('layouts.guest')

@section('title', 'Lupa Password')

@section('content')
<div class="max-w-md mx-auto mt-12 bg-gray-800 rounded-lg shadow-lg p-8">
    <div class="flex justify-center mb-6">
        <x-application-logo class="w-16 h-16 text-indigo-400" />
    </div>

    <h1 class="text-3xl font-semibold text-white text-center mb-4">Lupa Password</h1>

    <p class="text-gray-300 mb-6 text-center">
        Lupa kata sandi Anda? Tidak masalah. Masukkan alamat email Anda dan kami akan mengirimkan tautan reset ke email Anda.
    </p>

    @if (session('status'))
        <div class="mb-6 px-4 py-3 bg-green-600 text-white rounded text-center font-medium">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" novalidate>
        @csrf

        <div class="mb-6">
            <label for="email" class="block text-gray-300 font-medium mb-2">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                class="w-full px-4 py-3 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 outline-none transition" />
            @error('email')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-5 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-md text-white font-semibold transition">
                Kirim Link Reset
            </button>
        </div>
    </form>
</div>
@endsection
