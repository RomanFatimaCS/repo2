<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('pages.home');})->name('home');
Route::get('/aboutus', function () {return view('pages.aboutus');})->name('aboutus');
Route::get('/stats', function () {return view('components.stats');})->name('stats');
Route::view('/aboutus2', 'aboutus2')->name('aboutus2');
Route::view('/', 'page1')->name('page1');
Route::view('/page2', 'page2')->name('page2');
Route::view('/page3', 'page3')->name('page3');
Route::view('/page4', 'page4')->name('page4');
Route::view('/page5', 'page5')->name('page5');

// Dashboard
