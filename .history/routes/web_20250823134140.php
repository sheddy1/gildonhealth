<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/careers', function () {
    return view('pages.careers');
});
