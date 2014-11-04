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
