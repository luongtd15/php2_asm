@extends('admin.layout')

@section('title', 'User List')

@section('content')
<div class="cr-main-content">
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>User List</h5>
                <a href="{{ APP_URL . 'admin/users/add'}}" class="cr-btn outline-btn color-success">Add a new user</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="cr-card" id="dealtbl">
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

                    <div class="cr-card-content card-default">
                        <div class="deal-table">
                            <div class="table-responsive">
                                <table id="vendor-list" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Avatar</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td class="token">{{ $user->id }}</td>
                                            <td>
                                                <img class="cat-thumb" src="{{ APP_URL . $user->avatar }}"
                                                    alt="clients Image">
                                            </td>
                                            <td>
                                                <span class="name">
                                                    {{ $user->username }}
                                                </span>
                                            </td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->phone_number }}</td>
                                            <td>
                                                {!!$user->role == 'admin'
                                                ? '<span class="color-secondary">admin</span>'
                                                : '<span class="text-info">customer</span>'
                                                !!}
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">

                                                    <div class="flex-fill">
                                                        <a
                                                            href="{{ APP_URL . 'admin/user/edit/' . $user->id }}"
                                                            class="cr-btn outline-btn color-primary w-100">Edit</a>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <form
                                                            action="{{ APP_URL . 'admin/user/delete/' . $user->id }}" method="post">
                                                            <button type="submit"
                                                                class="cr-btn outline-btn color-danger w-100" onclick="return confirm('Sure?')" type="submit">Delete</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection