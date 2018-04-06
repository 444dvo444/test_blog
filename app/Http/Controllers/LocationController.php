<?php
namespace App\Http\Controllers;

use App\CustomClasses\LeftMenu;
use App\CustomClasses\TopMenu;
use App\CustomClasses\UrlRequest;
use App\Location;
use App\LocationImages;
use App\LocationSlider;

class LocationController{

    public function getLocationPage()
    {

        $menu_en = TopMenu::getTopMenu();
        $left_menu = LeftMenu::getLeftMenu();
        $uriRequest = UrlRequest::getUrlRequest();

        $id = 1;
        if (isset($_COOKIE['language'])) {
            switch ($_COOKIE['language']) {
                case 'russian':
                    $id = 2;
                    break;
                case 'croatian':
                    $id = 3;
                    break;
            }
        }
        $location = Location::where('id', '=', $id)->first();
        $top_slider = LocationSlider::where('id', '>', 0)->get();
        $bottom_images = LocationImages::where('id', '>', 0)->get();

        return view('location',[
            'bottom_images' => $bottom_images,
            'top_slider' => $top_slider,
            'location' => $location,
            'uriRequest' => $uriRequest,
            'menu_en' => $menu_en,
            'left_menu' => $left_menu
        ]);
    }

}