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

        // Lấy số trang hiện tại từ query string (mặc định là 1)
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 8; // Số sản phẩm trên mỗi trang

        $springCollectionProducts = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->get();

        // Truy vấn sản phẩm có phân trang
        $pagination = Product::select(['products.*', 'categories.name as category_name'])
            ->join('categories', 'category_id', 'id')
            ->whereRaw('products.season IS NULL') // Sử dụng whereRaw để viết đúng cú pháp SQL
            ->paginate($page, $limit);

        return view('home', 
        compact('pagination', 'categories', 'springCollectionProducts'));
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
