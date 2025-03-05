<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/books', [BookController::class, 'getAllBooks'])->name('books');
Route::post('/books', [BookController::class, 'createBook'])->name('books.create');

Route::get('/contact', function () {
    return "<h1>Contact</h1>";
})->name('contact');

