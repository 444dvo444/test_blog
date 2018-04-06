<?php
namespace App\CustomClasses;

use Illuminate\Support\Facades\DB;

class LeftMenu{

    public static function getLeftMenu()
    {
        $table = 'left_menu_ens';
        if(isset($_COOKIE['language'])){
            switch ($_COOKIE['language']){
                case 'russian':
                    $table = 'Left_menu_rus';
                    break;
                case 'croatian':
                    $table = 'left_menu_xors';
                    break;
            }
        }
        $menu = DB::table($table)->where('id', '=', '1')->first();
        return $menu;
    }

}