<?php

namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController
{

    public function productByCategory($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->where('category_id', '=', $id)
            ->orderBy('id', 'DESC')
            ->get();
        // dd($products);
        return view('categories.list', compact('products', 'category', 'categories'));
    }
}
