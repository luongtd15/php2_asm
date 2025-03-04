@extends('layout')

@section('title')
Cart
@endsection

@section('content')
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>Cart</h2>
                        <span> <a href="index.html">Home</a> - Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cart -->
<section class="section-cart padding-tb-50">
    <div class="container">
        <div class="row d-none">
            <div class="col-lg-12">
                <div class="mb-30" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="cr-banner">
                        <h2>Cart</h2>
                    </div>
                    <div class="cr-banner-sub-title">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore lacus vel facilisis. </p>
                    </div>
                </div>
            </div>
        </div>
        @if($productsInCart)
        <div class="row">
            <div class="col-12">
                <div class="cr-cart-content" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <div class="row">
                        @isset($errors)
                        <div class="alert alert-danger">
                            {{ $errors['quantity'] }}
                        </div>
                        @endisset
                        <form action="" method="post">
                            <div class="cr-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>price (VND)</th>
                                            <th>stock (kg)</th>
                                            <th>Quantity (kg)</th>
                                            <th>Total (VND)</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($productsInCart as $productInCart)
                                        <tr>
                                            <td class="cr-cart-name">
                                                <a href="javascript:void(0)">
                                                    <img src="{{ APP_URL . $productInCart->image }}" alt="product-1"
                                                        class="cr-cart-img">
                                                    {{ $productInCart->name }}
                                                </a>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">{{ number_format($productInCart->unit_price) }}</span>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">{{ number_format($productInCart->stock) }}</span>
                                            </td>
                                            <td>
                                                <form action="{{ APP_URL . 'cart' }}" method="post">
                                                    <input type="hidden" name="product_id"
                                                        value="{{ $productInCart->id }}">
                                                    <div style="width: 100px;">
                                                        <input type="number" name="quantity"
                                                            value="{{ $productInCart->quantity }}" min="1"
                                                            style="width: 100%; box-sizing: border-box;"
                                                            onchange="this.form.submit()">
                                                    </div>
                                                </form>
                                            </td>

                                            <td class="cr-cart-subtotal">{{ number_format($productInCart->total_price) }}</td>
                                            <td class="cr-cart-remove">
                                                <a href="{{ APP_URL }}">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cr-cart-update-bottom">
                                        <a href="{{ APP_URL . 'products' }}" class="cr-links">Continue Shopping</a>
                                        <a href="http://localhost/PHP2/asm/checkout" class="cr-button">
                                            Check Out
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="alert alert-info">
                Your cart is empty. Click <a href="{{ APP_URL . 'products' }}">here</a> to buy somethings.
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-cart-update-bottom">
                        <a href="{{ APP_URL . 'products' }}" class="cr-links">Continue Shopping</a>
                        <a href="http://localhost/PHP2/asm/checkout" class="cr-button">
                            Check Out
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>

<section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="500"
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