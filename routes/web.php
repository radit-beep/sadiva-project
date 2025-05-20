<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommunityController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

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