<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $highlightBook = Book::orderBy('highlight_count', 'desc')->first();
        $latestReviews = Book::orderBy('updated_at', 'desc')->take(4)->get();
        $bookReviews = Book::where('is_series', true)->get();
        $latestBookReviews = Book::orderBy('created_at', 'desc')->take(4)->get();

        return view('home', compact('highlightBook', 'latestReviews', 'bookReviews', 'latestBookReviews'));
    }
}
