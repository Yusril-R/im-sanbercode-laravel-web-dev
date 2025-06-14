<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'register']);

Route::post('/welcome', [FormController::class, 'welcome']);

Route::get('/master', function() {
    return view('layouts.master');
});

Route::get('/genre', [GenreController::class, 'index']);

// Create
Route::get('/genre/create', [GenreController::class, 'create']);

// Read
Route::post('/genre', [GenreController::class, 'store']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

// Update
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

//Delete
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);
