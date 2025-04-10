<?php

use Symfony\Component\Routing\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Cache\RateLimiting\Limit;
use App\Http\Middleware\ClientMiddleware;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Routing\Middleware\ThrottleRequests;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias([
            'dashboard' => AdminMiddleware::class,
            'client' => ClientMiddleware::class,
            'role'=> RoleMiddleware::class,

        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Configure exception handling
    })
    ->booting(function () {
        // Define rate limiters
        RateLimiter::for('login', function ($request) {
            return Limit::perMinute(5)->by($request->ip());
        });
    })
    ->create();
