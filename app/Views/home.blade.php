@extends('layout')

@section('title')
Home
@endsection

@section('content')
<!-- Hero slider -->
<section class="section-hero padding-b-100 next">
    <div class="cr-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="cr-hero-banner cr-banner-image-two">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cr-left-side-contain slider-animation">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cr-hero-banner cr-banner-image-three">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cr-left-side-contain slider-animation">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="cr-hero-banner cr-banner-image-one">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cr-left-side-contain slider-animation">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Categories -->


<!-- Popular product -->
<section class="section-popular-product-shape padding-b-100">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30">
                    <div class="cr-banner">
                        <h2>Products</h2>
                    </div>
                    <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-content row mb-minus-24" id="MixItUpDA2FB7">
            <div class="col-xl-3 col-lg-4 col-12 mb-24">
                <div class="row mb-minus-24 sticky">

                    <div class="col-lg-12 col-sm-12 col-12 cr-product-box banner-480 mb-24">
                        <div class="cr-ice-cubes">
                            <img src="image/product/product-banner.jpg" alt="product banner">
                            <div class="cr-ice-cubes-contain">
                                <h4 class="title">Summer </h4>
                                <h5 class="sub-title">2025</h5>
                                <span>Limited Summer Edition</span>
                                <a href="" class="cr-button">Shop Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-xl-9 col-lg-8 col-12 mb-24">
                <div class="row mb-minus-24">
                    @foreach ($pagination['data'] as $product)
                    <div class="mix snack col-xxl-3 col-xl-4 col-6 cr-product-box mb-24">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="{{ APP_URL . $product->image }}" alt="product-1">
                                </div>
                                <div class="cr-side-view">
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                        role="button">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </div>
                                <a class="cr-shopping-bag" href="javascript:void(0)">
                                    <i class="ri-shopping-bag-line"></i>
                                </a>
                            </div>
                            <div class="cr-product-details">
                                <div class="cr-brand">
                                    <a href="{{ APP_URL . 'products/' . strtolower($product->category_name) }}">
                                        {{ $product->category_name }}</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <p>(4.5)</p>
                                    </div>
                                </div>
                                <a href="{{ APP_URL . 'product/detail/' . $product->id }}" class="title">
                                    {{ substr($product->name, 0, 30) 
                                    . (strlen($product->name) > 30 ? '...' : '') }}
                                </a>
                                <p class="cr-price"><span class="new-price">{{ number_format($product->price) }}VND</span>
                            </div>

                        </div>


                    </div>
                    @endforeach
                </div>
                <nav aria-label="..." class="cr-pagination">
                    <ul class="pagination">
                        <li class="page-item {{ $pagination['current_page'] == 1 ? 'disabled' : '' }}">
                            <a class="page-link" 
                               href="?q={{ $_GET['q'] ?? '' }}&page={{ $pagination['current_page'] - 1 }}" 
                               {{ $pagination['current_page'] == 1 ? 'tabindex="-1" aria-disabled="true"' : '' }}>
                                Previous
                            </a>
                        </li>

                        @for ($i = 1; $i <= $pagination['total_pages']; $i++)
                        <li class="page-item">
                            <a href="?q={{ $_GET['q'] ?? '' }}&page={{ $i }}" 
                            class="{{ $i == $pagination['current_page'] ? 'active' : '' }} page-link">
                                {{ $i }}
                            </a>
                        </li>
                        @endfor
                        
                        <li class="page-item {{ $pagination['current_page'] == $pagination['total_pages'] ? 'disabled' : '' }}">
                            <a class="page-link" 
                               href="?q={{ $_GET['q'] ?? '' }}&page={{ $pagination['current_page'] + 1 }}" 
                               {{ $pagination['current_page'] == $pagination['total_pages'] ? 'tabindex="-1" aria-disabled="true"' : '' }}>
                                Next
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Product banner -->
<section class="section-product-banner padding-b-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cr-banner-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="cr-product-banner-image">
                                <img src="image/product-banner/1.jpg" alt="product-banner">
                                <div class="cr-product-banner-contain">
                                    <h5>Healthy <br> Bakery Products</h5>
                                    <p><span class="percent">30%</span> Off <span class="text">on first order</span>
                                    </p>
                                    <div class="cr-product-banner-buttons">
                                        <a href="shop-left-sidebar.html" class="cr-button">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="cr-product-banner-image">
                                <img src="image/product-banner/2.jpg" alt="product-banner">
                                <div class="cr-product-banner-contain">
                                    <h5>Fresh <br>Snacks & Sweets</h5>
                                    <p><span class="percent">20%</span> Off <span class="text">on first order</span>
                                    </p>
                                    <div class="cr-product-banner-buttons">
                                        <a href="shop-left-sidebar.html" class="cr-button">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-aos="fade-up" data-aos-duration="2000">
                            <div class="cr-product-banner-image">
                                <img src="image/product-banner/3.jpg" alt="product-banner">
                                <div class="cr-product-banner-contain">
                                    <h5>Fresh & healthy <br> Organic Fruits</h5>
                                    <p><span class="percent">35%</span> Off <span class="text">on first order</span>
                                    </p>
                                    <div class="cr-product-banner-buttons">
                                        <a href="shop-left-sidebar.html" class="cr-button">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section class="section-services padding-b-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cr-services-border" data-aos="fade-up" data-aos-duration="2000">
                    <div class="cr-service-slider swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="cr-services">
                                    <div class="cr-services-image">
                                        <i class="ri-red-packet-line"></i>
                                    </div>
                                    <div class="cr-services-contain">
                                        <h4>Product Packing</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cr-services">
                                    <div class="cr-services-image">
                                        <i class="ri-customer-service-2-line"></i>
                                    </div>
                                    <div class="cr-services-contain">
                                        <h4>24X7 Support</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cr-services">
                                    <div class="cr-services-image">
                                        <i class="ri-truck-line"></i>
                                    </div>
                                    <div class="cr-services-contain">
                                        <h4>Delivery in 5 Days</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="cr-services">
                                    <div class="cr-services-image">
                                        <i class="ri-money-dollar-box-line"></i>
                                    </div>
                                    <div class="cr-services-contain">
                                        <h4>Payment Secure</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Deal -->


<!-- Popular product -->
<section class="section-popular margin-b-100">
    <div class="container">
        <div class="row">
            <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="2000">

                <div class="cr-twocolumns-product">
                    @foreach ($springCollectionProducts as $product)
                    <div class="slick-slide">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="{{ APP_URL . $product->image }}" alt="product-1">
                                </div>
                                <div class="cr-side-view">
                                    <a href="javascript:void(0)" class="wishlist">
                                        <i class="ri-heart-line"></i>
                                    </a>
                                    <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview"
                                        role="button">
                                        <i class="ri-eye-line"></i>
                                    </a>
                                </div>
                                <a class="cr-shopping-bag" href="javascript:void(0)">
                                    <i class="ri-shopping-bag-line"></i>
                                </a>
                            </div>
                            <div class="cr-product-details">
                                <div class="cr-brand">
                                    <a href="{{ APP_URL . 'products/' . strtolower($product->category_name) }}">{{ $product->category_name }}</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <p>(4.5)</p>
                                    </div>
                                </div>
                                <a href="{{ APP_URL . 'product/detail/' . $product->id }}" class="title">
                                    {{ substr($product->name, 0, 30) 
                                    . (strlen($product->name) > 30 ? '...' : '') }}
                                </a>
                                <p class="cr-price"><span class="new-price">{{ $product->price }}VND</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
            <div class="col-xxl-5 col-xl-6 col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="2000">
                <div class="cr-products-rightbar">
                    <img src="image/product/products-rightview.jpg" alt="products-rightview">
                    <div class="cr-products-rightbar-content">
                        <h4>Organic & Healthy <br> Vegetables</h4>
                        <div class="cr-off">
                            <span>25% <code>OFF</code></span>
                        </div>
                        <div class="rightbar-buttons">
                            <a href="shop-left-sidebar.html" class="cr-button">
                                shop now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog -->


<!-- Model -->
<div class="modal fade quickview-modal" id="quickview" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered cr-modal-dialog">
        <div class="modal-content">
            <button type="button" class="cr-close-model btn-close" data-bs-dismiss="modal"
                aria-label="Close"></button>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12">
                        <div class="zoom-image-hover modal-border-image">
                            <img src="image/product/tab-1.jpg" alt="product-tab-2" class="product-image">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="cr-size-and-weight-contain">
                            <h2 class="heading">Peach Seeds Of Change Oraganic Quinoa, Brown fruit</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                since the 1900s,</p>
                        </div>
                        <div class="cr-size-and-weight">
                            <div class="cr-review-star">
                                <div class="cr-star">
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                    <i class="ri-star-fill"></i>
                                </div>
                                <p>( 75 Review )</p>
                            </div>
                            <div class="cr-product-price">
                                <span class="new-price">$120.25</span>
                                <span class="old-price">$123.25</span>
                            </div>
                            <div class="cr-size-weight">
                                <h5><span>Size</span>/<span>Weight</span> :</h5>
                                <div class="cr-kg">
                                    <ul>
                                        <li class="active-color">500gm</li>
                                        <li>1kg</li>
                                        <li>2kg</li>
                                        <li>5kg</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="cr-add-card">
                                <div class="cr-qty-main">
                                    <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                        class="quantity">
                                    <button type="button" id="add_model" class="plus">+</button>
                                    <button type="button" id="sub_model" class="minus">-</button>
                                </div>
                                <div class="cr-add-button">
                                    <button type="button" class="cr-button">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection