@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo26@2x.jpg');">
            <div class="bg-black-75">
                <div class="content content-top content-full text-center">
                    <div class="py-3">
                        <h1 class="h2 fw-bold text-white mb-2">ORD.1185</h1>
                        <h2 class="h4 fw-normal text-white-75 mb-0">Currently processing..</h2>
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
                    <a class="breadcrumb-item" href="be_pages_ecom_orders.html">Orders</a>
                    <span class="breadcrumb-item active">ORD.1185</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <!-- Progress -->
            <div class="content-heading d-flex justify-content-between align-items-center">
                <span>Progress</span>
                <div class="space-x-1">
                    <button type="button" class="btn btn-sm btn-alt-secondary">
                        <i class="fa fa-fw fa-times text-danger me-1"></i>
                        <span class="d-none d-sm-inline">Cancel</span>
                    </button>
                    <button type="button" class="btn btn-sm btn-alt-secondary">
                        <i class="fa fa-fw fa-check text-success me-1"></i>
                        <span class="d-none d-sm-inline">Complete</span>
                    </button>
                </div>
            </div>
            <div class="row">
                <!-- Submitted -->
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full">
                            <div class="py-3 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-check fa-3x text-success"></i>
                                </div>
                                <div class="fs-sm fw-semibold text-uppercase text-success">1. Submitted</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Submitted -->

                <!-- Payment -->
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full">
                            <div class="py-3 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-check fa-3x text-success"></i>
                                </div>
                                <div class="fs-sm fw-semibold text-uppercase text-success">2. Payment</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Payment -->

                <!-- Packaging -->
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full">
                            <div class="py-3 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-spinner fa-3x fa-spin text-warning"></i>
                                </div>
                                <div class="fs-sm fw-semibold text-uppercase text-warning">3. Packaging</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Packaging -->

                <!-- Completed -->
                <div class="col-md-6 col-xl-3">
                    <div class="block block-rounded">
                        <div class="block-content block-content-full">
                            <div class="py-3 text-center">
                                <div class="mb-3">
                                    <i class="fa fa-times fa-3x text-muted"></i>
                                </div>
                                <div class="fs-sm fw-semibold text-uppercase text-muted">4. Completed</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Completed -->
            </div>
            <!-- END Progress -->

            <!-- Customer -->
            <div class="content-heading d-flex justify-content-between align-items-center">
                <span>Customer</span>
                <button type="button" class="btn btn-sm btn-alt-secondary">
                    <i class="fa fa-fw fa-envelope opacity-50 me-1"></i> Contact
                </button>
            </div>
            <div class="row items-push">
                <!-- Customer's Basic Info -->
                <div class="col-lg-4">
                    <a class="block block-rounded block-link-shadow text-center h-100 mb-0"
                        href="be_pages_ecom_customer.html">
                        <div class="block-content bg-gd-dusk">
                            <div class="push">
                                <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar15.jpg"
                                    alt="">
                            </div>
                            <div class="pull-x pull-b py-2 bg-black-25">
                                <div class="fw-semibold mb-1 text-white">
                                    John Smith <i class="fa fa-star text-white-75 ms-1"></i>
                                </div>
                                <div class="fs-sm text-white-75">Premium Member</div>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push text-center">
                                <div class="col-6">
                                    <div class="mb-1"><i class="si si-bag fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">6 Orders</div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-1"><i class="si si-basket-loaded fa-2x"></i></div>
                                    <div class="fs-sm fw-medium text-muted">15 Products</div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Customer's Basic Info -->

                <!-- Customer's Past Orders -->
                <div class="col-lg-8">
                    <div class="block block-rounded h-100 mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Past Orders</h3>
                        </div>
                        <div class="block-content">
                            <table class="table table-borderless table-striped">
                                <tbody>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.536</a>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2024/10/27 </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-end">$171</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.111</a>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2024/10/26 </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-end">$395</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.187</a>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2024/10/25 </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-end">$722</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.446</a>
                                        </td>
                                        <td>
                                            <span class="badge bg-success">Completed</span>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            2024/10/24 </td>
                                        <td class="d-none d-sm-table-cell">
                                            <a href="be_pages_ecom_customer.html">John Smith</a>
                                        </td>
                                        <td class="text-end">$800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END Customer's Past Orders -->
            </div>
            <!-- END Customer -->

            <!-- Addresses -->
            <h2 class="content-heading">Addresses</h2>
            <div class="row items-push">
                <!-- Billing Address -->
                <div class="col-md-6">
                    <div class="block block-rounded h-100 mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Billing Address</h3>
                        </div>
                        <div class="block-content fs-sm">
                            <div class="fw-bold mb-1">John Smith</div>
                            <address>
                                5110 8th Ave<br>
                                New York 11220<br>
                                United States<br><br>
                                <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
                                <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- END Billing Address -->

                <!-- Shipping Address -->
                <div class="col-md-6">
                    <div class="block block-rounded h-100 mb-0">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Shipping Address</h3>
                        </div>
                        <div class="block-content fs-sm">
                            <div class="fw-bold mb-1">John Smith</div>
                            <address>
                                5110 8th Ave<br>
                                New York 11220<br>
                                United States<br><br>
                                <i class="fa fa-phone me-1"></i> (999) 111-222222<br>
                                <i class="far fa-envelope me-1"></i> <a href="javascript:void(0)">company@example.com</a>
                            </address>
                        </div>
                    </div>
                </div>
                <!-- END Shipping Address -->
            </div>
            <!-- END Addresses -->

            <!-- Products -->
            <h2 class="content-heading">Products <small>(5)</small></h2>
            <div class="block block-rounded">
                <div class="block-content block-content-full">
                    <div class="table-responsive">
                        <table class="table table-borderless table-striped mb-0">
                            <thead>
                                <tr>
                                    <th style="width: 100px;">ID</th>
                                    <th>Product</th>
                                    <th class="text-center">Stock</th>
                                    <th class="text-center">QTY</th>
                                    <th class="text-end" style="width: 10%;">UNIT</th>
                                    <th class="text-end" style="width: 10%;">PRICE</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.258</a>
                                    </td>
                                    <td>
                                        <a href="be_pages_ecom_product_edit.html">Dark Souls III</a>
                                    </td>
                                    <td class="text-center">92</td>
                                    <td class="text-center fw-semibold">1</td>
                                    <td class="text-end">$69,00</td>
                                    <td class="text-end">$69,00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.263</a>
                                    </td>
                                    <td>
                                        <a href="be_pages_ecom_product_edit.html">Bloodborne</a>
                                    </td>
                                    <td class="text-center">32</td>
                                    <td class="text-center fw-semibold">1</td>
                                    <td class="text-end">$29,00</td>
                                    <td class="text-end">$29,00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.214</a>
                                    </td>
                                    <td>
                                        <a href="be_pages_ecom_product_edit.html">The Surge</a>
                                    </td>
                                    <td class="text-center">15</td>
                                    <td class="text-center fw-semibold">1</td>
                                    <td class="text-end">$59,00</td>
                                    <td class="text-end">$59,00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.358</a>
                                    </td>
                                    <td>
                                        <a href="be_pages_ecom_product_edit.html">Bioshock Collection</a>
                                    </td>
                                    <td class="text-center">77</td>
                                    <td class="text-center fw-semibold">1</td>
                                    <td class="text-end">$39,00</td>
                                    <td class="text-end">$39,00</td>
                                </tr>
                                <tr>
                                    <td>
                                        <a class="fw-semibold" href="be_pages_ecom_product_edit.html">PID.425</a>
                                    </td>
                                    <td>
                                        <a href="be_pages_ecom_product_edit.html">Until Dawn</a>
                                    </td>
                                    <td class="text-center">25</td>
                                    <td class="text-center fw-semibold">1</td>
                                    <td class="text-end">$49,00</td>
                                    <td class="text-end">$49,00</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-end fw-semibold">Total Price:</td>
                                    <td class="text-end">$245,00</td>
                                </tr>
                                <tr>
                                    <td colspan="5" class="text-end fw-semibold">Total Paid:</td>
                                    <td class="text-end">$245,00</td>
                                </tr>
                                <tr class="table-success">
                                    <td colspan="5" class="text-end fw-semibold text-uppercase">Total Due:</td>
                                    <td class="text-end fw-semibold">$0,00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END Products -->
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/codebase.app.min.js') }}"></script>

    <!-- jQuery (required for Select2 + Bootstrap Maxlength plugin) -->
@endpush
