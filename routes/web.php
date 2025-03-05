<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return  "<h1>About</h1>";
})->name('about');

Route::get('/contact', function () {
    return "<h1>Contact</h1>";
})->name('contact');

