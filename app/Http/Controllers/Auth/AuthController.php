<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Client\RegisterRequest;
use App\Http\Controllers\Controller;

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
                ->with('success', 'Đăng nhập thành công');
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

        if ($request->hasFile('anh_dai_dien')) {
            $path = $request->file('anh_dai_dien')->store('avatars', 'public');
            $validated['anh_dai_dien'] = $path;
        }

        $validated['password'] = Hash::make($validated['mat_khau']);

        $user = User::create([
            'ho_ten' => $validated['ho_ten'],
            'email' => $validated['email'],
            'password' => $validated['password'],
            'dia_chi' => $validated['dia_chi'],
            'so_dien_thoai' => $validated['so_dien_thoai'],
            'ngay_sinh' => $validated['ngay_sinh'],
            'gioi_tinh' => $validated['gioi_tinh'],
            'anh_dai_dien' => $validated['anh_dai_dien'] ?? null,
            'role' => 'user'
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
