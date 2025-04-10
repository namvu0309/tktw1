<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Admin\CategoryController;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    // Login Routes
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');

    // Register Routes
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    // Forgot Password Routes
    // Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])
    //     ->name('password.request');
    // Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])
    //     ->name('password.email');
});

// Logout Route (available for authenticated users)
Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout')
    ->middleware('auth');

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('dashboard')
    ->name('admin.')
    ->middleware(['auth', 'role:admin'])
    ->group(function () {
        // Dashboard
        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        // Products Management
        Route::resource('products', ProductController::class)->parameters([
            'products' => 'product:slug'
        ]);

        // Categories Management
        Route::resource('categories', CategoryController::class)->parameters([
            'categories' => 'category:slug'
        ]);
    });

/*
|--------------------------------------------------------------------------
| Client Routes
|--------------------------------------------------------------------------
*/
Route::name('')
    ->group(function () {
        // Public Routes
        Route::get('/', [ClientController::class, 'index'])->name('home');

        // Protected Routes
        Route::middleware(['auth', 'role:user'])->group(function () {
            Route::get('/san-pham/{slug}', [ClientController::class, 'showProduct'])
                ->name('product');
            Route::get('/danh-muc/{slug}', [ClientController::class, 'categoryProducts'])
                ->name('category');
            Route::get('/tim-kiem', [ClientController::class, 'search'])
                ->name('search');
            Route::get('/san-pham/{slug}', [ClientController::class, 'showProduct'])->name('detail');
            Route::get('/product_catalog/{slug}', [ClientController::class, 'categoryProducts'])->name('product.catalog');
        });
    });
