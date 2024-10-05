<?php
namespace App\View\Share;
use App\Models\Menu;

class CustomNavbar{

    public static function getMenu(){
        $menu = Menu::all();
$navbar = ''; // Initialize the navbar variable

if (isset($menu)) {
    foreach ($menu as $i) {
        if ($i->idCha == null) {
            $hasChild = false;

            foreach ($menu as $x) {
                if ($x->idCha == $i->id) {
                    $hasChild = true;
                    break;
                }
            }

            if ($hasChild) {
                $navbar .= '<div class="nav-item dropdown">';
                $navbar .= '<a href="/shop/" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">' . htmlspecialchars($i->ten) . '</a>';
                $navbar .= '<div class="dropdown-menu m-0 bg-secondary rounded-0">';
                
                foreach ($menu as $x) {
                    if ($x->idCha == $i->id) {
                        $navbar .= '<a href="/shop" class="dropdown-item">' . htmlspecialchars($x->ten) . '</a>';
                    }
                }

                $navbar .= '</div></div>';
            } else {
                $navbar .= '<a href="/shop" class="nav-item nav-link">' . htmlspecialchars($i->ten) . '</a>';
            }
        }
    }
}
return $navbar;
    }
    
}


?>
