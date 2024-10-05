<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
//thêm vào
use Illuminate\Support\Facades\View;

use App\View\Composers\MenuComposer;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    // Hiện dữ liệu dùng chung 
    public function boot(): void
    {
        //c1: chia se voi toan bo view
        // View::share('home.index')
        //c2: chia se voi mot view duy nhat
        // return view('home.index')->with('key', 'value')
        //c3: composer
        // View::composer(['home.index','home.login'], function($view)){
        //     $view->with('key','value');
        // };

        //tác dụng tren trang particals
        View::composer('partials.header', MenuComposer::class);

    }
}
