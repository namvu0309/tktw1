<nav id="sidebar">
    <!-- Sidebar Content -->
    <div class="sidebar-content">
        <!-- Side Header -->
        <div class="content-header justify-content-lg-center">
            <!-- Logo -->
            <div>
                <span class="smini-visible fw-bold tracking-wide fs-lg">
                    c<span class="text-primary">b</span>
                </span>
                <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                    <span class="smini-hidden">
                        <i class="fa fa-fire text-primary"></i>
                        <span class="fs-4 text-dual">Nam</span><span class="fs-4 text-primary">Vu</span>
                    </span>
                </a>
            </div>
        </div>

        <!-- Sidebar Scrolling -->
        <div class="js-sidebar-scroll">
            <!-- Side User -->
            <!-- Copy từ file gốc phần side user -->
            <div class="content-side content-side-user px-0 py-0">
                <!-- Visible only in mini mode -->
                <div class="smini-visible-block animated fadeIn px-3">
                    <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                </div>
                <!-- END Visible only in mini mode -->

                <!-- Visible only in normal mode -->
                <div class="smini-hidden text-center mx-auto">
                    <a class="img-link" href="be_pages_generic_profile.html">
                        <img class="img-avatar" src="{{ asset('admin/assets/media/avatars/avatar15.jpg') }}"
                            alt="">
                    </a>
                    <ul class="list-inline mt-3 mb-0">
                        <li class="list-inline-item">
                            <a class="link-fx text-dual fs-sm fw-semibold text-uppercase"
                                href="be_pages_generic_profile.html">J.
                                Smith</a>
                        </li>
                        <li class="list-inline-item">
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <a class="link-fx text-dual" data-toggle="layout" data-action="dark_mode_toggle"
                                href="javascript:void(0)">
                                <i class="far fa-fw fa-moon" data-dark-mode-icon></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-sign-out-alt"></i>
                                </button>
                            </form>

                        </li>
                    </ul>
                </div>
                <!-- END Visible only in normal mode -->
            </div>
            <div class="content-side content-side-full">
                <ul class="nav-main">
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('admin.dashboard') }}">
                            <i class="nav-main-link-icon fa fa-dashboard"></i>
                            <span class="nav-main-link-name">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_orders.html">
                            <i class="nav-main-link-icon fa fa-shopping-cart"></i>
                            <span class="nav-main-link-name">Orders</span>
                        </a>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('admin.products.index') }}">
                            <i class="nav-main-link-icon fa fa-boxes"></i>
                            <span class="nav-main-link-name">Products</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('admin.categories.index') }}">
                            <i class="nav-main-link-icon fa fa-list"></i>
                            <span class="nav-main-link-name">Categories</span>
                        </a>
                    </li>

                    <li class="nav-main-item">
                        <a class="nav-main-link" href="be_pages_ecom_customer.html">
                            <i class="nav-main-link-icon fa fa-users"></i>
                            <span class="nav-main-link-name">Customer</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Side Navigation -->
            <div class="content-side content-side-full">
                <!-- Copy từ file gốc phần navigation menu -->
            </div>
        </div>
    </div>
</nav>
