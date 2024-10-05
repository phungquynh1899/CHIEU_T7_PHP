<?php

namespace App\Http\Controllers;
//nếu muốn dùng model
use Illuminate\Http\Request;
use App\Models\Menu;
//nếu ko muốn dùng model
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        //Truy vấn ko dùng Model
        //nhớ use Illuminate\Support\Facades\DB;
            // $query = DB::table('categories')->get();

        //select dữ liệu theo model
        //nhớ use Illuminate\Http\Request; và use App\Models\Menu;
            //b1: gọi model cần sử dụng
            //b2: gọi tên model và hàm where
            //b3: first là lấy dòng đầu tiên  và get là lấy tất cả các dòng
            //b4: thêm nhiều điều kiện thì mở ngoặc vuông
            // $menu1 = Menu::where('idCha',NULL)->get();

            //truy vấn có điều kiện cách 1
            // $menu2 = Menu::where('idCha',NULL)->where('anhien',1)->get();

            //truy vấn có điều kiện cách 2
            // $menu3 = Menu::where([['idCha',NULL], ['anhien',1]])->get();

            //truy vấn có điều kiện cách 2 có OR
            // $menu3 = Menu::where('idCha',NULL)->orWhere('anhien',1)->get();

            //truy vấn có điều kiện cách 2 và hiện sql ra
            // $menu3 = Menu::where('idCha',NULL)->orWhere('anhien',1)->toSql();
      
            //truy vấn có điều kiện cách 2 có order (asc hoặc desc)
            // $menu4 = Menu::where([['idCha',NULL], ['anhien',1]])->orderBy('thutu','desc')->get();

            //truy vấn có điều kiện cách 2 có nhiều order (asc hoặc desc)
            // $menu4 = Menu::where([['idCha',NULL], ['anhien',1]])->orderBy('thutu','desc')->orderBy('id','asc')->toSql();
          
        
           //truy vấn có điều kiện cách 2 chỉ lấy 3 dòng đầu - take
            // $menu5 = Menu::where([['idCha',NULL], ['anhien',1]])->take(3)->get();
           //truy vấn có điều kiện cách 2 bỏ 3 dòng đầu, lấy tiếp 2 dòng sau (skip và take dùng để phân trang)
            // $menu6 = Menu::where([['idCha',NULL], ['anhien',1]])->skip(3)->take(2)->get();
            //trang 1 có 20sp id 1 -20  skip 0 (20*(1-1))   sl cần lấy = 20
            //trang 1 có 20sp id 21 -40  skip 0 (20*(2-1))   sl cần lấy = 20
            //trang 1 có 20sp id 41 -60  skip 0 (20*(3-1))   sl cần lấy = 20
            //trang 1 có 20sp id 31 -0  skip 0 (20*(n-1))   sl cần lấy = 20
            //                                      n là stt của trang
            //phân trang cách 2 bằng paginate(10) và đường link http://127.0.0.1:8000/?page=2
            // $menu = Menu::where([['idCha', NULL],['anhien',1]])->orderBy('thutu','desc')->paginate(10)->get();

        // $menu = Menu::all(); //đây chính là hàm XXX cần cho code của mình, code theo thầy thì ko cần

        // return view('home.index', ['menu' => $menu]); 
        return view('home.index');
    }

    public function xxx(){
        return view('home.xxx');
    }

    public function shop(){
        return view('home.shop');
    }

    public function contact(){
        return view('home.contact');
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
