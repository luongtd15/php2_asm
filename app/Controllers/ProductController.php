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

    public function addToCart($id)
    {

        if (!isset($_SESSION['customer_logged_in'])) {
            $_SESSION['login_to_continue'] = 'You have to log in first!';
            redirect('login');
        };

        $product = Product::find($id);
        $data = [
            'user_id' => isset($_SESSION['customer_logged_in']->id)
                ? (int) $_SESSION['customer_logged_in']->id
                : null,
            'product_id' => $product->id,
            'quantity' => $_POST['quantity'],
            'unit_price' => $product->price
        ];
        $errors = [];

        if (!isset($data['quantity']) || trim($data['quantity']) === '') {
            $errors['quantity'] = 'quantity is required.';
        } elseif (!is_numeric($data['quantity'])) {
            $errors['quantity'] = 'quantity must be a number.';
        } elseif ($data['quantity'] < 1) {
            $errors['quantity'] = 'quantity must be greater than 0.';
        }

        if (!empty($errors)) {
            $categories = Category::all();
            $productById = Product::find($id);
            $products = Product::select(['products.*', 'categories.name as category_name'])
                ->join('categories', 'category_id', 'id')
                ->orderBy('id', 'DESC')
                ->get();
            $_SESSION['add_to_cart_error'] = 'Quantity is not valid!';
            return view(
                'products.detail',
                compact('product', 'data', 'errors', 'categories', 'productById', 'products')
            );
        }

        $data['total_price'] = $_POST['quantity'] * $product->price;

        $productsInCart = Cart::select('carts.*')
            ->where('user_id', '=', $_SESSION['customer_logged_in']->id)
            ->andWhere('product_id', '=', $product->id)
            ->get();

        if ($productsInCart) {
            Cart::updateQuantity($_SESSION['customer_logged_in']->id, $product->id, $data['quantity']);
        } else {
            Cart::create($data);
        }

        Product::updateStock($product->id, $data['quantity']);
        $_SESSION['add_to_cart_success'] = 'Add to cart successfully';
        redirect('product/detail/' . $id);
    }
}
