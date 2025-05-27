<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->@extends('layouts.guest')

@section('title', 'Login Admin')

@section('content')
<div class="max-w-md mx-auto mt-12 bg-gray-800 rounded-lg shadow-lg p-8">
    <div class="flex justify-center mb-6">
        <x-application-logo class="w-16 h-16 text-indigo-400" />
    </div>

    <h1 class="text-3xl font-semibold text-white text-center mb-6">Login Admin</h1>

    @if(session('status'))
        <div class="mb-6 px-4 py-3 bg-green-600 text-white rounded text-center font-medium">
            {{ session('status') }}
        </div>
    @endif

    @if($errors->any())
        <div class="mb-6 px-4 py-3 bg-red-600 text-white rounded text-center font-medium">
            <ul class="list-disc list-inside space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('filament.admin.auth.login') }}" novalidate>
        @csrf

        <div class="mb-6">
            <label for="email" class="block text-gray-300 font-medium mb-2">Email</label>
            <input type="email" name="email" id="email" required autofocus
                class="w-full px-4 py-3 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 outline-none transition" />
        </div>

        <div class="mb-6">
            <label for="password" class="block text-gray-300 font-medium mb-2">Password</label>
            <input type="password" name="password" id="password" required
                class="w-full px-4 py-3 rounded-md bg-gray-700 text-white border border-gray-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500 outline-none transition" />
        </div>

        <div class="flex justify-between items-center mb-6">
            <a href="{{ route('password.request') }}" class="text-indigo-400 hover:underline text-sm">
                Lupa Password?
            </a>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-5 py-3 bg-indigo-600 hover:bg-indigo-700 rounded-md text-white font-semibold transition">
                Masuk
            </button>
        </div>
    </form>
</div>
@endsection

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
