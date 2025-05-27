<?php

namespace App\Filament\Resources\FilamentResource\Pages;
namespace App\Filament\Pages;

use App\Filament\Resources\FilamentResource;
use Filament\Pages\Page;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ResetPassword extends Page
{
    protected static ?string $slug = 'reset-password';
    protected static ?string $title = 'Reset Password';

    public $email;
    public $password;
    public $password_confirmation;
    public $token;

    public function mount($token = null)
    {
        $this->token = $token;
    }

    public function resetPassword()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
            'token' => 'required',
        ]);

        $status = Password::reset(
            ['email' => $this->email, 'password' => $this->password, 'password_confirmation' => $this->password_confirmation, 'token' => $this->token],
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password),
                ])->save();

                // Optionally, you can log the user in:
                // Auth::login($user);
            }
        );

        if ($status == Password::PASSWORD_RESET) {
            session()->flash('success', 'Password berhasil direset. Silakan login.');
            return redirect()->route('filament.auth.login');
        } else {
            throw ValidationException::withMessages([
                'email' => [trans($status)],
            ]);
        }
    }
}