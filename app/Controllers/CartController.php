<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;

class CartController
{
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
        } elseif ($data['quantity'] > $product->stock) {
            $errors['quantity'] = 'Quantity cannot greater than stock';
        }

        if (!empty($errors)) {
            $categories = Category::all();
            $productById = Product::find($id);
            $products = Product::select(['products.*', 'categories.name as category_name'])
                ->join('categories', 'category_id', 'id')
                ->orderBy('id', 'DESC')
                ->get();
            $_SESSION['add_to_cart_error'] = $errors['quantity'];
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

        Product::updateStock($product->id, $data['quantity'], '-');

        $_SESSION['add_to_cart_success'] = 'Add to cart successfully';
        redirect('product/detail/' . $id);
    }

    public function updateCart()
    {
        $productId = $_POST['product_id'] ?? null;
        $quantity = $_POST['quantity'] ?? 1;
        $userId = $_SESSION['customer_logged_in']->id ?? null;

        if ($productId && $userId) {

            $product = Product::find($productId);

            $cartItem = Cart::where('user_id', '=', $_SESSION['customer_logged_in']->id)
                ->andWhere('product_id', '=', $product->id)
                ->first();

            if ($product && $cartItem) {

                $quantityDiff = $quantity - $cartItem->quantity; // Chênh lệch số lượng
                $data['quantity'] = $quantity;

                if ($quantity < 1) {
                    $errors['quantity'] = 'Quantity must be greater than 0!';
                } elseif ($quantity > $product->stock) {
                    $errors['quantity'] = 'Not enough stock available!';
                }
            }

            if (!empty($errors)) {
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
                return view('cart', compact('categories', 'productsInCart', 'errors', 'cartItem', 'products'));
            }
        }

        Cart::setQuantity($userId, $productId, $data['quantity']);
        Product::updateStock($product->id, $quantityDiff, '-');
        redirect('cart');
    }
}
