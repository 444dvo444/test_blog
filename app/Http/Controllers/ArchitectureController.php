<?php

namespace App\Http\Controllers;

use App\CustomClasses\LeftMenu;
use App\CustomClasses\TopMenu;
use App\CustomClasses\UrlRequest;
use Illuminate\Support\Facades\DB;

class ArchitectureController{

    public function getArchitecturePage($symbol_code)
    {
        $symbol_code = htmlspecialchars(trim($symbol_code));
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

        $architecture = DB::table($symbol_code.'s')
        ->leftjoin('architecture_images', $symbol_code.'s.symbol_code', '=', 'architecture_images.architecture_id')
        ->select($symbol_code.'s.*', DB::raw("GROUP_CONCAT(`architecture_images`.`image` SEPARATOR ',') as images"))
        ->where($symbol_code.'s.id', '=', $id)
        ->first();

//        dd($architecture);

        return view('architecture', [
            'uriRequest' => $uriRequest,
            'menu_en' => $menu_en,
            'left_menu' => $left_menu,
            'architecture' => $architecture
        ]);
    }

}