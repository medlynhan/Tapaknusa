<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    public function getAllReviews()
    {
        $reviews = Review::all(); // Mengambil semua data dari model Review

        return view('review', compact('reviews')); // Mengirim data ke view review.blade.php
    }
}
