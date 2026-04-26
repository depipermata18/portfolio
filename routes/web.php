<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/work', function () {
    return view('work');
})->name('work');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');