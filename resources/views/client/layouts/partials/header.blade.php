<header class="header-area">
    <!--=== Search Header Main ===-->
    <div class="preloader">
        <div class="loader">
            <img src="{{ asset('client/assets/images/loader.gif') }}" alt="Loader">
        </div>
    </div>
    <!--====== Start Overlay ======-->
    <div class="offcanvas__overlay"></div>
    <div class="header-top d-lg-block d-none">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!--=== Header Top Left ===-->
                    <div class="top-left">
                        <ul>
                            <li>
                                <span><i class="fas fa-shipping-fast"></i>Free Shipping</span>
                            </li>
                            <li>
                                <div class="pesco-dropdown">
                                    <a href="javascript:void(0)">USD <i class="far fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="javascript:void(0)">USD</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Aud</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">GBP</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="pesco-dropdown">
                                    <a href="javascript:void(0)">English <i class="far fa-angle-down"></i></a>
                                    <ul class="dropdown">
                                        <li>
                                            <a href="javascript:void(0)">English</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">Russian</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)">French</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!--=== Header Top Right ===-->
                    <div class="top-right">
                        <ul>
                            <li>
                                <span><i class="fas fa-headset"></i><a href="tel:+941234567894"
                                        class="pesco-support">+94 123 4567 894</a></span>
                            </li>
                            <li>
                                <div class="social-box">
                                    <span>Follow US</span>
                                    <a href="#"><i class="flaticon-facebook"></i></a>
                                    <a href="#"><i class="flaticon-instagram"></i></a>
                                    <a href="#"><i class="flaticon-linkedin"></i></a>
                                    <a href="#"><i class="flaticon-twitter"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---=== Header Navigation ===-->
    <div class="header-navigation style-two">
        <div class="container">
            <div class="primary-menu">
                <div class="nav-inner-menu">
                    <div class="site-branding">
                        <a href="index.html" class="brand-logo"><img
                                src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6Yz1WpG9wAgGziKITQS8j3dd_cwRQZ9G4tA&s') }}" alt="Site Logo" width="155px" height="40px"></a>
                    </div>
                    <div class="pesco-nav-menu ">
                        <!--=== Responsive Menu Search ===-->
                        <div class="nav-search mb-40 d-block d-lg-none">
                            <div class="form-group">
                                <input type="search" class="form_control" placeholder="Search Here" name="search">
                                <button class="search-btn"><i class="far fa-search"></i></button>
                            </div>
                        </div>
                        <nav class="main-menu">
                            <ul>
                                <li class="menu-item has-children"><a href="{{ asset('/') }}">Home</a>

                                </li>
                                <li class="menu-item has-children">
                                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown"
                                        aria-expanded="false">Sản phẩm <i class="fas fa-chevron-down"></i></a>
                                    <ul class="sub-menu dropdown-menu row">
                                        @foreach ($allCategories  as $category)
                                            @if ($category)
                                                <li class="col-6">
                                                    <a href="{{ route('category', $category->slug) }}"
                                                        class="dropdown-item">
                                                        {{ $category->name }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>

                                </li>
                                <li class="menu-item has-children"><a href="#">Blogs</a>

                                </li>

                                <li class="menu-item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                        <!--===  Hotline Support  ===-->
                        <div class="hotline-support d-flex d-lg-none mt-30">
                            <div class="icon">
                                <i class="far fa-headset"></i>
                            </div>
                            <div class="info">
                                <span>24/7 Support</span>
                                <h5><a href="tel:+941234567894">+94 123 4567 894</a></h5>
                            </div>
                        </div>
                    </div>
                    <!--=== Nav Right Item ===-->
                    <div class="nav-right-item style-one">
                        <ul class="d-flex align-items-center">
                            <li><button class="search-btn d-lg-block d-none"><i class="far fa-search"></i></button></li>
                            <li>
                                <div class="wishlist-btn d-lg-block d-none"><i class="far fa-heart"></i><span
                                        class="pro-count">12</span></div>
                            </li>
                            <li>
                                <div class="cart-button d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fas fa-shopping-bag"></i><span class="pro-count">01</span>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle desc-item-icon" href="#" id="userDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        style="color: black" fill="currentColor" class="bi bi-people"
                                        viewBox="0 0 16 16">
                                        <path
                                            d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4" />
                                    </svg>
                                </a>
                                <div class="dropdown-menu fs-sm" aria-labelledby="dropdown-default-warning">
                                    @if (Auth::check())
                                        <a class="dropdown-item" href="#">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Đăng xuất
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    @else
                                        <a class="dropdown-item" href="{{ route('login') }}">Đăng nhập</a>
                                        <a class="dropdown-item" href="{{ route('register') }}">Đăng ký</a>
                                    @endif
                                </div>
                            </li>
                        </ul>
                        <div class="navbar-toggler d-block d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
