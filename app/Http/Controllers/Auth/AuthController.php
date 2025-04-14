<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Hiển thị form đăng nhập
     */
    public function showLoginForm()
    {
        if (Auth::check()) {
            return $this->redirectBasedOnRole();
        }
        return view('auth.login');
    }

    /**
     * Xử lý đăng nhập
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();

            return $this->redirectBasedOnRole()
                ->with('success', 'Xin chào ' . Auth::user()->name . '! Đăng nhập thành công.');
        }

        return back()->withErrors([
            'email' => 'Email hoặc mật khẩu không chính xác.',
        ])->onlyInput('email');
    }

    /**
     * Hiển thị form đăng ký
     */
    public function showRegistrationForm()
    {
        if (Auth::check()) {
            return $this->redirectBasedOnRole();
        }
        return view('auth.register');
    }

    /**
     * Xử lý đăng ký tài khoản
     */
    public function register(RegisterRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role' => 'user' // Mặc định là user
        ]);

        Auth::login($user);

        return redirect()->route('home')
            ->with('success', 'Đăng ký tài khoản thành công!');
    }

    /**
     * Xử lý đăng xuất
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'Đăng xuất thành công');
    }

    /**
     * Hiển thị form quên mật khẩu
     */
    // public function showForgotPasswordForm()
    // {
    //     return view('auth.fogotPassword');
    // }

    // /**
    //  * Xử lý gửi email reset mật khẩu
    //  */
    // public function sendResetLinkEmail(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email|exists:users,email',
    //     ]);

    //     // Gửi email reset password
    //     // Code xử lý gửi email ở đây...

    //     return back()->with('success', 'Chúng tôi đã gửi email khôi phục mật khẩu cho bạn!');
    // }

    /**
     * Redirect user based on role
     */
    protected function redirectBasedOnRole()
    {
        if (Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('home');
    }
}
