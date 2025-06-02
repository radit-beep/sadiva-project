@php
    $positionClasses = match($position) {
        'bottom-left' => 'bottom-12 left-6',
        'bottom-right' => 'bottom-12 right-6',
        'top-right' => 'top-12 right-6',
        'top-left' => 'top-12 left-6',
        default => 'bottom-12 right-6'
    };
@endphp

<div class="fixed {{ $positionClasses }} z-50">
    <a href="https://wa.me/{{ $number }}?text={{ urlencode($message) }}" 
       target="_blank" 
       class="bg-white hover:bg-gray-100 rounded-full shadow-lg w-16 h-16 flex items-center justify-center text-4xl transition-all duration-300 hover:scale-110 animate-pulse hover:animate-none group"
       title="Chat via WhatsApp">
        <i class="fa-brands fa-whatsapp text-green-500 group-hover:text-green-600"></i>
    </a>
</div>