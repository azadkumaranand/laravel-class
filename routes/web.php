<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/services', function () {
    return view('pages.service');
})->name('services');
Route::get('/portfolio', function () {
    return view('pages.portfolio');
})->name('portfolio');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/team', function () {
    return view('pages.team');
})->name('team');

