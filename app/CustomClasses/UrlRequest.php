<?php
namespace App\CustomClasses;

class UrlRequest{

    public static function getUrlRequest()
    {
        $uriRequest = explode('/',$_SERVER['REQUEST_URI']);
        return $uriRequest;
    }

}