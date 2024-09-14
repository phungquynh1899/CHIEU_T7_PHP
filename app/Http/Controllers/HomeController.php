<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
class HomeController extends Controller
{
    public function index()
    {
        Menu::create([
            'ten'=> 'Phụ kiện',
            'idCha'=> null,
            'idCat'=> '',
            'mota'=> 'Mô tả về phụ kiện',
            'anhien'=>1,
            'thutu'=>0,
            'slug'=>'phu-kien'
        ]);
    }

    public function contact(){
        return view('home.contact');
    }

    public function shop(){
        return view('home.shop');
    }


    public function checkout(){
        return view('home.checkout');
    }

    public function testimonial(){
        return view('home.testimonial');
    }
    public function error(){
        return view('home.error');
    }
    public function login(Request $req){
        $a = '<div>hello</div>';
        if($req->isMethod('POST')){
            return view('home.login', $a);
        }
        return view('home.login');
    }


}
