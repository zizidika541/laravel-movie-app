<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/product', function () {
    return view('product');
});

Route::get('/movies', function () {
    return view('movies.index');
});

Route::get('/create', function () {
    return view('movies.create');
});

Route::get('/genres', function () {
    return view('genres.index');
});

Route::get('/reviews', function () {
    return view('reviews.index');
});