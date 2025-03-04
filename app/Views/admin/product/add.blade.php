@extends('admin.layout')

@section('title', 'Add a new product')

@section('content')
<div class="cr-main-content">
    <div class="container-fluid">

        <div class="row cr-category">
            <div class="col-xl-6 col-lg-12">
                <div class="team-sticky-bar">
                    <div class="col-md-12">
                        <div class="cr-cat-list cr-card card-default mb-24px">
                            <div class="cr-card-content">
                                <div class="cr-cat-form">
                                    <h3>Add New Product</h3>

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

                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="label-control">Category</label>
                                                    <select name="category_id" id="" class="form-control">
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">
                                                            {{ $category->name }}
                                                        </option>

                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Image</label>
                                                    <div class="col-12">
                                                        <input id="image" name="image" class="form-control here set-slug"
                                                            type="file">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <div class="col-12">
                                                        <input id="name" name="name"
                                                            class="form-control here slug-title" type="text"
                                                            value="{{ $_SESSION['product_recent_data']['name'] }}">
                                                        <?php unset($_SESSION['product_recent_data']['name']) ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Stock</label>
                                                    <div class="col-12">
                                                        <input id="stock" name="stock"
                                                            class="form-control here slug-title" type="number"
                                                            value="{{ $_SESSION['product_recent_data']['stock'] }}">
                                                        <?php unset($_SESSION['product_recent_data']['stock']) ?>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="label-control">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="available">Available</option>
                                                        <option value="unavailable">Unavailable</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="col-12">
                                                        <input id="price" name="price"
                                                            class="form-control here slug-title" type="number"
                                                            value="{{ $_SESSION['product_recent_data']['price'] }}">
                                                        <?php unset($_SESSION['product_recent_data']['price']) ?>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <div class="col-12">
                                                <textarea name="description" id="" class="form-control"
                                                    rows='5'>{{ $_SESSION['product_recent_data']['description'] }}</textarea>
                                                    <?php unset($_SESSION['product_recent_data']['description']) ?>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <button type="submit" class="cr-btn-primary">Add</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-12">
                <div class="cr-cat-list cr-card card-default">
                    <div class="cr-card-content ">
                        <div class="table-responsive">
                            <table id="cat_data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php foreach ($products as $product): ?>
                                        <tr>
                                            <td>{{ $product->id }}</td>
                                            <td>
                                                <img src="{{ APP_URL . $product->image }}" alt="" width="50">
                                            </td>
                                            <td class="active">{{ $product->name }}</td>
                                            <td>
                                                {{ $product->category_name }}
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