@extends('client.layouts.app')

@section('title', 'Quên mật khẩu')

@push('css')
<link rel="stylesheet" href="{{ asset('Common/assets/css/reset.css') }}" />
<link rel="stylesheet" href="{{ asset('Common/assets/css/fogot-password.css') }}" />
@endpush

@section('content')
<div class="wrapper-main">
    @if (session('layMk'))
        <script>
            alert('{{ session('layMk') }}');
        </script>
    @endif

    <section class="card-body">
        <div class="form-main">
            <article>
                <h3><img src="{{ asset('Common/assets/image/logo.png') }}" alt="Logo" /></h3>
                <p>Nhập email của bạn để nhận hướng dẫn khôi phục.</p>
            </article>

            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="item-form">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="Nhập email của bạn..." />
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="btn-submit">Gửi yêu cầu</button>
            </form>

            <div class="back-to-login">
                <p>Nhớ lại mật khẩu? <a href="{{ route('login') }}">Đăng nhập ngay</a></p>
            </div>
        </div>
    </section>
</div>
@endsection