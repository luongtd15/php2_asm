<?php

namespace App\Controllers;

class ProductController
{

    public function detail($id)
    {
        return view('products.detail', ['id' => $id]);
    }

    public function list()
    {
        return view('admin.product.list');
    }

}
