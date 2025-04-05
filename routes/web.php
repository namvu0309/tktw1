<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Client\ClientController;

Route::get('/', function () {
    return view('welcome');
});

// Admin Routes

Route::prefix('dashboard')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    // product routes
    Route::resource('products', ProductController::class)->parameters([
        'products' => 'product:slug'
    ]);


    // Categories slugs routes
    Route::resource('categories', CategoryController::class)->parameters([
        'categories' => 'category:slug'
    ]);
});
Route::prefix('/')->name('client.')->group(function () {
    // Dashboard
    Route::get('/', [ClientController::class, 'index'])->name('client');
});
