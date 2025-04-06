@extends('admin.layouts.app')

@section('title', 'Quản lý sản phẩm')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('{{ asset('admin/assets/media/photos/photo26@2x.jpg') }}');">

            <div class="bg-black-75">
                <div class="content content-top content-full text-center">
                    <div class="py-3">
                        <h1 class="h2 fw-bold text-white mb-2">Products</h1>
                        <h2 class="h4 fw-normal text-white-75 mb-0">You currently have 4,360 in the catalog!</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="bg-body-light border-bottom">
            <div class="content py-1 text-center">
                <nav class="breadcrumb bg-body-light py-2 mb-0">
                    <a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">e-Commerce</a>
                    <span class="breadcrumb-item active">Products</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <div class="block block-rounded">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Danh sách sản phẩm</h3>
                    <div class="block-options">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">
                            <i class="fa fa-plus me-1"></i> Thêm sản phẩm
                        </a>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row mb-4">
                        <div class="col-md-12">
                            <form action="{{ route('admin.products.index') }}" method="GET" class="d-flex gap-2">
                                <input type="text" class="form-control " name="search" placeholder="Tìm kiếm sản phẩm..."
                                    value="{{ request('search') }}">
                                <select class="form-select" name="category_id" style="width: 200px;">
                                    <option value="">Tất cả danh mục</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ request('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                <select class="form-select" name="status" style="width: 150px;">
                                    <option value="">Tất cả trạng thái</option>
                                    <option value="in_stock" {{ request('status') == 'in_stock' ? 'selected' : '' }}>
                                        Còn hàng
                                    </option>
                                    <option value="out_of_stock"
                                        {{ request('status') == 'out_of_stock' ? 'selected' : '' }}>
                                        Hết hàng
                                    </option>
                                </select>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search me-1 "></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-vcenter">
                            <thead>
                                <tr>
                                    <th style="width: 80px;">ID</th>
                                    <th>Tên sản phẩm</th>
                                    <th style="width: 100px;">Hình ảnh</th>
                                    <th>Danh mục</th>
                                    <th style="width: 120px;">Giá</th>
                                    <th style="width: 100px;">Số lượng</th>
                                    <th style="width: 120px;">Trạng thái</th>
                                    <th style="width: 150px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($products as $product)
                                    <tr>
                                        <th class="text-center" scope="row">
                                            {{ $products->firstItem() + $loop->iteration - 1 }}</th>
                                        <td>{{ $product->name }}</td>
                                        <td>
                                            @if ($product->primaryImage)
                                                <img src="{{ asset($product->primaryImage->image_path) }}"
                                                    alt="{{ $product->name }}" class="img-thumbnail"
                                                    style="max-width: 60px;">
                                            @else
                                                <span class="text-muted">Không có ảnh</span>
                                            @endif
                                        </td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->formatted_price }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>{!! $product->status_badge !!}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ route('admin.products.show', $product->slug) }}"
                                                    class="btn btn-sm btn-secondary" title="Chi tiết">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                                <a href="{{ route('admin.products.edit', $product->slug) }}"
                                                    class="btn btn-sm btn-primary" title="Sửa">
                                                    <i class="fa fa-pencil"></i>
                                                </a>
                                                <form action="{{ route('admin.products.destroy', $product->slug) }}"
                                                    method="POST" class="d-inline"
                                                    onsubmit="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" title="Xóa">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">Không có sản phẩm nào</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-end mt-3">
                        {{ $products->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/chart.js/chart.umd.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('admin/assets/js/pages/be_pages_dashboard.min.js') }}"></script>
    <script>
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
