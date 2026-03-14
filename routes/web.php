<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'home-page')->name('home');
Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

require __DIR__.'/settings.php';
