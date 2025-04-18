@extends('client.layouts.app')

@section('title', 'Trang chủ')

@section('content')
    <main class="main-bg">
        <!--====== Start Hero Section ======-->
        <section class="hero-section">
            <!--=== Hero Wrapper ===-->
            <div class="hero-wrapper-one">
                <div class="container">
                    <div class="hero-dots"></div>
                    <div class="hero-slider-one">
                        <!--=== Single Slider ===-->
                        <div class="single-hero-slider">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content style-one mb-50">
                                        <span class="sub-heading">Best for your categories</span>
                                        <h1>Exclusive Collection <br>
                                            in <span>Our Online</span> Store</h1>
                                        <p>Discover our exclusive collection available only in our online store. Shop now
                                            for unique and premium items that you won't find anywhere else.</p>
                                        <ul>
                                            <li>
                                                <div class="price-box">
                                                    <div class="currency">$</div>
                                                    <div class="text">
                                                        <span class="discount">Discount Price</span>
                                                        <h3>140.00</h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="client/assets/images/hero/line-1.png" alt="">
                                            </li>
                                            <li>
                                                <a href="shops.html" class="theme-btn style-one">Shop Now</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image-box">
                                        <div class="hero-image">
                                            <img src="{{ asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSuODaAgsErim5f3cE79zZZqIuF9MbEAgIRvw&s') }}"
                                                alt="Hero Image" width="460" height="550">
                                            <div class="hero-shape bg_cover"
                                                style="background-image: url('{{ asset('client/assets/images/hero/hero-one-shape1.png') }}');">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Single Slider ===-->
                        <div class="single-hero-slider">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content style-one mb-50">
                                        <span class="sub-heading">Best for your categories</span>
                                        <h1>Exclusive Collection <br>
                                            in <span>Our Online</span> Store</h1>
                                        <p>Discover our exclusive collection available only in our online store. Shop now
                                            for unique and premium items that you won't find anywhere else.</p>
                                        <ul>
                                            <li>
                                                <div class="price-box">
                                                    <div class="currency">$</div>
                                                    <div class="text">
                                                        <span class="discount">Discount Price</span>
                                                        <h3>140.00</h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="client/assets/images/hero/line-1.png" alt="">
                                            </li>
                                            <li>
                                                <a href="shops.html" class="theme-btn style-one">Shop Now</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image-box">
                                        <div class="hero-image">
                                            <img src="client/assets/images/hero/hero-one_img1.jpg" alt="Hero Image">
                                            <div class="hero-shape bg_cover"
                                                style="background-image: url(client/assets/images/hero/hero-one-shape1.png);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--=== Single Slider ===-->
                        <div class="single-hero-slider">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <!--=== Hero Content ===-->
                                    <div class="hero-content style-one mb-50">
                                        <span class="sub-heading">Best for your categories</span>
                                        <h1>Exclusive Collection <br>
                                            in <span>Our Online</span> Store</h1>
                                        <p>Discover our exclusive collection available only in our online store. Shop now
                                            for unique and premium items that you won't find anywhere else.</p>
                                        <ul>
                                            <li>
                                                <div class="price-box">
                                                    <div class="currency">$</div>
                                                    <div class="text">
                                                        <span class="discount">Discount Price</span>
                                                        <h3>140.00</h3>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <img src="client/assets/images/hero/line-1.png" alt="">
                                            </li>
                                            <li>
                                                <a href="shops.html" class="theme-btn style-one">Shop Now</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!--=== Hero Image ===-->
                                    <div class="hero-image-box">
                                        <div class="hero-image">
                                            <img src="client/assets/images/hero/hero-one_img1.jpg" alt="Hero Image">
                                            <div class="hero-shape bg_cover"
                                                style="background-image: url(client/assets/images/hero/hero-one-shape1.png);">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Hero Section ======-->
        <!--====== Start Animated-headline Section ======-->
        <section class="animated-headline-area primary-dark-bg pt-25 pb-25">
            <div class="headline-wrap style-one">
                <span class="marquee-wrap">
                    <span class="marquee-inner left">
                        <span class="marquee-item"><b>Women</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Shirts</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jackets</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jeans</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Blazer</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Men</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jackets</b><i class="fas fa-bahai"></i></span>
                    </span>
                    <span class="marquee-inner left">
                        <span class="marquee-item"><b>Women</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Shirts</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jackets</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jeans</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Blazer</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Men</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jackets</b><i class="fas fa-bahai"></i></span>
                    </span>
                    <span class="marquee-inner left">
                        <span class="marquee-item"><b>Women</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Shirts</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jackets</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jeans</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Blazer</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Men</b><i class="fas fa-bahai"></i></span>
                        <span class="marquee-item"><b>Jackets</b><i class="fas fa-bahai"></i></span>
                    </span>
                </span>
            </div>
        </section><!--====== End Animated-headline Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=== Features Wrapper ===-->
                        <div class="features-wrapper" data-aos="fade-up" data-aos-delay="10" data-aos-duration="1000">
                            <!--=== Iconic Box Item ===-->
                            <div class="iconic-box-item icon-left-box mb-25">
                                <div class="icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="content">
                                    <h5>Free Shipping</h5>
                                    <p>You get your items delivered without any extra cost.</p>
                                </div>
                            </div>
                            <!--=== Divider ===-->
                            <div class="divider mb-25">
                                <img src="client/assets/images/divider.png" alt="divider">
                            </div>
                            <!--=== Iconic Box Item ===-->
                            <div class="iconic-box-item icon-left-box mb-25">
                                <div class="icon">
                                    <i class="fas fa-microphone"></i>
                                </div>
                                <div class="content">
                                    <h5>Great Support 24/7</h5>
                                    <p>Our customer support team is available around the clock </p>
                                </div>
                            </div>
                            <!--=== Divider ===-->
                            <div class="divider mb-25">
                                <img src="client/assets/images/divider.png" alt="divider">
                            </div>
                            <!--=== Iconic Box Item ===-->
                            <div class="iconic-box-item icon-left-box mb-25">
                                <div class="icon">
                                    <i class="far fa-handshake"></i>
                                </div>
                                <div class="content">
                                    <h5>Return Available</h5>
                                    <p>Making it easy to return any items if you're not satisfied.</p>
                                </div>
                            </div>
                            <!--=== Divider ===-->
                            <div class="divider mb-25">
                                <img src="client/assets/images/divider.png" alt="divider">
                            </div>
                            <!--=== Iconic Box Item ===-->
                            <div class="iconic-box-item icon-left-box mb-25">
                                <div class="icon">
                                    <i class="fas fa-sack-dollar"></i>
                                </div>
                                <div class="content">
                                    <h5>Secure Payment</h5>
                                    <p>Shop with confidence knowing that our secure payment</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Section ======-->
        <!--====== Start Category Section ======-->
        <section class="category-section pt-125 overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-8">
                        <!--=== Section Title ===-->
                        <div class="section-title mb-50" data-aos="fade-right" data-aos-delay="10"
                            data-aos-duration="800">
                            <div class="sub-heading d-inline-flex align-items-center">
                                <i class="flaticon-sparkler"></i>
                                <span class="sub-title">Danh Mục</span>
                            </div>
                            <h2>Khám Phá Danh Mục Hàng Đầu</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <!--=== Arrows ===-->
                        <div class="category-arrows style-one mb-60" data-aos="fade-left" data-aos-delay="15"
                            data-aos-duration="1000"></div>
                    </div>
                </div>
            </div>
            <!--=== Category Slider ===-->
            <div class="category-slider-one" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1200">
                @foreach ($categories as $category)
                    <!--=== Category Item ===-->
                    <div class="category-item style-one text-center">
                        <div class="category-img">
                            <a href="{{ route('category', $category->slug) }}">
                                <img src="{{ asset($category->image) }}" alt="{{ $category->name }}"
                                    style="width: 300px; ">
                            </a>
                        </div>
                        <div class="category-content">
                            <a href="#" class="category-btn">{{ $category->name }}</a>
                        </div>
                    </div>
                    <!--=== Category Item ===-->
                @endforeach
            </div>
        </section><!--====== End Category Section ======-->
        <!--====== Start Banner Section ======-->
        <section class="banner-section pt-130">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--=== Banner Item ===-->
                        <div class="banner-item style-one bg-one mb-40" data-aos="fade-up" data-aos-delay="10"
                            data-aos-duration="900">
                            <div class="shape shape-one"><span><img src="client/assets/images/banner/discount.png"
                                        alt="shape"></span></div>
                            <div class="shape shape-two"><span><img src="client/assets/images/banner/line.png"
                                        alt="shape"></span></div>
                            <div class="banner-img"><img src="client/assets/images/banner/banner-1.png"
                                    alt="banner image"></div>
                            <div class="banner-content">
                                <span>UP TO <span class="off">50%</span></span>
                                <h4>Exclusive Kids & Adults Summer Outfits</h4>
                                <a href="shops.html" class="theme-btn style-one">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== Banner Item ===-->
                        <div class="banner-item style-one bg-two mb-40" data-aos="fade-up" data-aos-delay="20"
                            data-aos-duration="1100">
                            <div class="shape shape-one"><span><img src="client/assets/images/banner/discount.png"
                                        alt="shape"></span></div>
                            <div class="shape shape-two"><span><img src="client/assets/images/banner/line.png"
                                        alt="shape"></span></div>
                            <div class="banner-img"><img src="client/assets/images/banner/banner-2.png"
                                    alt="banner image"></div>
                            <div class="banner-content">
                                <span>UP TO <span class="off">70%</span></span>
                                <h4>Exclusive Kids & Adults Summer Outfits</h4>
                                <a href="shops.html" class="theme-btn style-one">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Banner Section ======-->
        <!--====== Start Features Section ======-->
        <section class="features-products pt-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <!--=== Section Title ===-->
                        <div class="section-title mb-50 text-center text-lg-start" data-aos="fade-right"
                            data-aos-delay="10" data-aos-duration="1000">
                            <div class="sub-heading d-inline-flex align-items-center">
                                <i class="flaticon-sparkler"></i>
                                <span class="sub-title">Feature Products</span>
                            </div>
                            <h2>Our Features Collection</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!--=== Pesco Tabs ===-->
                        <div class="pesco-tabs style-one mb-50" data-aos="fade-left" data-aos-delay="15"
                            data-aos-duration="1200">
                            <ul class="nav nav-tabs" role="tablist">
                                <li>
                                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#cat1"
                                        role="tab">Best Sellers</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat2"
                                        role="tab">New Products</button>
                                </li>
                                <li>
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cat3"
                                        role="tab">Sale Products</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <!--=== Tab Content ===-->
                        <div class="tab-content" data-aos="fade-up" data-aos-duration="1200">
                            <!--=== Tab Pane  ===-->
                            {{-- best seller --}}
                            <div class="tab-pane fade show active" id="cat1">
                                <div class="row justify-content-center">
                                    @foreach ($newProducts as $product)
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <!--=== Product Item  ===-->
                                            <div class="product-item style-one mb-40">
                                                <div class="product-thumbnail">
                                                    <a href="{{ route('details', ['slug' => $product->slug]) }}">
                                                        @php
                                                            // Lấy ảnh chính từ collection images
                                                            $primaryImage = $product->images->firstWhere(
                                                                'is_primary',
                                                                1,
                                                            );
                                                        @endphp

                                                        <a href="{{ asset($primaryImage->image_path) }}"
                                                            class="img-popup">
                                                            <img src="{{ asset($primaryImage->image_path) }}"
                                                                alt="{{ $primaryImage->alt }}" width="300px">
                                                        </a>
                                                    </a>
                                                    <div class="discount">{{ $product->discount }}% Off</div>
                                                    <div class="hover-content">
                                                        <a href="#" class="icon-btn"><i
                                                                class="fa fa-heart"></i></a>
                                                        <a href="{{ asset($product->images) }}"
                                                            class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#" class="cart-btn"><i
                                                                class="far fa-shopping-basket"></i> <span
                                                                class="text">Thêm vào giỏ hàng</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info-wrap">
                                                    <div class="product-info">
                                                        <ul class="ratings rating{{ $product->rating }}">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                <li><i class="fas fa-star"></i></li>
                                                            @endfor
                                                            <li><a href="#">({{ $product->reviews_count }})</a></li>
                                                        </ul>
                                                        <h4 class="title"><a
                                                                href="{{ asset('details', $product->slug) }}">{{ $product->name }}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="price prev-price"><span
                                                                class="currency">$</span>{{ $product->original_price }}</span>
                                                        <span class="price new-price"><span
                                                                class="currency">$</span>{{ $product->discounted_price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- sale products --}}
                            <div class="tab-pane fade" id="cat3">
                                <div class="row justify-content-center">
                                    @foreach ($newProducts as $product)
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="product-item style-one mb-40">
                                                <div class="product-thumbnail">
                                                    <a href="{{ route('details', ['slug' => $product->slug]) }}">
                                                        <img src="{{ asset($product->image) }}" alt="Products">
                                                    </a>
                                                    <div class="discount">{{ $product->discount }}% Off</div>
                                                    <div class="hover-content">
                                                        <a href="#" class="icon-btn"><i
                                                                class="fa fa-heart"></i></a>
                                                        <a href="{{ asset($product->image) }}"
                                                            class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#" class="cart-btn"><i
                                                                class="far fa-shopping-basket"></i> <span
                                                                class="text">Add To Cart</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info-wrap">
                                                    <div class="product-info">
                                                        <ul class="ratings rating{{ $product->rating }}">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                <li><i class="fas fa-star"></i></li>
                                                            @endfor
                                                            <li><a href="#">({{ $product->reviews_count }})</a></li>
                                                        </ul>
                                                        <h4 class="title"><a
                                                                href="{{ asset('details') }}">{{ $product->name }}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="price prev-price"><span
                                                                class="currency">$</span>{{ $product->original_price }}</span>
                                                        <span class="price new-price"><span
                                                                class="currency">$</span>{{ $product->discounted_price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            {{-- new products --}}
                            <div class="tab-pane fade" id="cat2">
                                <div class="row justify-content-center">
                                    @foreach ($newProducts as $product)
                                        <div class="col-xl-3 col-lg-4 col-sm-6">
                                            <div class="product-item style-one mb-40">
                                                <div class="product-thumbnail">
                                                    <img src="{{ asset($product->image) }}" alt="Products">
                                                    <div class="discount">{{ $product->discount }}% Off</div>
                                                    <div class="hover-content">
                                                        <a href="#" class="icon-btn"><i
                                                                class="fa fa-heart"></i></a>
                                                        <a href="{{ asset($product->image) }}"
                                                            class="img-popup icon-btn"><i class="fa fa-eye"></i></a>
                                                    </div>
                                                    <div class="cart-button">
                                                        <a href="#" class="cart-btn"><i
                                                                class="far fa-shopping-basket"></i> <span
                                                                class="text">Add To Cart</span></a>
                                                    </div>
                                                </div>
                                                <div class="product-info-wrap">
                                                    <div class="product-info">
                                                        <ul class="ratings rating{{ $product->rating }}">
                                                            @for ($i = 0; $i < 5; $i++)
                                                                <li><i class="fas fa-star"></i></li>
                                                            @endfor
                                                            <li><a href="#">({{ $product->reviews_count }})</a></li>
                                                        </ul>
                                                        <h4 class="title"><a
                                                                href="{{ asset('details', $product->slug) }}">{{ $product->name }}</a>
                                                        </h4>
                                                    </div>
                                                    <div class="product-price">
                                                        <span class="price prev-price"><span
                                                                class="currency">$</span>{{ $product->original_price }}</span>
                                                        <span class="price new-price"><span
                                                                class="currency">$</span>{{ $product->discounted_price }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section><!--====== End Features Section ======-->
        <!--====== Start Features Products Section  ======-->
        <section class="features-products-section pt-85 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--=== Section Title  ===-->
                        <div class="section-title mb-50" data-aos="fade-right" data-aos-delay="10"
                            data-aos-duration="1000">
                            <div class="sub-heading d-inline-flex align-items-center">
                                <i class="flaticon-sparkler"></i>
                                <span class="sub-title">Feature Products</span>
                            </div>
                            <h2>Our Features Collection</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--=== Arrows ===-->
                        <div class="feature-arrows style-one mb-60" data-aos="fade-left" data-aos-delay="15"
                            data-aos-duration="1200"></div>
                    </div>
                </div>
                <!--=== Feature Slider  ===-->
                <div class="feature-slider-one" data-aos="fade-up" data-aos-delay="20" data-aos-duration="1400">
                    <div class="tab-pane fade show active" id="cat1">
                        <div class="row justify-content-center">
                            @foreach ($newProducts as $product)
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                    <!--=== Product Item  ===-->
                                    <div class="product-item style-one mb-40">
                                        <div class="product-thumbnail">
                                            @php
                                                // Lấy ảnh chính từ collection images
                                                $primaryImage = $product->images->firstWhere('is_primary', 1);
                                            @endphp

                                            <a href="{{ route('details', $product->slug) }}">{{ $product->name }}
                                                @if ($primaryImage)
                                                    <img src="{{ asset($primaryImage->image_path) }}"
                                                        alt="{{ $primaryImage->alt }}" class="img-fluid" width="300">
                                                @else
                                                    <img src="{{ asset('images/no-image.jpg') }}" alt="Không có ảnh"
                                                        class="img-fluid" width="300">
                                                @endif
                                            </a>

                                            <div class="discount">{{ $product->discount }}% Off</div>
                                            <div class="hover-content">
                                                <a href="#" class="icon-btn"><i class="fa fa-heart"></i></a>
                                                <a href="{{ asset($primaryImage->image_path) }}"
                                                    class="img-popup icon-btn">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                            <div class="cart-button">
                                                <a href="#" class="cart-btn">
                                                    <i class="far fa-shopping-basket"></i>
                                                    <span class="text">Thêm vào giỏ hàng</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="product-info-wrap">
                                            <div class="product-info">
                                                <ul class="ratings">
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= $product->rating)
                                                            <li><i class="fas fa-star"></i></li>
                                                        @else
                                                            <li><i class="far fa-star"></i></li>
                                                        @endif
                                                    @endfor
                                                    <li><a href="#">({{ $product->reviews_count }})</a></li>
                                                </ul>
                                                <h4 class="title">
                                                    <a
                                                        href="{{ route('details', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                </h4>
                                            </div>
                                            <div class="product-price">
                                                <span class="price prev-price">
                                                    <span class="currency">$</span>{{ $product->original_price }}
                                                </span>
                                                <span class="price new-price">
                                                    <span class="currency">$</span>{{ $product->discounted_price }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Features Products Section  ======-->
        <!--====== Start Working Section  ======-->
        <section class="work-processing-section pt-30 pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=== Section Title  ===-->
                        <div class="section-title text-center mb-60" data-aos="fade-up" data-aos-delay="10"
                            data-aos-duration="800">
                            <div class="sub-heading d-inline-flex align-items-center">
                                <i class="flaticon-sparkler"></i>
                                <span class="sub-title">Work Processing</span>
                                <i class="flaticon-sparkler"></i>
                            </div>
                            <h2>How it Work processing</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Iconic Box Item  ===-->
                        <div class="iconic-box-item style-two mb-40" data-aos="fade-up" data-aos-duration="1000">
                            <div class="sn-number">01</div>
                            <div class="icon">
                                <i class="flaticon-searching"></i>
                            </div>
                            <div class="content">
                                <h6>Browsing & Choosing</h6>
                                <p>This is where customers visit your online store, browse your products.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Iconic Box Item  ===-->
                        <div class="iconic-box-item style-two mb-40" data-aos="fade-up" data-aos-duration="1200">
                            <div class="sn-number">02</div>
                            <div class="icon">
                                <i class="flaticon-payment-method"></i>
                            </div>
                            <div class="content">
                                <h6>Checkout & Payment</h6>
                                <p>Once they have picked their items, customers proceed to checkout.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Iconic Box Item  ===-->
                        <div class="iconic-box-item style-two mb-40" data-aos="fade-up" data-aos-duration="1400">
                            <div class="sn-number">03</div>
                            <div class="icon">
                                <i class="flaticon-currency"></i>
                            </div>
                            <div class="content">
                                <h6>Order Fulfillment</h6>
                                <p>After the order is placed, it's sent to your fulfillment team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <!--=== Iconic Box Item  ===-->
                        <div class="iconic-box-item style-two mb-40" data-aos="fade-up" data-aos-duration="1600">
                            <div class="sn-number">04</div>
                            <div class="icon">
                                <i class="flaticon-delivery"></i>
                            </div>
                            <div class="content">
                                <h6>Delivery to Customer</h6>
                                <p>The packed order is then sent off with a shipping carrier</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Working Section  ======-->
        <!--====== Start Trending Products Sections  ======-->
        <section class="trending-products-section pb-40 pb-130">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!--=== Section Title  ===-->
                        <div class="section-title mb-50" data-aos="fade-right" data-aos-duration="1000">
                            <div class="sub-heading d-inline-flex align-items-center">
                                <i class="flaticon-sparkler"></i>
                                <span class="sub-title">Trending Products</span>
                            </div>
                            <h2>What's Trending Now</h2>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!--=== Arrows ===-->
                        <div class="trending-product-arrows style-one mb-60" data-aos="fade-left"
                            data-aos-duration="1200"></div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="trending-products-slider" data-aos="fade-up" data-aos-duration="1400">
                    @foreach ($newProducts as $product)
                        <!--=== Product Item ===-->
                        <div class="product-item style-two">
                            <div class="product-thumbnail">
                                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                            </div>
                            <div class="product-info-wrap">
                                <div class="product-info">
                                    <ul class="ratings rating5">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><a href="#">(80)</a></li>
                                    </ul>
                                    <h4 class="title"><a
                                            href="{{ route('details', $product->slug) }}">{{ $product->name }}</a></h4>
                                </div>
                                <div class="product-price">
                                    <span class="price prev-price"><span class="currency">$</span>90.00</span>
                                    <span class="price new-price"><span class="currency">$</span>10.00</span>
                                </div>
                            </div>
                        </div>
                        <!--=== Product Item ===-->
                    @endforeach
                </div>
            </div>
        </section><!--====== End Trending Products Sections  ======-->
        <!--====== Start Blog Sections  ======-->
        <section class="best-deal-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="offer-deal-wrapper bg_cover" data-aos="fade-up" data-aos-duration="1400"
                            style="background-image: url(client/assets/images/bg/deal-bg-1.png);">
                            <div class="deal-img">
                                <span><img src="client/assets/images/banner/deal-1.png" alt="Image"></span>
                            </div>
                            <div class="deal-content">
                                <span class="sub-heading"><i class="fas fa-tags"></i>Deal of the Week</span>
                                <h2>Hurry Up! Offer ends in. Get <span>UP TO 80% OFF</span></h2>
                                <div class="simply-countdown mb-60"></div>
                                <div class="shop-button">
                                    <a href="shops.html" class="theme-btn style-one">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blog Sections  ======-->
        <!--====== Start Testimonial Sections  ======-->
        <section class="testimonial-section">
            <div class="testimonial-wrapper overflow-x-hidden pt-190 pb-90 white-bg">
                <div class="shape svg-shape1"><img src="client/assets/images/testimonial/tl-svgTop.svg" alt="svg shape">
                </div>
                <div class="shape svg-shape2"><img src="client/assets/images/testimonial/tl-svgBottom.svg"
                        alt="svg shape"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <!--=== Section Content Box ===-->
                            <div class="section-content-box mb-40" data-aos="fade-right" data-aos-delay="30"
                                data-aos-duration="800">
                                <div class="section-title mb-50">
                                    <h2>What Our Clients Say About Us</h2>
                                </div>
                                <div class="testimonial-arrows style-one"></div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <!--=== Testimonial Slider ===-->
                            <div class="testimonial-slider-one" data-aos="fade-left" data-aos-delay="50"
                                data-aos-duration="1000">
                                <!--=== Testimonial Item ===-->
                                <div class="testimonial-item style-one mb-40">
                                    <div class="testimonial-content">
                                        <p>This inflatable dragon costume seemed perfect for Halloween! But upon inflating,
                                            it became clear the wings were uneven, causing me to spin uncontrollably like a
                                            rogue pool float. </p>
                                        <div class="author-quote-item d-flex justify-content-between align-items-center">
                                            <div class="author-item">
                                                <div class="author-thumb">
                                                    <img src="client/assets/images/testimonial/author-1.png"
                                                        alt="author image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Rhodes Jhon</h5>
                                                    <ul class="ratings rating5">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="quote-icon">
                                                <i class="flaticon flaticon-right-quote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--=== Testimonial Item ===-->
                                <div class="testimonial-item style-one mb-40">
                                    <div class="testimonial-content">
                                        <p>This inflatable dragon costume seemed perfect for Halloween! But upon inflating,
                                            it became clear the wings were uneven, causing me to spin uncontrollably like a
                                            rogue pool float. </p>
                                        <div class="author-quote-item d-flex justify-content-between align-items-center">
                                            <div class="author-item">
                                                <div class="author-thumb">
                                                    <img src="client/assets/images/testimonial/author-2.png"
                                                        alt="author image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Rhodes Jhon</h5>
                                                    <ul class="ratings rating5">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="quote-icon">
                                                <i class="flaticon flaticon-right-quote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--=== Testimonial Item ===-->
                                <div class="testimonial-item style-one mb-40">
                                    <div class="testimonial-content">
                                        <p>This inflatable dragon costume seemed perfect for Halloween! But upon inflating,
                                            it became clear the wings were uneven, causing me to spin uncontrollably like a
                                            rogue pool float. </p>
                                        <div class="author-quote-item d-flex justify-content-between align-items-center">
                                            <div class="author-item">
                                                <div class="author-thumb">
                                                    <img src="client/assets/images/testimonial/author-1.png"
                                                        alt="author image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Rhodes Jhon</h5>
                                                    <ul class="ratings rating5">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="quote-icon">
                                                <i class="flaticon flaticon-right-quote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--=== Testimonial Item ===-->
                                <div class="testimonial-item style-one mb-40">
                                    <div class="testimonial-content">
                                        <p>This inflatable dragon costume seemed perfect for Halloween! But upon inflating,
                                            it became clear the wings were uneven, causing me to spin uncontrollably like a
                                            rogue pool float. </p>
                                        <div class="author-quote-item d-flex justify-content-between align-items-center">
                                            <div class="author-item">
                                                <div class="author-thumb">
                                                    <img src="client/assets/images/testimonial/author-2.png"
                                                        alt="author image">
                                                </div>
                                                <div class="author-info">
                                                    <h5>Rhodes Jhon</h5>
                                                    <ul class="ratings rating5">
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                        <li><i class="fas fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="quote-icon">
                                                <i class="flaticon flaticon-right-quote"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Testimonial Sections  ======-->
        <!--====== Start Blog Sections  ======-->
        <section class="blogs-section pt-125 pb-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!--=== Section Title  ===-->
                        <div class="section-title text-center mb-60" data-aos="fade-up" data-aos-duration="1000">
                            <div class="sub-heading d-inline-flex align-items-center">
                                <i class="flaticon-sparkler"></i>
                                <span class="sub-title">Our Blogs</span>
                                <i class="flaticon-sparkler"></i>
                            </div>
                            <h2>Explore our Articles</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!--=== Blog Post Item  ===-->
                        <div class="blog-post-item style-one mb-25" data-aos="fade-up" data-aos-duration="1200">
                            <div class="post-thumbnail">
                                <img src="client/assets/images/blog/blog-big-1.png" alt="Post Thumbnail">
                            </div>
                            <div class="post-content">
                                <h3 class="title"><a href="blog-details.html">From Clicks to Closets: Mastering the Art
                                        of Fashion E-commerce Marketing</a></h3>
                                <p>dives into the world of fashion e-commerce marketing, guiding readers on how to turn
                                    online interest into sales. It likely explores strategies to attract potential
                                    customers, showcase products effectively, and create a smooth buying journey that
                                    converts clicks into clothes hanging in closets</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <!--=== Blog Post Item  ===-->
                                <div class="blog-post-item style-two mb-25" data-aos="fade-up" data-aos-duration="1400">
                                    <div class="post-thumbnail">
                                        <img src="client/assets/images/blog/blog-sm-1.png" alt="Post Thumbnail">
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title"><a href="blog-details.html">Slay the Summer Style Game
                                                Must-Have Trends You Can Shop Online</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#">WordPress</a></span>
                                            <span><a href="#">Jan 12, 2024</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!--=== Blog Post Item  ===-->
                                <div class="blog-post-item style-two mb-25" data-aos="fade-up" data-aos-duration="1600">
                                    <div class="post-thumbnail">
                                        <img src="client/assets/images/blog/blog-sm-2.png" alt="Post Thumbnail">
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title"><a href="blog-details.html">Insider Tips on Finding Affordable
                                                Fashion Gems Online</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#">WordPress</a></span>
                                            <span><a href="#">May 4, 2024</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!--=== Blog Post Item  ===-->
                                <div class="blog-post-item style-two mb-25" data-aos="fade-up" data-aos-duration="1800">
                                    <div class="post-thumbnail">
                                        <img src="client/assets/images/blog/blog-sm-3.png" alt="Post Thumbnail">
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title"><a href="blog-details.html">Eco-Friendly Fashion E-commerce You
                                                Can Feel Good About</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#">WordPress</a></span>
                                            <span><a href="#">Feb 10, 2024</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="blog-post-item style-two mb-25" data-aos="fade-up" data-aos-duration="2000">
                                    <div class="post-thumbnail">
                                        <img src="client/assets/images/blog/blog-sm-4.png" alt="Post Thumbnail">
                                    </div>
                                    <div class="post-content">
                                        <h3 class="title"><a href="blog-details.html">A Guide to Streamlining the Online
                                                Fashion Shopping Experience</a></h3>
                                        <div class="post-meta">
                                            <span><a href="#">WordPress</a></span>
                                            <span><a href="#">Aug 29, 2024</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Blog Sections  ======-->
        <!--====== Start Newsletter Sections  ======-->
        <section class="newsletter-section pb-95">
            <div class="container">
                <!--=== Newsletter Wrapper  ===-->
                <div class="newsletter-wrapper white-bg p-r z-1" data-aos="fade-up" data-aos-duration="1000">
                    <div class="newsletter-shape pattern-one"><span><img
                                src="client/assets/images/newsletter/pattern-1.png" alt="Pattern Shape"></span></div>
                    <div class="newsletter-shape pattern-two"><span><img
                                src="client/assets/images/newsletter/pattern-2.png" alt="Pattern Shape"></span></div>
                    <div class="newsletter-shape shape-one"><span><img src="client/assets/images/newsletter/shape-1.png"
                                alt="Shape"></span></div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="newsletter-content-box">
                                <span class="sub-text">Our Newsletter</span>
                                <h3>Get weekly update. Sign up and get up to <span>20% off</span> your first purchase</h3>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form_control" placeholder="Write your Email Address"
                                            name="email">
                                        <button class="theme-btn style-one">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="newsletter-image">
                                <img src="client/assets/images/newsletter/newsletter-1.png" alt="Image">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Newsletter Sections  ======-->
    </main>
@endsection

@push('css')
    <!-- CSS bổ sung nếu có -->
@endpush

@push('js')
    <!-- JavaScript bổ sung nếu có -->
@endpush
