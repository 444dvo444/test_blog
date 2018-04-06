<?php
namespace App\CustomClasses;

use Illuminate\Support\Facades\DB;

class HomePage{

    public static function getHomePage()
    {
        $table = 'home_page_engs';
        if(isset($_COOKIE['language'])){
            switch ($_COOKIE['language']){
                case 'russian':
                    $table = 'home_page_ruses';
                    break;
                case 'croatian':
                    $table = 'home_page_xors';
                    break;
            }
        }
        $page = DB::table($table)->where('id', '=', '1')->first();
        return $page;
    }

}