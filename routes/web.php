<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/buy', function () {
    return view('buy');
})->name('buy');

Route::get('/sell', function () {
    return view('sell');
})->name('sell');

Route::get('/rent', function () {
    return view('rent');
})->name('rent');

Route::get('/writing', function () {
    return view('writing');
})->name('writing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
