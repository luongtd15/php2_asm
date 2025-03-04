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
        if (!isset($_SESSION['customer_logged_in'])) {
            $_SESSION['login_to_continue'] = 'You have to log in first!';
            redirect('login');
        };
        
        $categories = Category::all();
        $products = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->orderBy('id', 'DESC')
            ->get();
        $productsInCart = Cart::select(['carts.*', 'products.*', 'users.id as user_id'])
            ->join('products', 'product_id', 'id')
            ->join('users', 'user_id', 'id')
            ->get();
        // dd($productsInCart);
        return view('cart', compact('categories', 'productsInCart', 'products'));
    }





    public function checkout()
    {
        $categories = Category::all();
        return view('checkout', compact('categories'));
    }
}
