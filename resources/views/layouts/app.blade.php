<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Portal')</title>
    
    @vite('resources/css/app.css')

    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        rel="stylesheet"
    />

    @stack('styles')
</head>
<body class="min-h-screen flex flex-col bg-white text-black">

    <x-header />

    <main class="flex-1 container mx-auto px-4 sm:px-6 lg:px-8 py-6">
        @yield('content')
    </main>

    <x-footer />

    <x-whatsapp-float />

    @vite('resources/js/app.js')

    @stack('scripts')
</body>
</html>