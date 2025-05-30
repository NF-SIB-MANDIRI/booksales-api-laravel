<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TransactionController;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// Route::apiResource('/books', BookController::class)->only(['index', 'show']);
// Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);
// Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);

Route::middleware('auth:api')->group(function () {
    Route::apiResource('/books', BookController::class)->only(['store', 'show', 'update']);
    Route::apiResource('/genres', GenreController::class)->only(['store', 'show', 'update']);
    Route::apiResource('/authors', AuthorController::class)->only(['store', 'show', 'update']);
    Route::apiResource('/transactions', TransactionController::class)->only(['store', 'show', 'update']);
    
    Route::middleware(['role:admin'])->group(function () {  
        Route::apiResource('/books', BookController::class)->only(['index', 'destroy']);
        Route::apiResource('/genres', GenreController::class)->only(['index', 'destroy']);
        Route::apiResource('/Authors', AuthorController::class)->only(['index', 'destroy']);
        Route::apiResource('/transactions', TransactionController::class)->only(['index','destroy']);
    });
});
