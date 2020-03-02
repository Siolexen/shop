<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

class ProductController extends Controller
{

    public function __construct()
    {

    }

    public function index() {
        dd('Product');
    }
}