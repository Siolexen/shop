<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Product;
use App\Order;

class ProductController extends Controller
{

    public function index() {
//        $product = Product::all();
        $order = Order::with('products', 'user')->get();
        $product = Product::with('orders')->get();
//        dd($product);
        dd($order);
    }
}