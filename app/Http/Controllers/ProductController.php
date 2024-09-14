<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function shopDetail(){
        return view('Product.shop-detail');
    }

    public function cart(){
        return view('Product.cart');
    }

}
