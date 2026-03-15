<?php

use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'home-page')->name('home');
Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');

Route::livewire('/testet', 'testet-index')->name('testet.index');
Route::livewire('/testet/{test}', 'testet-play')->name('testet.play');

Route::middleware([AdminMiddleware::class])->group(function () {
    Route::livewire('/admin', 'admin.admin-dashboard')->name('admin.dashboard');
    Route::livewire('/admin/categories', 'admin.category-manager')->name('admin.categories');
    Route::livewire('/admin/questions', 'admin.question-manager')->name('admin.questions');
    Route::livewire('/admin/answers', 'admin.answer-manager')->name('admin.answers');
    Route::livewire('/admin/tests', 'admin.test-manager')->name('admin.tests');
});

require __DIR__.'/settings.php';
