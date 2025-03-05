<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::prefix('products')->group(function () {
    
   
    Route::get('', [ProductController::class, 'index']);
   
    Route::get('/create', [ProductController::class, 'create']);
    Route::get('/search', [ProductController::class, 'search']);
    Route::get('{id}', [ProductController::class, 'show']);
    Route::get('{id}/edit', [ProductController::class, 'edit']);
    Route::delete('{id}/delete', [ProductController::class, 'destroy']);
});

