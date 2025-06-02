<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->take(9)->get();

        return view('home', compact('reviews'));
    }
}