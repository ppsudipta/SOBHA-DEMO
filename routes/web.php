<?php

use Illuminate\Support\Facades\Route;

Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/config', 'config')->name('config');
Route::get('/', fn () => redirect('/dashboard'));
