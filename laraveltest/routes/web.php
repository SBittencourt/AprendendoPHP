<?php

use App\Http\Controllers\CowController;
use Illuminate\Support\Facades\Route;

// Rotas de fazendeiros
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index']);
Route::get('/add-user', [UserController::class, 'addUserForm']);
Route::post('/store-user', [UserController::class, 'storeUser']);
Route::get('/{id}', [UserController::class, 'edit']);
Route::put('/update/{id}', [UserController::class, 'update']);
Route::delete('/{id}', [UserController::class, 'destroy']);

// Rotas de vacas

Route::prefix('cows')->group(function () {
    Route::get('/visualizar', [CowController::class, 'index'])->name('cows.index');
    Route::get('/create', [CowController::class, 'create'])->name('cows.create');
    Route::post('/store', [CowController::class, 'store'])->name('cows.store');
    Route::get('/{cow}/edit', [CowController::class, 'edit'])->name('cows.edit');
    Route::put('/{cow}', [CowController::class, 'update'])->name('cows.update');
    Route::delete('/{cow}', [CowController::class, 'destroy'])->name('cows.destroy');
});