<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



/*-- Homepage ----------------------------------------------------------*/
Route::get(     '/',
                [
                  'as' => 'homepage',
                  'uses' => 'HomeController@index'
                ]
);


/*-- About ----------------------------------------------------------*/
Route::get(     '/a-propos',
                [
                  'as' => 'about',
                  function() {
                    return View::make('pages.about');
                  }
                ]
);

/*-- Rallye ----------------------------------------------------------*/
Route::get(     '/rallyes',
                [
                  'as' => 'rallyes',
                  'uses' => 'RallyeController@index'
                ]
);

Route::get(     '/rallye/{id}{dateStatus}',
                [
                  'as' => 'showEvent',
                  'uses' => 'RallyeController@show',
                  function ($id, $dateStatus){
                    return $id;
                    return $dateStatus;
                  }
                ]
);



/*-- Gallery ----------------------------------------------------------*/
Route::get(     '/galerie',
                [
                  'as'    => 'gallery',
                  'uses'  => 'GalleryController@index',

                ]
);


Route::get(     '/galerie/{slug}',
                [
                  'as' => 'album',
                  'uses' => 'GalleryController@show',
                  function ($slug){
                    return $slug;
                  }
                ]
);


/*-- Contact  ----------------------------------------------------------*/
Route::any(     '/contact',
                [
                  'as' => 'contact',
                  'uses' => 'ContactController@index'
                ]
);


/*-- Admin  ----------------------------------------------------------*/

Route::get(     '/admin',
                [
                  'as'    => 'admin',
                  'uses'  => 'AdminController@index',

                ]
);

/*-- Authentication  ----------------------------------------------------------*/
Route::post(    '/login',
                [
                  'as' => 'login',
                  'uses' => 'AuthController@login'
                ]
);

Route::get(     '/logout',
                [
                  'as' => 'logout',
                  'uses' => 'AuthController@logout'
                ]
);

Route::get(     '/register',
                [
                  'as' => 'register',
                  function(){
                    return View::make('pages.register');
                  }
                ]
);

/*-- user  ----------------------------------------------------------*/

Route::post(    '/store',
                [
                  'as' => 'store',
                  'uses' => 'UserController@store'
                ]
);

/*-- rallye  ----------------------------------------------------------*/

Route::get(     '/reserve{id}{way}',
                [
                  'as' => 'reserve',
                  'uses' => 'RallyeController@reserve',
                  function ($id, $way){
                    return $id;
                    return $way;
                  }
                ]
);

Route::post(    '/confirm',
                [
                  'as' => 'confirm',
                  'uses' => 'RallyeController@confirm'
                ]
);

Route::any(     '/storeReservation',
                [
                  'as' => 'storeReservation',
                  'uses' => 'RallyeController@storeReservation'
                ]
);

Route::any(     '/myReservation',
                [
                  'as' => 'myReservation',
                  'uses' => 'RallyeController@myReservation'
                ]
);

Route::any(     '/delete{id}',
                [
                  'as' => 'delete',
                  'uses' => 'RallyeController@delete',
                  function ($id){
                    return $id;
                  }
                ]
);

/*-- 404  ----------------------------------------------------------*/
Route::get(     '/404',
                [
                  'as' => '404',
                  function(){
                    return '404';
                  }
                ]
);
