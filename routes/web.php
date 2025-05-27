<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommunityController;
use App\Models\Product;
use Livewire\Livewire;
use App\Filament\Pages\ResetPassword;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

Route::view('/', 'pages.home')->name('home');
Route::view('/jasa', 'pages.jasa')->name('jasa');

Route::get('/community', [CommunityController::class, 'index'])->name('community');

Route::get('/product', function () {
    $products = Product::latest()->get();
    return view('pages.product', compact('products'));
})->name('product');

Route::get('/product/{id}', function ($id) {
    $product = Product::findOrFail($id);
    return view('pages.product-detail', compact('product'));
})->name('product.detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';