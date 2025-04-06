<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Requests\LoginRequest;

// Admin Authentication Routes
Route::prefix('dashboard')->name('admin.')->group(function () {
    // Guest routes (accessible when not logged in)
    Route::middleware('guest')->group(function () {
        Route::get('/login', [AuthController::class, 'showLoginForm'])->name('auth.login');
        Route::post('/login', [AuthController::class, 'login'])
            ->name('auth.attempt')
            ->middleware('throttle:login');
    });

    // Protected Admin Routes (require authentication and admin role)
    Route::middleware(['auth', 'dashboard'])->group(function () {
        // Dashboard
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        // Logout
        Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

        // Product routes
        Route::resource('products', ProductController::class)->parameters([
            'categories' => 'category:slug'
        ]);

        // Categories routes with slug parameter
        Route::resource('categories', CategoryController::class)->parameters([
            'categories' => 'category:slug'
        ]);
    });
});

// Client Routes
Route::prefix('/')->name('client.')->group(function () {
    // Public client routes
    Route::get('/', [ClientController::class, 'index'])->name('client');

    // Protected client routes
    Route::middleware(['auth', 'client'])->group(function () {
        // Add client protected routes here
    });
});

// Redirect root to admin login
Route::get('/', function () {
    return redirect()->route('admin.auth.login');
});
