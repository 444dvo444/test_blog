<?php
namespace App\Http\Controllers;

//use Illuminate\Routing\Controller;

use App\CustomClasses\LeftMenu;
use App\CustomClasses\TopMenu;
use App\CustomClasses\UrlRequest;
use App\Information;
use Illuminate\Support\Facades\DB;

class AboutLargoController extends Controller
{

    public function getAboutLargo($about_largo)
    {
        $about_largo = htmlspecialchars(trim($about_largo));
        $menu_en = TopMenu::getTopMenu();
        $left_menu = LeftMenu::getLeftMenu();
        $urlRequest = UrlRequest::getUrlRequest();
        $about_table = 'about_page_largo_ens';
        $id = 1;
        if (isset($_COOKIE['language'])) {
            switch ($_COOKIE['language']) {
                case 'russian':
                    $about_table = 'about_page_largo_rus';
                    $id = 2;
                    break;
                case 'croatian':
                    $about_table = 'about_page_largo_xors';
                    $id = 3;
                    break;
            }
        }

        $about_villas = DB::table($about_table)->where('symbol_code', '=', $about_largo)->first();
        $information = Information::where('id', '=', $id)->first();
//        dd($information);
        return view('about_largo', [
            'menu_en' => $menu_en,
            'left_menu' => $left_menu,
            'uriRequest' => $urlRequest,
            'about_villas_info' => $about_villas,
            'information' => $information
        ]);
    }

}