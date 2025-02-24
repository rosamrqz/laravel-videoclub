<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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

// Route::get('/', [HomeController::class, 'home']);

Route::get('/login', function() {
    return "Login usuario";
});

Route::get('/logout', function() {
    return "Logout usuario";
});

Route::get('/catalog', [CatalogController::class, 'index']);

Route::get('/catalog/show/{id}', [CatalogController::class, 'show']);

Route::get('/catalog/create', [CatalogController::class, 'create']);

Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit']);

require __DIR__.'/auth.php';
