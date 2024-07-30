<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

// Rotas de eventos
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events', [EventController::class, 'all']);
Route::get('/events/{id}', [EventController::class, 'details'])->name('events.details');



Route::get('/add-event', [EventController::class, 'addeventForm']);
Route::post('/store-event', [EventController::class, 'storeevent']);
Route::put('/update/{id}', [EventController::class, 'update']);
Route::delete('/{id}', [EventController::class, 'destroy']);

// Rotas de photos

Route::prefix('photo')->group(function () {
    Route::get('/visualizar', [PhotoController::class, 'index'])->name('photo.index');
    Route::get('/create', [PhotoController::class, 'create'])->name('photo.create');
    Route::post('/store', [PhotoController::class, 'store'])->name('photo.store');
    Route::get('/{cow}/edit', [PhotoController::class, 'edit'])->name('photo.edit');
    Route::put('/{cow}', [PhotoController::class, 'update'])->name('photo.update');
    Route::delete('/{cow}', [PhotoController::class, 'destroy'])->name('photo.destroy');
});