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

Route::get('/', array(
  'as' => 'homepage',
  'uses' => 'HomeController@index'
));

Route::get('/contact', array('as' => 'contact', function()
{
    return View::make('pages.contact');
}));

Route::get('/galerie', array('as' => 'gallery', function()
{
    return View::make('pages.gallery');
}));

Route::get('/rallyes', array(
  'as' => 'rallyes',
  'uses' => 'RallyeController@index'
));

Route::get('/showEvent{id}', array(
  'as' => 'showEvent',
  'uses' => 'RallyeController@show'
), function ($id){
	return $id;
});

Route::get('/a-propos', array('as' => 'about', function()
{
    return View::make('pages.about');
}));

Route::post('/login', array(
  'as' => 'login',
  'uses' => 'AuthController@login'
));

Route::get('/logout', array(
  'as' => 'logout',
  'uses' => 'AuthController@logout'
));

Route::get('/register', array('as' => 'register', function()
{
    return View::make('pages.register');
}));

Route::post('/store', array(
  'as' => 'store',
  'uses' => 'UserController@store'
));

Route::get('/reserve{id}{way}', array(
  'as' => 'reserve',
  'uses' => 'RallyeController@reserve'
), function ($id, $way){
  return $id;
  return $way;
});

Route::post('/confirm', array(
  'as' => 'confirm',
  'uses' => 'RallyeController@confirm'
));

Route::any('/storeReservation', array(
  'as' => 'storeReservation',
    'uses' => 'RallyeController@storeReservation'
));

Route::any('/myReservation', array(
  'as' => 'myReservation',
    'uses' => 'RallyeController@myReservation'
));
