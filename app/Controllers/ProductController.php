<?php

namespace App\Controllers;

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
        $keyword = trim($_GET['search']) ?? '';

        if (empty($keyword)) {
            return view('result', ['products' => []]);
        }

        $products = Product::where('name', 'LIKE', "%$keyword%")->get();
        $categories = Category::all();
        return view('result', compact('products', 'categories'));
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
