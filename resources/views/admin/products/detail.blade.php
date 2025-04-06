@extends('admin.layouts.app')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Heading -->
            <div class="d-flex justify-content-between mb-3">
                <h2 class="content-heading">Chi tiết sản phẩm: {{ $product->name }}</h2>
                <div class="block-options">
                    <a href="{{ route('admin.products.create', $product->slug) }}" class="btn btn-primary">
                        <i class="fa fa-pencil me-1"></i> Sửa
                    </a>
                    <a href="{{ route('admin.products.index') }}" class="btn btn-alt-secondary">
                        <i class="fa fa-arrow-left me-1"></i> Quay lại
                    </a>
                </div>
            </div>
            <!-- END Heading -->

            <!-- Product Details -->
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Thông tin cơ bản</h4>
                            <table class="table table-bordered">
                                <tr>
                                    <th style="width: 200px;">Tên sản phẩm</th>
                                    <td>{{ $product->name }}</td>
                                </tr>
                                <tr>
                                    <th>Mô tả</th>
                                    <td>{{ $product->description ?: 'Không có mô tả' }}</td>
                                </tr>
                                <tr>
                                    <th>Danh mục</th>
                                    <td>{{ $product->category->name }}</td>
                                </tr>
                                <tr>
                                    <th>Giá</th>
                                    <td>{{ $product->formatted_price }}</td>
                                </tr>
                                <tr>
                                    <th>Số lượng</th>
                                    <td>{{ $product->quantity }}</td>
                                </tr>
                                <tr>
                                    <th>Trạng thái</th>
                                    <td>{!! $product->status_badge !!}</td>
                                </tr>
                                <tr>
                                    <th>Ngày tạo</th>
                                    <td>{{ $product->created_at }}</td>
                                </tr>
                                <tr>
                                    <th>Cập nhật lần cuối</th>
                                    <td>{{ $product->updated_at }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4 mb-1 text-center">
                            <h4>Hình ảnh</h4>
                            @if ($product->images->count() > 0)
                                <div class="card">
                                    <img src="{{ asset($product->primaryImage->image_path) }}" alt="{{ $product->name }}"
                                        class="card-img-top" style="max-width: 300px; height: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->name }}</h5>
                                    </div>
                                </div>
                            @else
                                <span class="text-muted">Không có hình ảnh</span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <!-- END Product Details -->
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/chart.js/chart.umd.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('admin/assets/js/pages/be_pages_dashboard.min.js') }}"></script>

    <!-- Thêm thư viện SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // Hiển thị thông báo sau khi xóa
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: "{{ session('success') }}",
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: "{{ session('error') }}",
            });
        @endif
    </script>
@endpush
