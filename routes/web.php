<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Simulate book list

Route::get('/book', function () {
    return view('book');
});

Route::get('/book1', function () {
    return view('book1');
});

Route::get('/book2', function () {
    return view('book2');
});

Route::get('/book3', function () {
    return view('book3');
});

require __DIR__.'/auth.php';
