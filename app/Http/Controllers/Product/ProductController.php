<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
//        $product = Product::all();
        $order = Order::with('products', 'user')->get();
        $products = Product::with('orders')->get();
//        dd($product);
        return $this->view('products.index', compact('products'));
        dd($order);
    }

    public function show($id) {
        $product = Product::find($id);
        return $this->view('products.show', compact('product'));

    }
}