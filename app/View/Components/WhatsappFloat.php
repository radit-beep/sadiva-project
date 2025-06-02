<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WhatsappFloat extends Component
{
    public $number;
    public $message;
    public $position;

    public function __construct($number = '6281234567890', $message = 'Halo! Saya tertarik dengan produk Sadiva Farm.', $position = 'bottom-right')
    {
        $this->number = $number;
        $this->message = $message;
        $this->position = $position;
    }

    public function render(): View|Closure|string
    {
        return view('components.whatsapp-float');
    }
}