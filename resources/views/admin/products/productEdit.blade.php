@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo8@2x.jpg');">
            <div class="bg-black-75">
                <div class="content content-top content-full text-center">
                    <div class="py-3">
                        <h1 class="h2 fw-bold text-white mb-2">Dark Souls III</h1>
                        <h2 class="h4 fw-normal text-white-75 mb-0">In <a class="text-primary-light link-fx"
                                href="be_pages_ecom_products.html">video game</a> category.</h2>
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
                    <a class="breadcrumb-item" href="be_pages_ecom_products.html">Products</a>
                    <span class="breadcrumb-item active">Dark Souls III</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <!-- Overview -->
            <h2 class="content-heading">Overview</h2>
            <div class="row">
                <!-- In Orders -->
                <div class="col-md-6 col-xl-4">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-shopping-basket fa-2x text-info-light"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-info">39</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">In Orders</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END In Orders -->

                <!-- Stock -->
                <div class="col-md-6 col-xl-4">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-check fa-2x text-success-light"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-success">85</div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Stock</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Stock -->

                <!-- Delete Product -->
                <div class="col-xl-4">
                    <a class="block block-rounded block-link-shadow" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-archive fa-2x text-danger-light"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-danger">
                                    <i class="fa fa-times"></i>
                                </div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">Delete Product</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Delete Product -->
            </div>
            <!-- END Overview -->

            <!-- Update Product -->
            <h2 class="content-heading">Update Product</h2>
            <div class="row">
                <!-- Basic Info -->
                <div class="col-md-7">
                    <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Basic Info</h3>
                                <div class="block-options">
                                    <button type="submit" class="btn btn-sm btn-alt-primary">
                                        <i class="fa fa-save opacity-50 me-1"></i> Save
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="mb-4">
                                    <label class="form-label">Product ID</label>
                                    <div class="form-control-plaintext">2599</div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-name">Name</label>
                                    <input type="text" class="form-control" id="ecom-product-name"
                                        name="ecom-product-name" placeholder="Product Name" value="Dark Souls III">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-category">Category</label>
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <select class="js-select2 form-control" id="ecom-product-category"
                                        name="ecom-product-category" style="width: 100%;" data-placeholder="Choose one..">
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1" selected>Video Games</option>
                                        <option value="2">Electronics</option>
                                        <option value="3">Mobile Phones</option>
                                        <option value="4">House</option>
                                        <option value="5">Hobby</option>
                                        <option value="6">Auto - Moto</option>
                                        <option value="7">Kids</option>
                                        <option value="8">Health</option>
                                        <option value="9">Fashion</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <!-- CKEditor 5 Classic (js-ckeditor5-classic id is initialized at the bottom of the page) -->
                                    <!-- For more info and examples you can check out http://ckeditor.com -->
                                    <label class="form-label">Description</label>
                                    <textarea id="js-ckeditor5-classic" name="ecom-product-description"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-description-short">Short
                                        Description</label>
                                    <textarea class="form-control" id="ecom-product-description-short" name="ecom-product-description-short"
                                        placeholder="Description visible on preview.." rows="6">Dark Souls III is an action role-playing video game developed by FromSoftware and published by Bandai Namco Entertainment for PlayStation 4, Xbox One, and Microsoft Windows.</textarea>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-stock">Stock</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-fw fa-archive"></i>
                                                </span>
                                                <input type="text" class="form-control" id="ecom-product-stock"
                                                    name="ecom-product-stock" placeholder="0" value="85">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-price">Price</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="input-group">
                                                <span class="input-group-text">
                                                    <i class="fa fa-fw fa-dollar-sign"></i>
                                                </span>
                                                <input type="text" class="form-control" id="ecom-product-price"
                                                    name="ecom-product-price" placeholder="Price in USD.."
                                                    value="69,00">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- END Basic Info -->

                <!-- More Options -->
                <div class="col-md-5">
                    <!-- Status -->
                    <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Status</h3>
                                <div class="block-options">
                                    <button type="submit" class="btn btn-sm btn-alt-primary">
                                        <i class="fa fa-save opacity-50 me-1"></i> Save
                                    </button>
                                </div>
                            </div>
                            <div class="block-content block-content-full">
                                <div class="mb-4">
                                    <label class="form-label d-block">Condition</label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="ecom-product-condition-new"
                                            name="ecom-product-condition" checked>
                                        <label class="form-check-label" for="ecom-product-condition-new">New</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" id="ecom-product-condition-old"
                                            name="ecom-product-condition">
                                        <label class="form-check-label" for="ecom-product-condition-old">Old</label>
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label d-block">Published</label>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="ecom-product-published" name="ecom-product-published" checked>
                                        <label class="form-check-label" for="ecom-product-published"></label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Status -->

                    <!-- Meta Data -->
                    <form action="be_pages_ecom_product_edit.html" method="POST" onsubmit="return false;">
                        <div class="block block-rounded">
                            <div class="block-header block-header-default">
                                <h3 class="block-title">Meta Data</h3>
                                <div class="block-options">
                                    <button type="submit" class="btn btn-sm btn-alt-primary">
                                        <i class="fa fa-save opacity-50 me-1"></i> Save
                                    </button>
                                </div>
                            </div>
                            <div class="block-content">
                                <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.jqMaxlength()) -->
                                <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-meta-title">Title</label>
                                    <input type="text" class="js-maxlength form-control" id="ecom-product-meta-title"
                                        name="ecom-product-meta-title" maxlength="55" data-always-show="true"
                                        data-bs-placement="top" placeholder="Meta Title" value="Dark Souls III">
                                    <div class="form-text text-muted fs-sm text-end">55 Characters Max</div>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-meta-tags">Category</label>
                                    <!-- Select2 (.js-select2 class is initialized in Helpers.jqSelect2()) -->
                                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                                    <select class="js-select2 form-control" id="ecom-product-meta-tags"
                                        name="ecom-product-meta-tags" style="width: 100%;"
                                        data-placeholder="Choose one.." multiple>
                                        <option></option>
                                        <!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                        <option value="1" selected>PS4</option>
                                        <option value="2" selected>RPG</option>
                                        <option value="3" selected>Action</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="form-label" for="ecom-product-meta-description">Description</label>
                                    <textarea class="js-maxlength form-control" id="ecom-product-meta-description" name="ecom-product-meta-description"
                                        maxlength="115" data-always-show="true" data-bs-placement="top" placeholder="Meta Description" rows="2">Dark Souls III is an action role-playing video game developed by FromSoftware.</textarea>
                                    <div class="form-text text-muted fs-sm text-end">115 Characters Max</div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- END Meta Data -->

                    <!-- Images -->
                    <div class="block block-rounded">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Images</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <!-- Existing Images -->
                            <div class="row g-sm items-push">
                                <div class="col-sm-6 col-xl-4">
                                    <div class="options-container">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo8.jpg"
                                            alt="">
                                        <div class="options-overlay bg-black-75">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-times opacity-50 me-1"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-4">
                                    <div class="options-container">
                                        <img class="img-fluid options-item" src="assets/media/photos/photo18.jpg"
                                            alt="">
                                        <div class="options-overlay bg-black-75">
                                            <div class="options-overlay-content">
                                                <a class="btn btn-sm btn-alt-danger" href="javascript:void(0)">
                                                    <i class="fa fa-fw fa-times opacity-50 me-1"></i> Remove
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END Existing Images -->

                            <!-- DropzoneJS Container -->
                            <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                            <form class="dropzone" action="be_pages_ecom_product_edit.html"></form>
                        </div>
                    </div>
                    <!-- END Images -->
                </div>
                <!-- END More Options -->
            </div>
            <!-- END Update Product -->
        </div>
        <!-- END Page Content -->
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
    
@endpush
