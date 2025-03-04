@extends('admin.layout')

@section('title', 'Product List')

@section('content')
<div class="cr-main-content">
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>Product List</h5>
                <a href="{{ APP_URL . 'admin/products/add' }}"
                    class="cr-btn outline-btn color-success">Add a new product</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="cr-card card-default product-list">
                    <div class="cr-card-content ">

                        <?php if (isset($_SESSION['product_success'])): ?>
                            <div class="alert alert-success">
                                <?php
                                echo $_SESSION['product_success'];
                                unset($_SESSION['product_success']); // Xóa session sau khi hiển thị
                                ?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['product_error'])): ?>
                            <div class="alert alert-danger">
                                @foreach ($_SESSION['product_error'] as $error)
                                <ul>
                                    <li>{{ $error }}</li>
                                </ul>
                                <?php
                                unset($_SESSION['product_error']); // Xóa session sau khi hiển thị
                                ?>
                                @endforeach
                            </div>
                        <?php endif; ?>

                        <div class="table-responsive">
                            <table id="product_list" class="table" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Category</th>
                                        <th>Name</th>
                                        <th>Price (VND)</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Created at</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td>
                                                <img class="tbl-thumb" src="{{ APP_URL . $product->image }}"
                                                    alt="Product Image">
                                            </td>
                                            <td>{{ $product->category_name }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->stock }}</td>

                                            <td>
                                                {!! $product->status == 'available'
                                                ? "<span class='active'>available</span>"
                                                : "<span class='text-warning'>unavailable</span>"
                                                !!}
                                            </td>

                                            <td>{{ $product->created_at }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center gap-2">

                                                    <div class="flex-fill">
                                                        <a
                                                            href="{{ APP_URL .'admin/product/edit/' . $product->id }}"
                                                            class="cr-btn outline-btn color-primary w-100">Edit</a>
                                                    </div>
                                                    <div class="flex-fill">
                                                        <form
                                                            action="{{ APP_URL . 'admin/product/delete/' . $product->id }}" method="post">
                                                            <button type="submit"
                                                                class="cr-btn outline-btn color-danger w-100" onclick="return confirm('Sure?')" type="submit">Delete</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection