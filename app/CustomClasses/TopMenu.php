<?php
namespace App\CustomClasses;

use Illuminate\Support\Facades\DB;

class TopMenu{

    public static function getTopMenu()
    {
        $table = 'menu_ens';
        if(isset($_COOKIE['language'])){
            switch ($_COOKIE['language']){
                case 'russian':
                    $table = 'menu_rus';
                    break;
                case 'croatian':
                    $table = 'menu_xors';
                    break;
            }
        }
        $menu = DB::table($table)->where('id', '=', '1')->first();
        return $menu;
    }

}