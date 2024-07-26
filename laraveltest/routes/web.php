<?php

//  usuário/fazendeiros

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index']);
Route::get('/add-user', [UserController::class, 'addUserForm']); // Nova rota
Route::post('/store-user', [UserController::class, 'storeUser']); // Nova rota
Route::get('/{id}', [UserController::class, 'edit']);
Route::put('/update/{id}', [UserController::class, 'update']);
Route::delete('/{id}', [UserController::class, 'destroy']);
