<?php
    namespace App\View\Composers;
    use App\View\Share\CustomNavbar;
    use Illuminate\View\View;
    
    class MenuComposer{
        public function compose(View $view){
            $view->with('navbar', CustomNavbar::getMenu());
        }
    }
?>