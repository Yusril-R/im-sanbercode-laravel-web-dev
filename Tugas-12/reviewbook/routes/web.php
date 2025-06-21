<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', [DashboardController::class, 'home']);

Route::get('/register', [FormController::class, 'register']);

Route::post('/welcome', [FormController::class, 'welcome']);

Route::get('/master', function() {
    return view('layouts.master');
});

Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/genre/create', [GenreController::class, 'create']);
    Route::post('/genre', [GenreController::class, 'store']);

    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);
});

Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

//books
Route::get('/book', [BooksController::class, 'index']);
Route::get('/book/create', [BooksController::class, 'create']);
Route::post('/book', [BooksController::class, 'store']);
Route::get('/book/{id}', [BooksController::class, 'show']);
Route::get('/book/{id}/edit', [BooksController::class, 'edit']);
Route::put('/book/{id}', [BooksController::class, 'update']);
Route::delete('/book/{id}', [BooksController::class, 'destroy']);

//auth
Route::get('/register', [AuthController::class, 'registerShow']);
Route::post('/register', [AuthController::class, 'userRegister']);
Route::get('/login', [AuthController::class, 'loginShow']);
Route::post('/login', [AuthController::class, 'loginUser'])->name('login');
Route::post('logout', [AuthController::class, 'logout']);

//profile
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/create', [ProfileController::class, 'createProfile'])->name('profile.create');
Route::post('/profile', [ProfileController::class, 'storeProfile']);
Route::get('/profile/{id}/edit', [ProfileController::class, 'edit']);
Route::put('/profile/{id}', [ProfileController::class, 'update']);

//comment
Route::get('/comment', [CommentController::class, 'create']);
Route::post('/comment', [CommentController::class, 'store'])->name('comments.store');
