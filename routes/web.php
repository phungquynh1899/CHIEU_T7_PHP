<?php

use Illuminate\Support\Facades\Route;
//import homecontroller, cho du app ko viet hoa nhung minh phai viet hoa
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request; //phải thêm thì mới dùng được request object


Route::get('/', [HomeController::class,'index']);
Route::get('/lien-he',[HomeController::class,'contact']);
Route::get('/shop',[HomeController::class,'shop']);

Route::get('/shop-detail',[ProductController::class,'shopDetail']);
Route::get('/cart',[ProductController::class,'cart']);
Route::get('/product/{cat}', [ProductController::class, 'index']);

Route::get('/checkout',[HomeController::class,'checkout']);
Route::get('testimonial',[HomeController::class,'testimonial']);
Route::get('/error',[HomeController::class, 'error']);

Route::get('/login',[HomeController::class],'login'); //get để hiển thị form
Route::post('/login',[HomeController::class],'login'); //post để xử lý dữ liệu form
//flow : lần đầu tiên get để lấy form về, user điền vào form, sau đó bấm submit --> post req để gửi tới trang đăng nhập y hệt hồi nãy nhưng đã có dữ liệu

?>


