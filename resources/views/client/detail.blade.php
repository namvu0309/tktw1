@extends('client.layouts.app')

@section('title', 'Chi tiết sản phẩm')

@section('content')
    <main class="main-bg">
        <!--====== Start Page Banner Section ======-->
        <section class="page-banner">
            <div class="page-banner-wrapper p-r z-1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="page-banner-content">
                                <h1>{{ $product->name }}</h1>
                                <ul class="breadcrumb-link">
                                    {{-- <li><a href="{{ route('home') }}">Home</a></li> --}}
                                    <li><i class="far fa-long-arrow-right"></i></li>
                                    <li class="active">{{ $product->name }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Page Banner Section ======-->
        <!--====== Start Shop Details Section ======-->
        <section class="shop-details-section pt-120 pb-80">
            <div class="container">
                <div class="shop-details-wrapper">
                    <div class="row">
                        <div class="col-xl-6">
                            <!--=== Product Gallery ===-->
                            <div class="product-gallery-area mb-50">
                                <div class="product-big-slider mb-30">
                                    <div class="product-img">
                                        @php
                                            // Lấy ảnh chính từ collection images
                                            $primaryImage = $product->images->firstWhere('is_primary', 1);
                                        @endphp
                                        @if($primaryImage)
                                            <a href="{{ asset($primaryImage->image_path) }}" class="img-popup">
                                                <img src="{{ asset($primaryImage->image_path) }}" alt="{{ $primaryImage->alt }}"
                                                    width="500px">
                                            </a>
                                        @else
                                            <img src="{{ asset('images/no-image.jpg') }}" alt="Không có ảnh" width="500px">
                                        @endif
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="product-info mb-50">
                                <h4 class="title">{{ $product->name }}</h4>
                                <div class="product-price">
                                    <span class="price prev-price"><span
                                            class="currency">$</span>{{ $product->original_price }}</span>
                                    <span class="price new-price"><span
                                            class="currency">$</span>{{ $product->discounted_price }}</span>
                                </div>
                                <p>{{ $product->description }}</p>
                                <div class="product-cart-variation">
                                    <ul>
                                        <li>
                                            <div class="quantity-input">
                                                <button class="quantity-down"><i class="far fa-minus"></i></button>
                                                <input class="quantity" type="text" value="1" name="quantity">
                                                <button class="quantity-up"><i class="far fa-plus"></i></button>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#" class="theme-btn style-one">Add To Cart</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="additional-information-wrapper" data-aos="fade-up" data-aos-delay="30"
                        data-aos-duration="1000">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="additional-info-box mb-40">
                                    <h3>Additional Information:</h3>
                                    <ul>
                                        <li>Fabric type <span>Georgette</span></li>
                                        <li>Care instructions:<span>Machine Wash</span></li>
                                        <li>Occasion type: <span>Casual</span></li>
                                        <li>Sleeve type: <span>Long Sleeve</span></li>
                                        <li>Pattern:<span>Solid</span></li>
                                        <li>Closure type: <span>Georgette</span></li>
                                        <li>Country of Origin<span>Bangladesh</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="description-wrapper mb-40">
                                    <div class="pesco-tabs style-two mb-50">
                                        <ul class="nav nav-tabs">
                                            <li>
                                                <button class="nav-link active" data-bs-toggle="tab"
                                                    data-bs-target="#description">Description</button>
                                            </li>
                                            <li>
                                                <button class="nav-link" data-bs-toggle="tab"
                                                    data-bs-target="#reviews">Reviews</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="description">
                                            <h4>Description</h4>
                                            <p>Cargo shorts: Rugged, casual shorts with multiple pockets for utility, often
                                                in khaki or olive green.
                                                Sundress with drawstring: A breezy, summery dress with a flowy skirt, often
                                                made from light, patterned fabric. It has a drawstring waist for a
                                                comfortable, adjustable fit. Designed for practicality, cargo shorts boast
                                                numerous pockets on the legs and hips. everyday wear for someone who needs
                                                to carry a lot.</p>
                                            <h4>Features</h4>
                                            <ul class="list">
                                                <li>Function First</li>
                                                <li>Summer Breeze </li>
                                                <li>Casual and Rugged</li>
                                                <li>Possible Interpretations</li>
                                            </ul>
                                        </div>
                                        <div class="tab-pane fade" id="reviews">
                                            <div class="pesco-comment-area mb-80">
                                                <h4>Total Reviews (90)</h4>
                                                <ul>
                                                    <li class="comment">
                                                        <div class="pesco-reviews-item">
                                                            <div class="author-thumb-info">
                                                                <div class="author-thumb">
                                                                    <img src="assets/images/products/review-1.jpg"
                                                                        alt="Auhthor">
                                                                </div>
                                                                <div class="author-info">
                                                                    <h5>Amelia Rodriguez</h5>
                                                                    <div class="author-meta">
                                                                        <ul class="ratings">
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                        </ul>
                                                                        <span>20 March 2024</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="author-review-content">
                                                                <p>Men's Slim Fit Dress Shirt is an excellent choice for
                                                                    those who value modern style and impeccable tailoring.
                                                                    Crafted from a high-quality blend of cotton and
                                                                    polyester, this shirt offers a smooth, wrinkle-resistant
                                                                    finish that stays crisp throughout the day.</p>
                                                            </div>
                                                            <a href="#" class="reply"><i
                                                                    class="fas fa-reply-all"></i>Reply</a>
                                                        </div>
                                                    </li>
                                                    <li class="comment">
                                                        <div class="pesco-reviews-item">
                                                            <div class="author-thumb-info">
                                                                <div class="author-thumb">
                                                                    <img src="assets/images/products/review-2.jpg"
                                                                        alt="Auhthor">
                                                                </div>
                                                                <div class="author-info">
                                                                    <h5>Amelia Rodriguez</h5>
                                                                    <div class="author-meta">
                                                                        <ul class="ratings">
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                            <li><i class="fas fa-star"></i></li>
                                                                        </ul>
                                                                        <span>20 March 2024</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="author-review-content">
                                                                <p>Men's Slim Fit Dress Shirt is an excellent choice for
                                                                    those who value modern style and impeccable tailoring.
                                                                    Crafted from a high-quality blend of cotton and
                                                                    polyester, this shirt offers a smooth, wrinkle-resistant
                                                                    finish that stays crisp throughout the day.</p>
                                                            </div>
                                                            <a href="#" class="reply"><i
                                                                    class="fas fa-reply-all"></i>Reply</a>
                                                        </div>
                                                        <ul class="reviews-reply">
                                                            <li class="comment">
                                                                <div class="pesco-reviews-item">
                                                                    <div class="author-thumb-info">
                                                                        <div class="author-thumb">
                                                                            <img src="assets/images/products/review-3.jpg"
                                                                                alt="Auhthor">
                                                                        </div>
                                                                        <div class="author-info">
                                                                            <h5>Amelia Rodriguez</h5>
                                                                            <div class="author-meta">
                                                                                <ul class="ratings">
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                    <li><i class="fas fa-star"></i></li>
                                                                                </ul>
                                                                                <span>20 March 2024</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="author-review-content">
                                                                        <p>Men's Slim Fit Dress Shirt is an excellent choice
                                                                            for those who value modern style and impeccable
                                                                            tailoring. Crafted from a high-quality blend of
                                                                            cotton and polyester, this shirt offers a
                                                                            smooth, wrinkle-resistant finish that stays
                                                                            crisp throughout the day.</p>
                                                                    </div>
                                                                    <a href="#" class="reply"><i
                                                                            class="fas fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reviews-contact-area">
                                                <h4>Write Comment</h4>
                                                <ul class="ratings rating5 mb-40">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><a href="#">(10)</a></li>
                                                </ul>
                                                <form class="pesco-contact-form">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Name"
                                                                    class="form_control" name="name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <input type="email" placeholder="Email"
                                                                    class="form_control" name="Email" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <textarea class="form_control" placeholder="Write Reviews" name="message" cols="5" rows="10"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <button class="theme-btn style-one">Submit Review</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--====== End Shop Details Section ======-->
        <!--====== Related Product Section ======-->
        <section class="releted-product-section pb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-title mb-50">
                            <h2>Related Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($relatedProducts as $relatedProduct)
                        <div class="col-md-3">
                            <div class="product-item">
                                <div class="product-thumbnail">
                                    <a href="{{ route('details', ['slug' => $relatedProduct->slug]) }}">
                                        @if($relatedProduct->images->isNotEmpty())
                                            <img src="{{ asset($relatedProduct->images->first()->image_path) }}" 
                                                 alt="{{ $relatedProduct->name }}">
                                        @endif
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h4 class="title">
                                        <a href="{{ route('details', ['slug' => $relatedProduct->slug]) }}">
                                            {{ $relatedProduct->name }}
                                        </a>
                                    </h4>
                                    <div class="product-price">
                                        <span class="price">
                                            <span class="currency">$</span>{{ number_format($relatedProduct->price, 0, ',', '.') }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!--====== End Related Products Section ======-->
        <!--====== Start Newsletter Sections  ======-->
        <section class="newsletter-section pb-95">
            <div class="container">
                <!--=== Newsletter Wrapper  ===-->
                <div class="newsletter-wrapper white-bg p-r z-1" data-aos="fade-up" data-aos-duration="1000">
                    <div class="newsletter-shape pattern-one"><span><img src="assets/images/newsletter/pattern-1.png"
                                alt="Pattern Shape"></span></div>
                    <div class="newsletter-shape pattern-two"><span><img src="assets/images/newsletter/pattern-2.png"
                                alt="Pattern Shape"></span></div>
                    <div class="newsletter-shape shape-one"><span><img src="assets/images/newsletter/shape-1.png"
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
                                <img src="assets/images/newsletter/newsletter-1.png" alt="Image">
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
