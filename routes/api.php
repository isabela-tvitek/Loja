<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\ProductController;

Route::get('/loja', [StoreController::class, 'index']);
Route::post('/loja', [StoreController::class, 'store']);
Route::get('/loja/{id}', [StoreController::class, 'show']);
Route::put('/loja/{id}', [StoreController::class, 'update']);
Route::delete('/loja/{id}', [StoreController::class, 'destroy']);

Route::get('/produto', [ProductController::class, 'index']);
Route::post('/produto', [ProductController::class, 'store']);
Route::get('/produto/{id}', [ProductController::class, 'show']);
Route::put('/produto/{id}', [ProductController::class, 'update']);
Route::delete('/produto/{id}', [ProductController::class, 'destroy']);
