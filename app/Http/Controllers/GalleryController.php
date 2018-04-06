<?php

namespace App\Http\Controllers;

use App\CustomClasses\LeftMenu;
use App\CustomClasses\TopMenu;

class GalleryController{

    public function getGalleryPage()
    {

        $menu_en = TopMenu::getTopMenu();
        $left_menu = LeftMenu::getLeftMenu();

        return view('gallery', [
            'menu_en' => $menu_en,
            'left_menu' => $left_menu,
        ]);
    }

}