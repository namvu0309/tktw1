@extends('client.layouts.app')

@section('title', 'Đăng ký tài khoản')

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
    max-width: 600px;
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

.item-form input, .item-form select {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ced4da;
    border-radius: 4px;
    font-size: 1rem;
}

.item-form input:focus, .item-form select:focus {
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

.gender-group {
    display: flex;
    gap: 1rem;
}

.gender-group label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

.avatar-preview {
    margin-top: 1rem;
    max-width: 150px;
    border-radius: 4px;
}

.terms-checkbox {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    margin-bottom: 1rem;
}

.terms-checkbox input[type="checkbox"] {
    width: auto;
}
</style>
@endpush

@section('content')
<div class="wrapper-main">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <section class="card-body">
        <div class="form-main">
            <article>
                <h3>
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" />
                </h3>
                <p>Đăng ký tài khoản mới</p>
            </article>

            <form method="POST" action="{{ route('register.post') }}">
                @csrf
                
                <div class="form-group">
                    <label for="name">Họ tên</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" 
                           id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Mật khẩu</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           id="password" name="password" required>
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Xác nhận mật khẩu</label>
                    <input type="password" class="form-control" 
                           id="password_confirmation" name="password_confirmation" required>
                </div>

                <button type="submit" class="btn btn-primary">Đăng ký</button>
            </form>

            <div class="back-to-login">
                <p>Đã có tài khoản? <a href="{{ route('login') }}">Đăng nhập ngay</a></p>
            </div>
        </div>
    </section>
</div>

<!-- Modal Điều khoản -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Điều khoản sử dụng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Nội dung điều khoản -->
                <h6>1. Quy định chung</h6>
                <p>Nội dung điều khoản của bạn...</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Preview ảnh đại diện
    const avatarInput = document.getElementById('anh_dai_dien');
    const avatarPreview = document.getElementById('avatar-preview');

    avatarInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                avatarPreview.src = e.target.result;
                avatarPreview.style.display = 'block';
            }
            reader.readAsDataURL(file);
        }
    });

    // Hiển thị alert message
    @if(session('success'))
        const message = '{{ session('success') }}';
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

        setTimeout(() => {
            alertDiv.style.opacity = '0';
            alertDiv.style.transition = 'opacity 0.5s';
            setTimeout(() => alertDiv.remove(), 500);
        }, 3000);
    @endif
});
</script>
@endsection