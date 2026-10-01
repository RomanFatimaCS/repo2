<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/aboutus', function () {return view('pages.aboutus');})->name('aboutus');
Route::get('/stats', function () {return view('components.stats');})->name('stats');
Route::view('/aboutus2', 'aboutus2')->name('aboutus2');