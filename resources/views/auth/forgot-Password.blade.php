@extends('client.layouts.app')

@section('title', 'Quên mật khẩu')

@push('css')
<style>
.wrapper-main {
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #f8f9fa;
}

.card-body {
    width: 100%;
    max-width: 450px;
    margin: 0 auto;
    padding: 2rem;
}

.form-main {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}

.form-main article {
    text-align: center;
    margin-bottom: 2rem;
}

.form-main article img {
    max-width: 150px;
    margin-bottom: 1rem;
}

.form-main article p {
    color: #6c757d;
    font-size: 0.95rem;
}

.item-form {
    margin-bottom: 1.5rem;
}

.item-form label {
    display: block;
    margin-bottom: 0.5rem;
    font-weight: 500;
    color: #212529;
}

.item-form input {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
    font-size: 1rem;
}

.item-form input:focus {
    outline: none;
    border-color: #80bdff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.text-danger {
    color: #dc3545;
    font-size: 0.875rem;
    margin-top: 0.25rem;
}

.btn-submit {
    width: 100%;
    padding: 0.75rem;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 1rem;
    font-weight: 500;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btn-submit:hover {
    background-color: #0056b3;
}

.back-to-login {
    text-align: center;
    margin-top: 1.5rem;
}

.back-to-login a {
    color: #007bff;
    text-decoration: none;
}

.back-to-login a:hover {
    text-decoration: underline;
}
</style>
@endpush

@section('content')
<div class="wrapper-main">
    @if (session('layMk'))
        <div class="alert alert-success" role="alert">
            {{ session('layMk') }}
        </div>
    @endif

    <section class="card-body">
        <div class="form-main">
            <article>
                <h3>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                </h3>
                <p>Nhập email của bạn để nhận hướng dẫn khôi phục.</p>
            </article>

            <form action="{{ route('password.email') }}" method="post">
                @csrf
                <div class="item-form">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Nhập email của bạn..."
                        value="{{ old('email') }}"
                        required
                    />
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hiển thị alert message
    @if(session('layMk'))
        const message = '{{ session('layMk') }}';
        const alertDiv = document.createElement('div');
        alertDiv.className = 'alert alert-success';
        alertDiv.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 15px;
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            z-index: 1000;
        `;
        alertDiv.textContent = message;
        document.body.appendChild(alertDiv);

        // Tự động ẩn alert sau 3 giây
        setTimeout(() => {
            alertDiv.style.opacity = '0';
            alertDiv.style.transition = 'opacity 0.5s';
            setTimeout(() => alertDiv.remove(), 500);
        }, 3000);
    @endif
});
</script>
@endsection