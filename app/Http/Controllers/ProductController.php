<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function shopDetail(){
        return view('Product.shop-detail');
    }

    public function cart(){
        return view('Product.cart');
    }

    public function index(string $cat){
        //lấy idCat
        $idCat = Menu::where('slug', $cat)->first()->idCat;
        //lấy toàn bộ category có id = $idCat or parent_id = idCat
        $listIdCat = Category::where('id', $idCat)->orwhere('parent_id', $idCat)->pluck('id');
        $sanPham = Product::whereIn('idCat', $listIdCat)->get();
        return view('Product.index', ['sp'=>$sanPham]);
    }

}
