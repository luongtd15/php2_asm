@extends('admin.layout')

@section('title', 'Add a new user')

@section('content')
<div class="cr-main-content">
    <div class="container-fluid">

        <form class="cr-profile-add" method="post" enctype="multipart/form-data">

            <div class="col-xxl-12 col-xl-12 col-md-6">
                <div class="cr-card vendor-overview vendor-profile">
                    <div class="cr-card-content cr-card-vendor vendor-details mb-m-30">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="cr-page-title cr-page-title-2">
                                    <div class="cr-breadcrumb">
                                        <h5>Add new user</h5>

                                    </div>

                                </div>
                            </div>

                            <?php if (isset($_SESSION['user_error'])): ?>
                                <div class="alert alert-danger">
                                    @foreach ($_SESSION['user_error'] as $error)
                                    <ul>
                                        <li>{{ $error }}</li>
                                    </ul>
                                    <?php
                                    unset($_SESSION['user_error']); // Xóa session sau khi hiển thị
                                    ?>
                                    @endforeach
                                </div>
                            <?php endif; ?>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Username</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Enter username" name="username"
                                            value="{{ $_SESSION['user_recent_data']['username'] }}">
                                        <?php unset($_SESSION['user_recent_data']['username']) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>E-mail address</h6>

                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                            placeholder="Enter email" name="email"
                                            value="{{ $_SESSION['user_recent_data']['email'] }}">
                                        <?php unset($_SESSION['user_recent_data']['email']) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Role</h6>
                                    <select name="role" id="" class="form-control">
                                        <option value="admin">Admin</option>
                                        <option value="customer">Customer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Avatar</h6>
                                    <div class="form-group">
                                        <input type="file" class="form-control"
                                            placeholder="" name="avatar">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Phone Number</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Enter phone number" name="phone_number"
                                            value="{{ $_SESSION['user_recent_data']['phone_number'] }}">
                                        <?php unset($_SESSION['user_recent_data']['phone_number']) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            placeholder="Enter password" name="password">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <div class="cr-page-title cr-page-title-2">
                                <div class="cr-breadcrumb">
                                    <div class="col-sm-12">
                                        <div class="cr-page-title cr-page-title-2">
                                            <button type="submit" class="cr-btn-primary">Add</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection