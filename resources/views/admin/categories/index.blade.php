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
                    <table class="table table-hover table-vcenter">
                        <thead>
                            <tr>
                                <th class="text-center" style="width: 50px;">#</th>
                                <th>Tên danh mục</th>
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
                                    <th class="text-center" scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $category->name }}</td>
                                    <td>{{ $category->description }}</td>
                                    <td>
                                        @if($category->is_active)
                                            <span class="badge bg-success">Hoạt động</span>
                                        @else
                                            <span class="badge bg-danger">Không hoạt động</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->children->count() > 0)
                                            <ul class="list-unstyled mb-0">
                                                @foreach($category->children as $child)
                                                    <li>{{ $child->name }}</li>
                                                @endforeach
                                            </ul>
                                        @else
                                            <span class="text-muted">Không có danh mục con</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($category->parent)
                                            {{ $category->parent->name }}
                                        @else
                                            <span class="text-muted">Không có danh mục cha</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                                                class="btn btn-sm btn-secondary" data-bs-toggle="tooltip" title="Sửa">
                                                <i class="fa fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
                                                method="POST" class="d-inline delete-form" id="delete-form-{{ $category->id }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="button" class="btn btn-sm btn-secondary delete-btn"
                                                        data-id="{{ $category->id }}"
                                                        data-bs-toggle="tooltip" title="Xóa">
                                                    <i class="fa fa-times"></i>
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
                {{ $categories->links('pagination::bootstrap-4') }}
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Lắng nghe sự kiện click nút xóa
            document.querySelectorAll('.delete-btn').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const categoryId = this.getAttribute('data-id');

                    Swal.fire({
                        title: 'Bạn có chắc chắn?',
                        text: "Danh mục này sẽ bị xóa vĩnh viễn!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Có, xóa nó!',
                        cancelButtonText: 'Hủy'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // Submit form xóa
                            document.getElementById(`delete-form-${categoryId}`).submit();
                        }
                    });
                });
            });
        });

        // Hiển thị thông báo sau khi xóa
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Thành công!',
                text: "{{ session('success') }}",
            });
        @endif

        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Lỗi!',
                text: "{{ session('error') }}",
            });
        @endif
    </script>
@endpush
