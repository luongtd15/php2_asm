<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;

class ProductController
{
    public function list()
    {
        $categories = Category::all();
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->orderBy('id', 'DESC')
            ->get();
        // dd($products);
        return view('products.list', compact('products', 'categories'));
    }

    public function search()
    {
        $keyword = trim($_GET['q']) ?? '';

        if (empty($keyword)) {
            return view('result', ['products' => []]);
        }

        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 8; // Số sản phẩm trên mỗi trang

        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id') // JOIN đúng cách
            ->whereClause('name', 'LIKE', "%$keyword%") // WHERE tự động thêm bảng
            ->get();

        $pagination = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->whereClause('name', 'LIKE', "%$keyword%")
            ->paginate($page, $limit);

        // dd($products);
        $categories = Category::all();
        return view('result', compact('products', 'categories', 'pagination'));
    }

    public function detail($id)
    {
        $categories = Category::all();
        $productById = Product::find($id);
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->orderBy('id', 'DESC')
            ->get();
        // dd($product);
        return view('products.detail', compact('productById', 'id', 'categories', 'products'));
    }
}
