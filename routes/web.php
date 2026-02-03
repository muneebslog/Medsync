<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::livewire('/frontdesk', 'pages::frontdesk.reception')->name('frontdesk');

require __DIR__ . '/settings.php';
