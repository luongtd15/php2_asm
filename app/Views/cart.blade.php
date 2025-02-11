@extends('layout');

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
                        <span> <a href="index.html">Home</a> / Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cart -->
<section class="section-cart padding-t-100">
    <div class="container">
        <div class="row d-none">
            <div class="col-lg-12">
                <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
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
        <div class="row">
            <div class="col-12">
                <div class="cr-cart-content" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="row">
                        <form action="#">
                            <div class="cr-table-content">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>price</th>
                                            <th class="text-center">Quantity</th>
                                            <th>Total</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="cr-cart-name">
                                                <a href="javascript:void(0)">
                                                    <img src="http://localhost/PHP2/asm/image/product/1.jpg" alt="product-1"
                                                        class="cr-cart-img">
                                                    Organic Lemon
                                                </a>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">$56.00</span>
                                            </td>
                                            <td class="cr-cart-qty">
                                                <div class="cart-qty-plus-minus">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="text" placeholder="." value="1" minlength="1"
                                                        maxlength="20" class="quantity">
                                                    <button type="button" class="minus">-</button>
                                                </div>
                                            </td>
                                            <td class="cr-cart-subtotal">$56.00</td>
                                            <td class="cr-cart-remove">
                                                <a href="javascript:void(0)">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cr-cart-name">
                                                <a href="javascript:void(0)">
                                                    <img src="http://localhost/PHP2/asm/image/product/2.jpg" alt="product-1"
                                                        class="cr-cart-img">
                                                    Apple Juice
                                                </a>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">$75.00</span>
                                            </td>
                                            <td class="cr-cart-qty">
                                                <div class="cart-qty-plus-minus">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="text" placeholder="." value="1" minlength="1"
                                                        maxlength="20" class="quantity">
                                                    <button type="button" class="minus">-</button>
                                                </div>
                                            </td>
                                            <td class="cr-cart-subtotal">$75.00</td>
                                            <td class="cr-cart-remove">
                                                <a href="javascript:void(0)">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cr-cart-name">
                                                <a href="javascript:void(0)">
                                                    <img src="http://localhost/PHP2/asm/image/product/3.jpg" alt="product-1"
                                                        class="cr-cart-img">
                                                    Watermelon 5kg Pack
                                                </a>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">$48.00</span>
                                            </td>
                                            <td class="cr-cart-qty">
                                                <div class="cart-qty-plus-minus">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="text" placeholder="." value="1" minlength="1"
                                                        maxlength="20" class="quantity">
                                                    <button type="button" class="minus">-</button>
                                                </div>
                                            </td>
                                            <td class="cr-cart-subtotal">$48.00</td>
                                            <td class="cr-cart-remove">
                                                <a href="javascript:void(0)">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cr-cart-name">
                                                <a href="javascript:void(0)">
                                                    <img src="http://localhost/PHP2/asm/image/product/4.jpg" alt="product-1"
                                                        class="cr-cart-img">
                                                    Pomegranate 5 kg pack
                                                </a>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">$90.00</span>
                                            </td>
                                            <td class="cr-cart-qty">
                                                <div class="cart-qty-plus-minus">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="text" placeholder="." value="1" minlength="1"
                                                        maxlength="20" class="quantity">
                                                    <button type="button" class="minus">-</button>
                                                </div>
                                            </td>
                                            <td class="cr-cart-subtotal">$90.00</td>
                                            <td class="cr-cart-remove">
                                                <a href="javascript:void(0)">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="cr-cart-name">
                                                <a href="javascript:void(0)">
                                                    <img src="http://localhost/PHP2/asm/image/product/5.jpg" alt="product-1"
                                                        class="cr-cart-img">
                                                    Organic Peach Fruits
                                                </a>
                                            </td>
                                            <td class="cr-cart-price">
                                                <span class="amount">$50.00</span>
                                            </td>
                                            <td class="cr-cart-qty">
                                                <div class="cart-qty-plus-minus">
                                                    <button type="button" class="plus">+</button>
                                                    <input type="text" placeholder="." value="1" minlength="1"
                                                        maxlength="20" class="quantity">
                                                    <button type="button" class="minus">-</button>
                                                </div>
                                            </td>
                                            <td class="cr-cart-subtotal">$50.00</td>
                                            <td class="cr-cart-remove">
                                                <a href="javascript:void(0)">
                                                    <i class="ri-delete-bin-line"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="cr-cart-update-bottom">
                                        <a href="javascript:void(0)" class="cr-links">Continue Shopping</a>
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
    </div>
</section>

<!-- Popular products -->
<section class="section-popular-products padding-tb-100" data-aos="fade-up" data-aos-duration="2000"
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
                    <div class="slick-slide">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="http://localhost/PHP2/asm/image/product/9.jpg" alt="product-1">
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
                                    <a href="shop-left-sidebar.html">Snacks</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <p>(4.5)</p>
                                    </div>
                                </div>
                                <a href="product-left-sidebar.html" class="title">Best snakes with hazel nut
                                    mix pack 200gm</a>
                                <p class="cr-price"><span class="new-price">$120.25</span> <span
                                        class="old-price">$123.25</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="http://localhost/PHP2/asm/image/product/10.jpg" alt="product-1">
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
                                    <a href="shop-left-sidebar.html">Snacks</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <p>(5.0)</p>
                                    </div>
                                </div>
                                <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut
                                    mix 250gm
                                    pack</a>
                                <p class="cr-price"><span class="new-price">$100.00</span> <span
                                        class="old-price">$110.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="http://localhost/PHP2/asm/image/product/1.jpg" alt="product-1">
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
                                    <a href="shop-left-sidebar.html">Snacks</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <p>(4.5)</p>
                                    </div>
                                </div>
                                <a href="product-left-sidebar.html" class="title">Best snakes with hazel nut
                                    mix pack 200gm</a>
                                <p class="cr-price"><span class="new-price">$120.25</span> <span
                                        class="old-price">$123.25</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="http://localhost/PHP2/asm/image/product/2.jpg" alt="product-1">
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
                                    <a href="shop-left-sidebar.html">Snacks</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <p>(5.0)</p>
                                    </div>
                                </div>
                                <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut
                                    mix 250gm
                                    pack</a>
                                <p class="cr-price"><span class="new-price">$100.00</span> <span
                                        class="old-price">$110.00</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="slick-slide">
                        <div class="cr-product-card">
                            <div class="cr-product-image">
                                <div class="cr-image-inner zoom-image-hover">
                                    <img src="http://localhost/PHP2/asm/image/product/3.jpg" alt="product-1">
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
                                    <a href="shop-left-sidebar.html">Snacks</a>
                                    <div class="cr-star">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <p>(5.0)</p>
                                    </div>
                                </div>
                                <a href="product-left-sidebar.html" class="title">Sweet snakes crunchy nut
                                    mix 250gm
                                    pack</a>
                                <p class="cr-price"><span class="new-price">$100.00</span> <span
                                        class="old-price">$110.00</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection