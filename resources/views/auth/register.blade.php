@extends('client.layouts.app')

@section('title', 'Đăng ký tài khoản')

@push('css')
    <link rel="stylesheet" href="{{ asset('Common/assets/css/reset.css') }}" />
    <link rel="stylesheet" href="{{ asset('Common/assets/css/login-register.css') }}" />
@endpush

@section('content')
    <div class="wrapper-main">
        <section class="card-body register">
            <div class="form-main">
                <article>
                    <h3><img src="{{ asset('Common/assets/image/logo.png') }}" alt="Logo" /></h3>
                    <p>Chào mừng đến với website của chúng tôi 🎉</p>
                </article>

                <form action="{{ route('register.post') }}" method="post">
                    @csrf
                    <div class="item-form">
                        <label for="ho_ten">Họ tên</label>
                        <input type="text" name="ho_ten" id="ho_ten" placeholder="Họ tên của bạn..."
                            value="{{ old('ho_ten') }}" />
                        @error('ho_ten')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="item-form">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email của bạn..."
                            value="{{ old('email') }}" />
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="item-form">
                        <label for="mat_khau">Password</label>
                        <input type="password" name="mat_khau" id="mat_khau" placeholder="Mật khẩu của bạn..." />
                        @error('mat_khau')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-check">
                        <a href="{{ route('forgot-password') }}">Quên mật khẩu?</a>
                    </div>

                    <button type="submit" class="btn-submit">Đăng ký</button>

                    <div class="signin-orther-title">
                        <h4>Đăng nhập bằng</h4>
                        <div class="form-media">
                            <div class="item-media">
                                <img src="{{ asset('Common/assets/image/google.png') }}" alt="Google">
                                <p>Đăng nhập tài khoản Google</p>
                            </div>
                            <div class="item-media">
                                <img src="{{ asset('Common/assets/image/github.png') }}" alt="Github">
                                <p>Đăng nhập tài khoản Github</p>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="form-sub">
                <h2>Chào Mừng</h2>
                <p>Đăng nhập tài khoản ngay!!!</p>
                <div class="btn-register">
                    <a href="{{ route('login') }}">
                        <strong>Đăng nhập</strong>
                        <strong><i class="fa-solid fa-arrow-right"></i></strong>
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection
