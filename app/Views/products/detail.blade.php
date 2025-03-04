@extends('layout')

@section('title')
Detail
@endsection

@section('content')
<!-- Breadcrumb -->
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>{{ $productById->name }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Product -->
<section class="section-product padding-t-100">
    <div class="container">
        <div class="row mb-minus-24" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <div class="col-xxl-4 col-xl-5 col-md-6 col-12 mb-24">
                <div class="vehicle-detail-banner banner-content clearfix">
                    <div class="banner-slider">
                        <div class="slider slider-for">
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-1"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-2"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-3"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-1"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-2"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-3"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-1"
                                        class="product-image">
                                </div>
                            </div>
                            <div class="slider-banner-image">
                                <div class="zoom-image-hover">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-2"
                                        class="product-image">
                                </div>
                            </div>
                        </div>
                        <div class="slider slider-nav thumb-image">
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-1">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-2">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-3">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-1">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-2">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-3">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-1">
                                </div>
                            </div>
                            <div class="thumbnail-image">
                                <div class="thumbImg">
                                    <img src="{{ APP_URL . $productById->image }}" alt="product-tab-2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-8 col-xl-7 col-md-6 col-12 mb-24">
                <div class="cr-size-and-weight-contain">
                    <h2 class="heading">{{ $productById->name }}</h2>
                    <p style="text-align: justify;">{{ $productById->description }}</p>
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
                    <div class="list">
                        <ul>
                            <li>
                                <label>Category
                                    <span>:</span>
                                </label>
                                @foreach ($categories as $category)
                                @if ($category->id == $productById->category_id)
                                {{ $category->name }}
                                @endif
                                @endforeach
                            </li>
                            <li><label>Stock <span>:</span></label>{{ number_format($productById->stock) }}</li>
                            <li><label>Status <span>:</span></label>{{ $productById->status }}</li>
                        </ul>
                    </div>

                    <div class="cr-product-price">
                        <span class="new-price">{{ number_format($productById->price) }}VND</span>
                    </div>

                    <?php if (isset($_SESSION['add_to_cart_error'])): ?>
                        <div class="cr-product-price">
                            <div class="alert alert-danger">
                                <?php
                                echo $_SESSION['add_to_cart_error'];
                                unset($_SESSION['add_to_cart_error']); // Xóa session sau khi hiển thị
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['add_to_cart_success'])): ?>
                        <div class="cr-product-price">
                            <div class="alert alert-success">
                                <?php
                                echo $_SESSION['add_to_cart_success'];
                                unset($_SESSION['add_to_cart_success']); // Xóa session sau khi hiển thị
                                ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="cr-add-card">
                        @if ($productById->stock == 0 && $productById->status == 'unavailable')

                        <div class="cr-qty-main">
                            <input type="text" placeholder="." value="1" minlength="1" maxlength="20"
                                class="quantity" disabled>
                            <button type="button" class="plus" disabled>+</button>
                            <button type="button" class="minus" disabled>-</button>
                        </div>
                        <div class="cr-add-button">
                            <button type="button" class="cr-button cr-shopping-bag" disabled
                                style="background-color: gray; text-decoration:none">Add to cart</button>
                        </div>

                        @else

                        <form action="{{ APP_URL . 'product/detail/' . $productById->id}}" method="post">

                            <span class="d-flex" style="gap: 10px; align-items: center;">
                                <div style="width: 100px; flex: 1;">
                                    <input type="text" value="{{ $data['quantity'] }}" class="quantity" name="quantity" placeholder="1"
                                        style="width: 100%; box-sizing: border-box; text-align: center;">
                                    <input type="number" name="unit_price" value="{{ number_format($productById->price) }}" hidden>
                                </div>
                                <div class="cr-add-button" style="width: 100px; flex: 1;">
                                    <button class="cr-button cr-shopping-bag" type="submit" style="width: 100%;">Add to cart</button>
                                </div>
                            </span>

                        </form>

                        @endif

                        <div class="cr-card-icon">
                            <a href="javascript:void(0)" class="wishlist">
                                <i class="ri-heart-line"></i>
                            </a>
                            <a class="model-oraganic-product" data-bs-toggle="modal" href="#quickview" role="button">
                                <i class="ri-eye-line"></i>
                            </a>
                        </div>

                    </div>
                    @if ($productById->stock == 0 && $productById->status == 'unavailable')
                    <div class="mt-30">
                        <a href="{{ APP_URL . 'products' }}" class="alert alert-danger">
                            This product is out of stock now. Click <span class="text-success">here</span> to see more products!
                        </a>
                    </div>
                    @else
                    @endif
                </div>
            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <div class="col-12">
                <div class="cr-paking-delivery">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                data-bs-target="#description" type="button" role="tab" aria-controls="description"
                                aria-selected="true">Description</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="additional-tab" data-bs-toggle="tab"
                                data-bs-target="#additional" type="button" role="tab" aria-controls="additional"
                                aria-selected="false">Information</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="review-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button" role="tab" aria-controls="review"
                                aria-selected="false">Review</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="description" role="tabpanel"
                            aria-labelledby="description-tab">
                            <div class="cr-tab-content">
                                <div class="cr-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente odio, error dolore vero temporibus consequatur, nobis veniam odit
                                        dignissimos consectetur quae in perferendis
                                        doloribusdebitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                        perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                        ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                        laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                </div>
                                <h4 class="heading">Packaging & Delivery</h4>
                                <div class="cr-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                        ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                        laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-tab">
                            <div class="cr-tab-content">
                                <div class="cr-description">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente
                                        doloribus debitis corporis, eaque dicta, repellat amet, illum adipisci vel
                                        perferendis dolor! Quis vel consequuntur repellat distinctio rem. Corrupti
                                        ratione alias odio, error dolore temporibus consequatur, nobis veniam odit
                                        laborum dignissimos consectetur quae vero in perferendis provident quis.</p>
                                </div>
                                <div class="list">
                                    <ul>
                                        <li><label>Brand <span>:</span></label>ESTA BETTERU CO</li>
                                        <li><label>Flavour <span>:</span></label>Super Saver Pack</li>
                                        <li><label>Diet Type <span>:</span></label>Vegetarian</li>
                                        <li><label>Weight <span>:</span></label>200 Grams</li>
                                        <li><label>Speciality <span>:</span></label>Gluten Free, Sugar Free</li>
                                        <li><label>Info <span>:</span></label>Egg Free, Allergen-Free</li>
                                        <li><label>Items <span>:</span></label>1</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div class="cr-tab-content-from">
                                <div class="post">
                                    <div class="content">
                                        <img src="http://localhost/PHP2/asm/image/review/1.jpg" alt="review">
                                        <div class="details">
                                            <span class="date">Jan 08, 2024</span>
                                            <span class="name">Oreo Noman</span>
                                        </div>
                                        <div class="cr-t-review-rating">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                        adipisci vel
                                        perferendis dolor! quae vero in perferendis provident quis.</p>
                                    <div class="content mt-30">
                                        <img src="http://localhost/PHP2/asm/image/review/2.jpg" alt="review">
                                        <div class="details">
                                            <span class="date">Mar 22, 2024</span>
                                            <span class="name">Lina Wilson</span>
                                        </div>
                                        <div class="cr-t-review-rating">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-line"></i>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error in vero
                                        sapiente doloribus debitis corporis, eaque dicta, repellat amet, illum
                                        adipisci vel
                                        perferendis dolor! quae vero in perferendis provident quis.</p>
                                </div>

                                <h4 class="heading">Add a Review</h4>
                                <form action="javascript:void(0)">
                                    <div class="cr-ratting-star">
                                        <span>Your rating :</span>
                                        <div class="cr-t-review-rating">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-line"></i>
                                            <i class="ri-star-s-line"></i>
                                            <i class="ri-star-s-line"></i>
                                        </div>
                                    </div>
                                    <div class="cr-ratting-input">
                                        <input name="your-name" placeholder="Name" type="text">
                                    </div>
                                    <div class="cr-ratting-input">
                                        <input name="your-email" placeholder="Email*" type="email" required="">
                                    </div>
                                    <div class="cr-ratting-input form-submit">
                                        <textarea name="your-commemt" placeholder="Enter Your Comment"></textarea>
                                        <button class="cr-button" type="submit" value="Submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Popular products -->
<section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="1000"
    data-aos-delay="400">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-30">
                    <div class="cr-banner">
                        <h2>Popular Products</h2>
                    </div>
                    <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et viverra maecenas accumsan lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="cr-popular-product">
                    @foreach ($products as $product)
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
                                    @foreach ($categories as $category)
                                    @if ($category->id == $product->category_id)
                                    <a href="{{ APP_URL . 'products/' . strtolower($category->name)  }}">
                                        {{ $category->name }}
                                    </a>
                                    @endif
                                    @endforeach
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <p>(4.5)</p>
                                    </div>
                                </div>
                                <a href="{{ APP_URL . 'product/detail/' . $product->id }}" class="title">{{ $product->name }}</a>
                                <p class="cr-price"><span class="new-price">{{ $product->price }}VND</span></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

@endsection