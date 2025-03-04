@extends('admin.layout')

@section('title', 'Category List')

@section('content')
<!-- main content -->
<div class="cr-main-content">
    <div class="container-fluid">
        <!-- Page title & breadcrumb -->
        <div class="cr-page-title cr-page-title-2">
            <div class="cr-breadcrumb">
                <h5>Category List</h5>
                <ul>
                    <li><a href="index.html">Carrot</a></li>
                    <li>Category List</li>
                </ul>
            </div>
        </div>

        <div class="row">
            <!-- <div class="cr-card-overlay"></div> -->
            <div class="col-xl-12">

                <div class="cr-card revenue-overview">

                    <div class="cr-card-header">
                        <div class="icons-header">
                            <div class="card-body-header">
                                <h6 class="mb-4">Category</h6>
                                <div>
                                    <a href="{{ APP_URL . 'admin/categories/add' }}" class="btn btn-success">Add a new category</a>
                                </div>
                            </div>
                            <?php if (isset($_SESSION['category_success'])): ?>
                                <div class="alert alert-success">
                                    <?php
                                    echo $_SESSION['category_success'];
                                    unset($_SESSION['category_success']); // Xóa session sau khi hiển thị
                                    ?>
                                </div>
                            <?php endif; ?>

                            <?php if (isset($_SESSION['category_error'])): ?>
                                <div class="alert alert-danger">
                                    <?php
                                    echo $_SESSION['category_error'];
                                    unset($_SESSION['category_error']); // Xóa session sau khi hiển thị
                                    ?>
                                </div>
                            <?php endif; ?>
                            <!-- <div class="cr-code">
                                <pre><span>&lt;</span>i class<span>=</span><span>&quot;ri-24-hours-fill&quot;</span><span>&gt;&lt;/</span>i<span>&gt;</span>
								</pre>
                            </div>
                            <div class="cr-code">
                                <pre><span>&lt;</span>span class<span>=</span><span>&quot;remix-unicode&quot;</span><span>&gt;&amp;#59905;&lt;/</span>span<span>&gt;</span>
											</pre>
                            </div> -->
                        </div>
                    </div>

                    <div class="p-15">
                        <div class="cr-remix-icons row">
                            <?php foreach ($categories as $category): ?>
                                <div class="col-xxl-4 col-xl-3 col-lg-4 col-md-6 remix-unicode-icon">
                                    <div class="cr-icon-block">
                                        <span class="remix-icons">
                                            <img src="{{ APP_URL . $category->image }}" alt="" width="100">
                                        </span>

                                        <span class="remix-unicode">{{ $category->id }}</span>

                                        <h4 data-search-item="">{{ $category->name }}</h4>

                                        <!-- Thêm d-flex và gap-2 để căn chỉnh các nút -->
                                        <div class="d-flex gap-2">
                                            <!-- Edit button -->
                                            <div class="flex-fill">
                                                <a href="{{ APP_URL . 'admin/category/edit/' . $category->id }}"
                                                    class="cr-btn ripple-btn color-primary w-100 text-center">Edit</a>
                                            </div>
                                            <!-- Delete button -->
                                            <div class="flex-fill">
                                                <form action="{{ APP_URL . 'admin/category/delete/' . $category->id}}" method="post">
                                                    <button type="submit"
                                                        class="cr-btn ripple-btn color-danger w-100"
                                                        onclick="return confirm('Sure?')">Delete</button>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection