<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;



Route::get('/', [PagesController::class, 'front'])->name('pages.front');
Route::get('/index', [BlogController::class, 'index'])->name('blog.index');
Route::get('/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('/category/{tag}', [BlogController::class, 'byCategory'])->name('blog.byCategory');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



require __DIR__ . '/auth.php';
