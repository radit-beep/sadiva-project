<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 9 review terbaru dari database
        $reviews = Review::latest()->take(9)->get();

        // Kirim data reviews ke view home.blade.php
        return view('home', compact('reviews'));
    }
}
