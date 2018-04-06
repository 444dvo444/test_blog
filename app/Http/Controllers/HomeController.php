<?php

namespace App\Http\Controllers;

use App\CustomClasses\TopMenu;
use App\CustomClasses\LeftMenu;
use App\CustomClasses\HomePage;
use App\CustomClasses\UrlRequest;
use App\Http\Controllers\Controller;
use App\MenuEn;


class HomeController extends Controller{

    public function getHomePage()
    {
        $menu_en = TopMenu::getTopMenu();
        $left_menu = LeftMenu::getLeftMenu();
        $home_page = HomePage::getHomePage();
        $urlRequest = UrlRequest::getUrlRequest();
        return view('welcome',[
            'menu_en' => $menu_en,
            'left_menu' => $left_menu,
            'home_page' => $home_page,
            'uriRequest' => $urlRequest
        ]);
    }

}