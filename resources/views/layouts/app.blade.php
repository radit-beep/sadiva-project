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

    @vite('resources/js/app.js')

    @stack('scripts')
     <!-- Icon Whatsapp -->
    <div class="fixed bottom-12 right-6 z-50">
        <a href="https://wa.me/6281234567890" target="_blank" class="bg-white hover:bg-gray-100 rounded-full shadow-lg w-16 h-16 flex items-center justify-center text-4xl transition">
            <i class="fa-brands fa-whatsapp text-green-500"></i>
        </a>
    </div>

</body>
</html>
