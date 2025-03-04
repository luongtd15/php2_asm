@extends('admin.layout')

@section('title', 'Edit this user')

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
                                        <h5>Edit this user</h5>
                                    </div>

                                </div>
                            </div>

                            <div class="col-sm-12">
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

                                <?php if (isset($_SESSION['user_success'])): ?>
                                    <div class="alert alert-success">
                                        <?php
                                        echo $_SESSION['user_success'];
                                        unset($_SESSION['user_success']); // Xóa session sau khi hiển thị
                                        ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Username</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Enter username" name="username" value="{{ $user->username }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>E-mail address</h6>
                                    <div class="form-group">
                                        <input type="email" class="form-control"
                                            placeholder="Enter email" name="email" value="{{ $user->email }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Role</h6>
                                    <select name="role" id="" class="form-control">
                                        <option value="admin"
                                            @selected($user->role == 'admin' ? 'selected' : '')>Admin</option>
                                        <option value="customer"
                                            @selected($user->role == 'customer' ? 'selected' : '')>Customer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Avatar</h6>
                                    <div class="form-group">
                                        <img src="{{ APP_URL . $user->avatar }}" alt="" width="100">
                                        <input type="file" class="form-control"
                                            placeholder="" name="avatar" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Phone Number</h6>
                                    <div class="form-group">
                                        <input type="text" class="form-control"
                                            placeholder="Enter phone number" name="phone_number"
                                            value="{{ $user->phone_number }}" disabled>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="cr-vendor-detail">
                                    <h6>Password</h6>
                                    <div class="form-group">
                                        <input type="password" class="form-control"
                                            placeholder="Enter password" name="password"
                                            value="{{ $user->password }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <div class="cr-page-title cr-page-title-2">
                                <div class="cr-breadcrumb">
                                    <div class="col-sm-12">
                                        <div class="cr-page-title cr-page-title-2">
                                            <button type="submit" class="cr-btn-primary">Update</button>
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