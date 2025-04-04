@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main id="main-container">
        <!-- Hero -->
        <div class="bg-image" style="background-image: url('assets/media/photos/photo26@2x.jpg');">
            <div class="bg-black-75">
                <div class="content content-top content-full text-center">
                    <div class="py-3">
                        <h1 class="h2 fw-bold text-white mb-2">Orders</h1>
                        <h2 class="h4 fw-normal text-white-75 mb-0">You are doing great, keep it up!</h2>
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
                    <span class="breadcrumb-item active">Orders</span>
                </nav>
            </div>
        </div>
        <!-- END Breadcrumb -->

        <!-- Page Content -->
        <div class="content">
            <!-- Statistics -->
            <div class="content-heading d-flex justify-content-between align-items-center">
                <span>
                    Statistics <small class="d-none d-sm-inline">Looking good!</small>
                </span>
                <div class="dropdown">
                    <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-stats-drop"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Today</span>
                        <i class="fa fa-angle-down ms-1 opacity-50"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-stats-drop">
                        <a class="dropdown-item active" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> Today
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Week
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Month
                        </a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Year
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="far fa-fw fa-circle opacity-50 me-1"></i> All Time
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Pending -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-sun" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-spinner fa-spin text-white-75"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-white">12</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Pending</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Pending -->

                <!-- Canceled -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-cherry" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-times text-white-75"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-white">2</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Canceled</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Canceled -->

                <!-- Completed -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-lake" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-check text-white-75"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-white">21</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">Completed</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END Completed -->

                <!-- All -->
                <div class="col-md-6 col-xl-3">
                    <a class="block block-rounded block-transparent bg-gd-dusk" href="javascript:void(0)">
                        <div class="block-content block-content-full block-sticky-options">
                            <div class="block-options">
                                <div class="block-options-item">
                                    <i class="fa fa-archive text-white-75"></i>
                                </div>
                            </div>
                            <div class="py-3 text-center">
                                <div class="fs-2 fw-bold mb-0 text-white">35</div>
                                <div class="fs-sm fw-semibold text-uppercase text-white-75">All</div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- END All -->
            </div>
            <!-- END Statistics -->

            <!-- Orders -->
            <div class="content-heading d-flex justify-content-between align-items-center">
                <span>
                    Orders <small class="d-none d-sm-inline">(35)</small>
                </span>
                <div class="space-x-1">
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-filter-drop"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>All</span>
                            <i class="fa fa-angle-down ms-1 opacity-50"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-filter-drop">
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-spinner fa-spin text-warning me-1"></i> Pending
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-sync fa-spin text-info me-1"></i> Processing
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-times text-danger me-1"></i> Canceled
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-check text-success me-1"></i> Completed
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item active" href="javascript:void(0)">
                                <i class="far fa-fw fa-circle me-1"></i> All
                            </a>
                        </div>
                    </div>
                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn btn-sm btn-alt-secondary" id="ecom-orders-drop"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>Today</span>
                            <i class="fa fa-angle-down ms-1 opacity-50"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="ecom-orders-drop">
                            <a class="dropdown-item active" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> Today
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Week
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Month
                            </a>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="fa fa-fw fa-calendar-alt opacity-50 me-1"></i> This Year
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0)">
                                <i class="far fa-fw fa-circle opacity-50 me-1"></i> All Time
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-rounded">
                <div class="block-content bg-body-light">
                    <!-- Search -->
                    <form action="be_pages_ecom_orders.html" method="POST" onsubmit="return false;">
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search orders..">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- END Search -->
                </div>
                <div class="block-content block-content-full">
                    <!-- Orders Table -->
                    <table class="table table-borderless table-striped">
                        <thead>
                            <tr>
                                <th style="width: 100px;">ID</th>
                                <th>Status</th>
                                <th class="d-none d-sm-table-cell">Submitted</th>
                                <th class="d-none d-sm-table-cell">Products</th>
                                <th class="d-none d-sm-table-cell">Customer</th>
                                <th class="d-none d-sm-table-cell text-end">Value</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1851</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">Processing</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/27 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Betty Kelley</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$904</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1850</a>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Canceled</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/26 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">3</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Melissa Rice</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$464</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1849</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">Processing</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/25 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">5</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Lisa Jenkins</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$251</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1848</a>
                                </td>
                                <td>
                                    <span class="badge bg-danger">Canceled</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/24 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">7</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Melissa Rice</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$283</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1847</a>
                                </td>
                                <td>
                                    <span class="badge bg-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/23 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">8</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Jose Wagner</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$383</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1846</a>
                                </td>
                                <td>
                                    <span class="badge bg-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/22 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">9</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Jeffrey Shaw</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$954</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1845</a>
                                </td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/21 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">8</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Jack Greene</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$167</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1844</a>
                                </td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/20 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">9</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Amanda Powell</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$817</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1843</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">Processing</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/19 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Lori Grant</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$814</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1842</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">Processing</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/18 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Laura Carr</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$299</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1841</a>
                                </td>
                                <td>
                                    <span class="badge bg-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/17 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Amanda Powell</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$777</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1840</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">Processing</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/16 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">6</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Susan Day</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$875</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1839</a>
                                </td>
                                <td>
                                    <span class="badge bg-warning">Pending</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/15 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">2</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Jose Mills</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$235</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1838</a>
                                </td>
                                <td>
                                    <span class="badge bg-success">Completed</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/14 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">7</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">Jose Mills</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$816</td>
                            </tr>
                            <tr>
                                <td>
                                    <a class="fw-semibold" href="be_pages_ecom_order.html">ORD.1837</a>
                                </td>
                                <td>
                                    <span class="badge bg-info">Processing</span>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    2024/10/13 </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="javascript:void(0)">4</a>
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="be_pages_ecom_customer.html">David Fuller</a>
                                </td>
                                <td class="d-none d-sm-table-cell text-end">$116</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- END Orders Table -->

                    <!-- Navigation -->
                    <nav aria-label="Orders navigation">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="javascript:void(0)">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">2</a>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="javascript:void(0)">...</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">8</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)">9</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                    <span aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- END Navigation -->
                </div>
            </div>
            <!-- END Orders -->
        </div>
        <!-- END Page Content -->
    </main>
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('admin/assets/js/codebase.app.min.js') }}"></script>

    <!-- jQuery (required for Select2 + Bootstrap Maxlength plugin) -->
@endpush
