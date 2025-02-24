@extends('layout');

@section('title', 'Register');

@section('content')
<section class="section-breadcrumb">
    <div class="cr-breadcrumb-image">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cr-breadcrumb-title">
                        <h2>Register</h2>
                        <span> <a href="index.html">Home</a> - Register</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Login -->
<section class="section-login padding-tb-100">
    <div class="container">
        <div class="row d-none">
            <div class="col-lg-12">
                <div class="mb-30" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="cr-banner">
                        <h2>Login</h2>
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
                <div class="cr-login" data-aos="fade-up" data-aos-duration="2000" data-aos-delay="400">
                    <div class="form-logo">
                        <img src="assets/img/logo/logo.png" alt="logo">
                    </div>
                    <form class="cr-content-form" action="{{ APP_URL . 'register' }}" method="post">
                        <div class="form-group">
                            <label>Username*</label>
                            <input type="text" placeholder="Enter Your username" class="cr-form-control"
                                name="username">
                            <h6 class="text-danger">{{ $_SESSION['username_error'] }}</h6>
                            <?php unset($_SESSION['username_error'])   ?>
                        </div>

                        <div class="form-group">
                            <label>Phone Number*</label>
                            <input type="text" placeholder="Enter Your phone number" class="cr-form-control"
                                name="phone_number">
                            <h6 class="text-danger">{{ $_SESSION['phone_number_error'] }}</h6>
                            <?php unset($_SESSION['phone_number_error']) ?>
                        </div>

                        <div class="form-group">
                            <label>Email Address*</label>
                            <input type="email" placeholder="Enter Your Email" class="cr-form-control" name="email">
                            <h6 class="text-danger">{{ $_SESSION['email_error'] }}</h6>
                            <?php unset($_SESSION['email_error']) ?>
                        </div>

                        <div class="form-group">
                            <label>Password*</label>
                            <input type="password" placeholder="Enter Your password" class="cr-form-control" name="password">
                            <h6 class="text-danger">{{ $_SESSION['password_error'] }}</h6>
                            <?php unset($_SESSION['password_error']) ?>
                        </div>
                            
                        <div class="login-buttons">
                            <button type="submit" class="cr-button">Register</button>
                            <a href="register.html" class="link">
                                Signup?
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection