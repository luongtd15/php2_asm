<?php

namespace App\Controllers\admin;

use App\Models\Category;
use App\Models\Product;

class ProductController
{
    public function list()
    {
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->orderBy('id', 'DESC')
            ->get();
        // dd($products);
        return view('admin.product.list', compact('products'));
    }

    public function add()
    {
        $categories = Category::all();
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->orderBy('id', 'DESC')
            ->get();
        return view('admin.product.add', compact('categories', 'products'));
    }

    public function store()
    {
        $data = $_POST;

        if (trim($data['name'] == '')) {
            $errors['name'] = 'Name is required.';
        } else if (strlen($data['name']) > 20) {
            $errors['name'] = 'Name cannot longer than 20 characters.';
        }

        if (trim($data['description'] == '')) {
            $errors['description'] = 'Description is required.';
        }

        if (!isset($data['stock']) || trim($data['stock']) === '') {
            $errors['stock'] = 'Stock is required.';
        } elseif (!is_numeric($data['stock'])) {
            $errors['stock'] = 'Stock must be a number.';
        } elseif ($data['stock'] < 0) {
            $errors['stock'] = 'Stock must be greater than or equal to 0.';
        }

        if (!isset($data['price']) || trim($data['price']) === '') {
            $errors['price'] = 'price is required.';
        } elseif (!is_numeric($data['price'])) {
            $errors['price'] = 'price must be a number.';
        } elseif ($data['price'] < 0) {
            $errors['price'] = 'price must be greater than or equal to 0.';
        }

        $image = '';
        // dd($data);

        // handling image
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image = 'image/admin/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
        }

        $data['image'] = $image;

        if (empty($errors)) {
            Product::create($data);
            $_SESSION['product_success'] = 'Product: ' . $data['name'] . ' added successfully.';
            return redirect('admin/products');
        } else {
            $_SESSION['product_recent_data'] = $data;
            $_SESSION['product_error'] = $errors;
            return redirect('admin/products/add');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $products = Product::select(['products.*', 'categories.name as category_name', 'categories.id as category_id'])
            ->join('categories', 'category_id', 'id')
            ->where('category_id', '=', $product->category_id) // Lọc theo category_id
            ->orderBy('id', 'DESC')
            ->get();
        // dd($products);
        return view('admin.product.edit', compact('product', 'categories', 'products'));
    }

    public function productUpdate($id)
    {
        $data = $_POST;
        $product = Product::find($id);

        if (trim($data['name'] == '')) {
            $errors['name'] = 'Name is required.';
        } else if (strlen($data['name']) > 20) {
            $errors['name'] = 'Name cannot longer than 20 characters.';
        }

        if (!isset($data['description']) || trim($data['description']) === '') {
            $errors['description'] = 'Description is required.';
        }


        if (!isset($data['stock']) || trim($data['stock']) === '') {
            $errors['stock'] = 'Stock is required.';
        } elseif (!is_numeric($data['stock'])) {
            $errors['stock'] = 'Stock must be a number.';
        } elseif ($data['stock'] < 0) {
            $errors['stock'] = 'Stock must be greater than or equal to 0.';
        }

        if (!isset($data['price']) || trim($data['price']) === '') {
            $errors['price'] = 'price is required.';
        } elseif (!is_numeric($data['price'])) {
            $errors['price'] = 'price must be a number.';
        } elseif ($data['price'] < 0) {
            $errors['price'] = 'price must be greater than or equal to 0.';
        }

        $image = $product->image;
        // dd($data);

        // handling image
        $file = $_FILES['image'];

        if ($file['size'] > 0) {
            $image = 'image/admin/' . $file['name'];
            move_uploaded_file($file['tmp_name'], $image);
        }

        $data['image'] = $image;

        if (empty($errors)) {
            Product::update($data, $id);
            $_SESSION['product_success'] = 'Product: ' . $data['name'] . ' updated successfully.';
            return redirect('admin/product/edit/' . $id);
        } else {
            $_SESSION['product_error'] = $errors;
            return redirect('admin/product/edit/' . $id);
        }
    }

    public function destroy($id)
    {
        Product::delete($id);
        $_SESSION['product_success'] = 'Product deleted successfully.';
        return redirect('admin/products');
    }
}
