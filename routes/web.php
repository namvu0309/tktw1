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
Route::prefix('dashboard')->name('admin.')->group(function() {
    // Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');

    // Users Management
    // Route::prefix('users')->name('users.')->group(function() {
    //     Route::get('/', [UserController::class, 'index'])->name('index');
    //     Route::get('/create', [UserController::class, 'create'])->name('create');
    //     Route::post('/store', [UserController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
    //     Route::put('/update/{id}', [UserController::class, 'update'])->name('update');
    //     Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('destroy');
    // });

    // // Categories Management
    // Route::prefix('categories')->name('categories.')->group(function() {
    //     Route::get('/', [CategoryController::class, 'index'])->name('index');
    //     Route::get('/create', [CategoryController::class, 'create'])->name('create');
    //     Route::post('/store', [CategoryController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('edit');
    //     Route::put('/update/{id}', [CategoryController::class, 'update'])->name('update');
    //     Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('destroy');
    // });

    // // Products Management
    // Route::prefix('products')->name('products.')->group(function() {
    //     Route::get('/', [ProductController::class, 'index'])->name('index');
    //     Route::get('/create', [ProductController::class, 'create'])->name('create');
    //     Route::post('/store', [ProductController::class, 'store'])->name('store');
    //     Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
    //     Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');
    //     Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
    // });

    // // Orders Management
    // Route::prefix('orders')->name('orders.')->group(function() {
    //     Route::get('/', [OrderController::class, 'index'])->name('index');
    //     Route::get('/show/{id}', [OrderController::class, 'show'])->name('show');
    //     Route::put('/update-status/{id}', [OrderController::class, 'updateStatus'])->name('update.status');
    //     Route::delete('/delete/{id}', [OrderController::class, 'destroy'])->name('destroy');
    // });
});
Route::prefix('/')->name('client.')->group(function () {
    // Dashboard
    Route::get('/', [ClientController::class, 'index'])->name('client');
});