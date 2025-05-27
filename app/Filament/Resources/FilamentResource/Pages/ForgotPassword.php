<?php

namespace App\Filament\Resources\FilamentResource\Pages;

use App\Filament\Resources\FilamentResource;
use Filament\Resources\Pages\Page;
namespace App\Filament\Pages;

use Filament\Pages\Page;
use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;

class ForgotPassword extends Page
{
    protected static ?string $slug = 'forgot-password';
    protected static ?string $title = 'Lupa Password';

    public $email;

    public function sendResetLink()
    {
        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status == Password::RESET_LINK_SENT) {
            $this->notify('success', 'Link reset password sudah dikirim ke email Anda.');
        } else {
            $this->notify('danger', 'Email tidak ditemukan.');
        }
    }

    protected function getViewData(): array
    {
        return [
            'email' => $this->email,
        ];
    }
}