<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;

class HomeController
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->orderBy('id', 'DESC')
            ->get();
        // dd($products);
        return view('home', compact('products', 'categories'));
    }

    public function about()
    {
        $categories = Category::all();
        return view('about', compact('categories'));
    }

    public function contact()
    {
        $categories = Category::all();
        return view('contact', compact('categories'));
    }

    public function cart()
    {
        $categories = Category::all();
        $productsInCart = Cart::select(['carts.*', 'products.*', 'users.*'])
            ->join('products', 'product_id', 'id')
            ->join('users', 'user_id', 'id')
            ->get();
        // dd($productsInCart);
        return view('cart', compact('categories', 'productsInCart'));
    }



    public function checkout()
    {
        $categories = Category::all();
        return view('checkout', compact('categories'));
    }
}
