@extends('admin.layout')

@section('title', 'Edit this product')

@section('content')
<div class="cr-main-content">
    <div class="container-fluid">

        <div class="row cr-category">
            <div class="col-xl-7 col-lg-12">
                <div class="team-sticky-bar">
                    <div class="col-md-12">
                        <div class="cr-cat-list cr-card card-default mb-24px">
                            <div class="cr-card-content">
                                <div class="cr-cat-form">
                                    <h3>Edit Product: {{ $product->name }}</h3>

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

                                    <form method="post" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="" class="label-control">Category</label>
                                                    <select name="category_id" id="" class="form-control">
                                                        @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @selected($category->id == $product->category_id)>
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
                                                    <br>
                                                    <div class="col-12" style="width: 275px; height: 275px;">
                                                        <img src="{{ APP_URL . $product->image }}" alt="" width="275">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="" class="label-control">Status</label>
                                                    <select name="status" id="" class="form-control">
                                                        <option value="available"
                                                            {{ $product->status == 'available' ? 'selected' : '' }}>Available</option>
                                                        <option value="unavailable"
                                                            {{ $product->status == 'unavailable' ? 'selected' : '' }}>Unavailable</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Name</label>
                                                    <div class="col-12">
                                                        <input id="name" name="name"
                                                            class="form-control here slug-title" type="text"
                                                            value="{{ $product->name }}">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <div class="col-12">
                                                        <textarea name="description" id="" class="form-control"
                                                            style="height:261.5px">
                                                        {{ $product->description }}
                                                        </textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label>Stock</label>
                                                    <div class="col-12">
                                                        <input id="stock" name="stock"
                                                            class="form-control here slug-title" type="number"
                                                            value="{{ $product->stock }}">
                                                    </div>
                                                </div>



                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <div class="col-12">
                                                        <input id="price" name="price"
                                                            class="form-control here slug-title" type="number"
                                                            value="{{ $product->price }}">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-12 d-flex">
                                                <button type="submit" class="cr-btn-primary">Edit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-12">
                <div class="cr-cat-list cr-card card-default">
                    <div class="cr-card-content ">
                        <div class="table-responsive">
                            <table id="cat_data_table" class="table">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Image</th>
                                        <th>Name</th>
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