<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/post',[PostController::class, 'index'])->name('posts.index');
Route::get('/post/add',[PostController::class, 'create'])->name('posts.create');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/post/add',[PostController::class, 'store'])->name('posts.store');
    Route::get('/post/edit',[PostController::class, 'edit'])->name('posts.edit');
    Route::post('/post/edit',[PostController::class, 'update'])->name('posts.update');
    Route::get('/post/delete',[PostController::class, 'destroy'])->name('posts.destroy');

});

require __DIR__.'/auth.php';
