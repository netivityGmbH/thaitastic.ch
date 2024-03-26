<?php

use Livewire\Volt\Volt;

Volt::route('/', 'pages.welcome-page')->name('welcome');

/*
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
*/
