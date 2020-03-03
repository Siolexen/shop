<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index() {

        $orders = Order::with('products', 'user')->get();

        return $this->view('order.index', compact('orders'));
    }

    public function store(Request $request) {
        dd($request->id);
    }
}