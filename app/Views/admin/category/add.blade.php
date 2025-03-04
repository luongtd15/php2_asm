@extends('admin.layout')

@section('title', 'Add a new category')

@section('content')
<div class="cr-main-content">
    <div class="container-fluid">

        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>Category</h5>
                <ul>
                    <li><a href="index.html">Carrot</a></li>
                    <li>Category</li>
                </ul>
            </div>
        </div>

        <div class="row cr-category">
            <div class="col-xl-4 col-lg-12">
                <div class="team-sticky-bar">
                    <div class="col-md-12">
                        <div class="cr-cat-list cr-card card-default mb-24px">
                            <div class="cr-card-content">
                                <div class="cr-cat-form">
                                    <h3>Add New Category</h3>

                                    <?php if (isset($_SESSION['category_error'])): ?>
                                        <div class="alert alert-danger">
                                            @foreach ($_SESSION['category_error'] as $error)
                                            <?php
                                            echo $error;
                                            unset($_SESSION['category_error']); // Xóa session sau khi hiển thị
                                            ?>
                                            @endforeach
                                        </div>
                                    <?php endif; ?>

                                    <form method="post" enctype="multipart/form-data">

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
                                                    value="{{ $data['name'] }}">
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

            <div class="col-xl-8 col-lg-12">
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
                                    <?php foreach ($categories as $category): ?>
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>
                                                <img src="{{ APP_URL . $category->image }}" alt="" width="50">
                                            </td>
                                            <td class="active">{{ $category->name }}</td>
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