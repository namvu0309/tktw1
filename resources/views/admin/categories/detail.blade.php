@extends('admin.layouts.app')

@section('title', 'Chi tiết danh mục')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Heading -->
            <div class="d-flex justify-content-between mb-3">
                <h2 class="content-heading">Chi tiết danh mục: {{ $category->name }}</h2>
                <a class="btn btn-primary" href="{{ route('admin.categories.index') }}">
                    <i class="fa fa-arrow-left me-1 text-center"></i> Quay lại danh sách
                </a>
            </div>
            <!-- END Heading -->

            <!-- Category Details -->
            <div class="block block-rounded">
                <div class="block-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Thông tin cơ bản</h4>
                            <p><strong>Tên danh mục:</strong> {{ $category->name }}</p>
                            <p><strong>Mô tả:</strong> {{ $category->description }}</p>
                            <p><strong>Trạng thái:</strong>
                                @if ($category->is_active)
                                    <span class="badge bg-success">Hoạt động</span>
                                @else
                                    <span class="badge bg-danger">Không hoạt động</span>
                                @endif
                            </p>
                            <p><strong>Danh mục cha:</strong>
                                @if ($category->parent)
                                    {{ $category->parent->name }}
                                @else
                                    <span class="text-muted">Không có danh mục cha</span>
                                @endif
                            </p>
                            <p><strong>Danh mục con:</strong>

                            @if ($category->children->count() > 0)
                                <ul class="list-unstyled mb-0">
                                    @foreach ($category->children as $child)
                                        <li>{{ $child->name }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <span class="text-muted">Không có danh mục con</span>
                            @endif
                            </p>
                        </div>
                        <div class="col-md-4 mb-1 text-center">
                            <h4>Hình ảnh</h4>
                            @if ($category->image)
                                <div class="card ">
                                    <img src="{{ asset($category->image) }}" alt="{{ $category->name }}" class="card-img-top" style="max-width: 300px; height: auto;">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $category->name }}</h5>
                                    </div>
                                </div>
                            @else
                                <span class="text-muted">Không có hình ảnh</span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <!-- END Category Details -->
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
