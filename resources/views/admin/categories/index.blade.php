@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main id="main-container">
        <!-- Page Content -->
        <div class="content">
            <!-- Heading -->

            <!-- END Heading -->
            <div class="d-flex justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('admin.categories.create') }}">
                    <i class="fa fa-plus me-1"></i> Thêm danh mục
                </a>
            </div>
            <!-- Table -->
            <div class="block block-rounded">

                <div class="block-content">
                    <form method="GET">
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control" placeholder="Tìm kiếm danh mục.."
                                    value="{{ request('search') }}">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Tên danh mục</th>
                                <th>Ảnh Danh Mục</th>
                                <th>Slug</th>
                                <th>Mô tả</th>
                                <th>Trạng Thái</th>
                                <th>Danh mục con</th>
                                <th>Danh mục cha</th>
                                <th class="text-center" style="width: 100px;">Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <th class="text-center" scope="row">{{ $categories->firstItem() + $loop->iteration - 1 }}</th>
                                    <td>{{ $category->name }}</td>

                                    <td>
                                        @if ($category->image)
                                            <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                                style="width: 50px; height: auto;">
                                        @else
                                            <span class="text-muted">Không có ảnh</span>
                                        @endif
                                    </td>

                                    <td>{{ $category->slug }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if ($category->is_active)
                                            <span class="badge bg-success">Hoạt động</span>
                                        @else
                                            <span class="badge bg-danger">Không hoạt động</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->children->count() > 0)
                                            <ul class="list-unstyled mb-0">
                                                @foreach ($category->children as $child)
                                                    <li>{{ $child->name }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span class="text-muted">Không có danh mục con</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($category->parent)
                                            {{ $category->parent->name }}
                                        @else
                                            <span class="text-muted">Không có danh mục cha</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.categories.show', $category->slug) }}"
                                                class="btn btn-sm btn-secondary" title="Chi tiết">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.categories.edit', $category->slug) }}"
                                                class="btn btn-sm btn-primary" title="Sửa">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <form action="{{ route('admin.categories.destroy', $category->slug) }}"
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END Contextual Table -->
            <div class="d-flex justify-content-end my-4">
                {{ $categories->links('pagination::bootstrap-5') }}
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

    <!-- Thêm thư viện SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


@endpush
