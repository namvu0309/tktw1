<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
        public function handle(Request $request, Closure $next, string $role)
        {
            if (!Auth::check() || Auth::user()->role !== $role) {
                if ($role === 'admin') {
                    return redirect()->route('login')
                        ->with('error', 'Bạn không có quyền truy cập trang quản trị.');
                }
                return redirect()->route('home')
                    ->with('error', 'Bạn không có quyền truy cập trang này.');
            }

            return $next($request);
        }
}
