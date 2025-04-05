@extends('admin.layouts.app')

@section('title', 'Thêm mới danh mục')

@section('content')
    <main id="main-container">
        <!-- Hero -->

        <!-- END Hero -->

        <!-- Breadcrumb -->
        <div class="mt-2 bg-body-light border-bottom">
            <div class="content py-1 text-center">
                <nav class="breadcrumb bg-body-light py-2 mb-0">
                    <a class="breadcrumb-item" href="be_pages_ecom_dashboard.html">e-Commerce</a>
                    <a class="breadcrumb-item" href="be_pages_ecom_products.html">Products</a>
                    <span class="breadcrumb-item active">Dark Souls III</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->

            <!-- END Overview -->

            <!-- Update Product -->
            <h2 class="content-heading">Thêm mới danh mục</h2>
            <div class="row">
                <div class="col-md-12">
                    <form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Thông tin cơ bản</h3>
                                <div class="block-options">
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        <i class="fa fa-save opacity-50 me-1"></i> Lưu
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="mb-4">
                                    <label class="form-label" for="name">Tên danh mục <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name') }}" required
                                        placeholder="Nhập tên danh mục">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="description">Mô tả</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                        rows="4" placeholder="Nhập mô tả danh mục">{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-4">
                                    <label class="form-label" for="parent_id">Danh mục cha</label>
                                    <select class="form-select @error('parent_id') is-invalid @enderror" id="parent_id"
                                        name="parent_id">
                                        <option value="">Không có danh mục cha</option>
                                        @foreach ($parentCategories as $cat)
                                            <option value="{{ $cat->id }}"
                                                {{ old('parent_id') == $cat->id ? 'selected' : '' }}>
                                                {{ $cat->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('parent_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label fw-semibold" for="children">
                                        <i class="fa fa-sitemap me-1"></i>Danh mục con
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-primary">
                                            <i class="fa fa-list-ul text-white"></i>
                                        </span>
                                        <select class="form-select js-select2 @error('children') is-invalid @enderror"
                                                id="children"
                                                name="children[]"
                                                style="width: 100%;"
                                                data-placeholder="Chọn danh mục con"
                                                multiple>
                                            @foreach ($parentCategories as $cat)
                                                @if($cat->id != old('parent_id'))
                                                    <option value="{{ $cat->id }}"
                                                        class="text-primary"
                                                        {{ old('children') && in_array($cat->id, old('children')) ? 'selected' : '' }}>
                                                        {{ $cat->name }}
                                                    </option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('children')
                                        <div class="invalid-feedback animated fadeIn fs-sm">
                                            <i class="fa fa-exclamation-circle me-1"></i>
                                            {{ $message }}
                                        </div>
                                    @enderror
                                    <div class="fs-sm text-muted mt-1">
                                        <i class="fa fa-info-circle me-1"></i>
                                        Có thể chọn nhiều danh mục con
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="image">Hình ảnh</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label class="form-label d-block">Trạng thái</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                            value="1" {{ old('is_active', 1) ? 'checked' : '' }}>
                                        <label class="form-check-label" for="is_active">Hoạt động</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/codebase.app.min.js') }}"></script>

    <!-- jQuery (required for Select2 + Bootstrap Maxlength plugin) -->
    <script src="{{ asset('admin/assets/js/lib/jquery.min.js') }}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/ckeditor5-classic/build/ckeditor.js') }}"></script>
    <script src="{{ asset('admin/assets/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Page JS Code -->
    <script>
        // Helpers (Select2 + Bootstrap Maxlength plugins)
        Codebase.helpersOnLoad(['jq-select2', 'jq-maxlength']);

        // Initialize CKEditor 5
        ClassicEditor
            .create(document.querySelector('#js-ckeditor5-classic'), {
                licenseKey: 'GPL',
                initialData: "<p>Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game's gameplay design followed 'closely from Dark Souls II'. Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies' attacks and protect the player from suffering damage. Each weapon has two basic types of attacks, one being a standard attack, and the other being slightly more powerful that can be charged up, similar to FromSoftware's previous game, Bloodborne. In addition, attacks can be evaded through dodge-rolling. Bonfires, which serve as checkpoints, return from previous installments. Ashes, according to Miyazaki, play an important role in the game. Magic is featured in the game, with a returning magic system from Demon's Souls, now known as 'focus points' (FP). When performing spells, the players' focus points are consumed. There are two separate types of Estus Flasks in the game, which can be allotted to fit a players' particular play style. One of them refills hit points like previous games in the series, while another, newly introduced in Dark Souls III, refills focus points. Combat and movements were made faster and more fluid in Dark Souls III, with several players' movements, such as backstepping and swinging heavy weapons, able to be performed more rapidly, allowing players to deal more damage in a short period of time.</p>",
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(error => {
                console.error('There was a problem initializing the classic editor.', error);
            });
    </script>
@endpush
