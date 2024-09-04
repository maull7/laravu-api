<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\TransactionContorller;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Auth::routes(['register' => false]);
Route::get('/products/{id}/gallery', [ProductController::class, 'gallery'])->name('products.gallery');
Route::get('/transaction/{id}/set-status', [TransactionContorller::class, 'setStatus'])->name('transaction.status');
Route::resource('products', ProductController::class)->middleware('auth');
Route::resource('products-gallery', ProductGalleryController::class)->middleware('auth');
Route::resource('transaction', TransactionContorller::class);
