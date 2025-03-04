<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Invoice;
use App\Models\InvoiceDetail;
use App\Models\Product;

class InvoiceController
{
    public function createInvoice()
    {
        $cartTotalAmount = Cart::getTotalPrice($_SESSION['customer_logged_in']->id);
        $invoiceData = [
            'user_id' => $_SESSION['customer_logged_in']->id,
            'total_amount' => $cartTotalAmount
        ];

        $invoice_id = Invoice::create($invoiceData);

        $cartItems = Cart::select(['carts.*', 'products.*'])
            ->join('products', 'product_id', 'id')
            ->join('users', 'user_id', 'id')
            ->get();

        // dd($cartItems);
        // dd($invoiceData);

        foreach ($cartItems as $item) {
            $invoiceDetailData = [
                'invoice_id' => $invoice_id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'unit_price' => $item->unit_price,
                'total_price' => $item->total_price
            ];

            InvoiceDetail::create($invoiceDetailData);
        }

        Cart::deleteCart($_SESSION['customer_logged_in']->id);

        redirect('cart');
    }
}
