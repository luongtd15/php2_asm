@extends('admin.layout');

@section('title', 'Category List');

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
                                <h6 class="mb-4">Category List</h6>
                                <div class="header-tools">
                                    <input type="text" data-search-icon="" placeholder="Search...">
                                </div>
                            </div>
                            <div class="cr-code">
                                <pre><span>&lt;</span>i class<span>=</span><span>&quot;ri-24-hours-fill&quot;</span><span>&gt;&lt;/</span>i<span>&gt;</span>
								</pre>
                            </div>
                            <div class="cr-code">
                                <pre><span>&lt;</span>span class<span>=</span><span>&quot;remix-unicode&quot;</span><span>&gt;&amp;#59905;&lt;/</span>span<span>&gt;</span>
											</pre>
                            </div>
                        </div>
                    </div>

                    <div class="p-15">
                        <div class="cr-remix-icons row">

                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 remix-unicode-icon">
                                <div class="cr-icon-block">
                                    <span class="remix-icons">
                                        <i class="ri-apple-fill"></i>
                                    </span>
                                    <h4 data-search-item="">Apple</h4>
                                    <span class="remix-unicode">&amp;#62371;</span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 remix-unicode-icon">
                                <div class="cr-icon-block">
                                    <span class="remix-icons"></span>
                                    <h4 data-search-item="">Grapes</h4>
                                    <span class="remix-unicode">&amp;#62372;</span>
                                </div>
                            </div>
                            <div class="col-xxl-2 col-xl-3 col-lg-4 col-md-6 remix-unicode-icon">
                                <div class="cr-icon-block">
                                    <span class="remix-icons"></span>
                                    <h4 data-search-item="">Peach</h4>
                                    <span class="remix-unicode">&amp;#62373;</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection