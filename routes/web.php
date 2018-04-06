<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::group(['middleware' => ['web']], function(){

    Route::get('/', [
        'uses' => 'HomeController@getHomePage',
        'as' => 'home.page'
    ]);

    Route::get('/about/{about_largo}',[
        'uses' => 'AboutLargoController@getAboutLargo',
        'as' => 'about.largo'
    ]);

    Route::get('/location',[
        'uses' => 'LocationController@getLocationPage',
        'as' => 'location.page'
    ]);

    Route:: get('/architecture/{architecture}', [
        'uses' => 'ArchitectureController@getArchitecturePage',
        'as' => 'architecture.page'
    ]);

    Route::get('/gallery', [
        'uses' => 'GalleryController@getGalleryPage',
        'as' => 'gallery.page'
    ]);

});