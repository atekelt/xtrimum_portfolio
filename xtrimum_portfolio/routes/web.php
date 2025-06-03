<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');;

Route::get('/about', function () {
    return view('about');
})->name('about');;

Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/cyber_blog', function () {
    return view('cyber_blog');
})->name('cyber_blog');;

Route::get('/our_work', function () {
    return view('our_work');
})->name('our_work');;

