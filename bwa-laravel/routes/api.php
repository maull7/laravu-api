<?php

use App\Http\Controllers\API\CheckoutController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/product', [ProductController::class, 'all']);
Route::post('/checkout', [CheckoutController::class, 'checkout']);
Route::get('/transaction/{id}', [TransactionController::class, 'get']);
