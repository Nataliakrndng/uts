<?php
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/book/{id}/series', [BookController::class, 'series'])->name('book.series');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('post');



