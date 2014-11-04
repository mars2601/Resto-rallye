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
                array(
                        'as' => 'homepage',
                        'uses' => 'HomeController@index'
                )
);


/*-- About ----------------------------------------------------------*/
Route::get(     '/a-propos',
                array(
                        'as' => 'about',
                        function() {
                            return View::make('pages.about');
                        }
                )
);

/*-- Event ----------------------------------------------------------*/
Route::get(     '/rallyes',
                array(
                    'as' => 'events',
                    'uses' => 'RallyeController@index'
                )
);

Route::get('/rallye/{id}', array(
  'as' => 'showEvent',
  'uses' => 'RallyeController@show'
), function ($id){
		return $id;
	});



/*-- Gallery ----------------------------------------------------------*/
Route::get(     '/galerie',
                array(
                        'as'    => 'gallery',
                        'uses'  => 'GalleryController@index',

                )
);


/*-- Contact  ----------------------------------------------------------*/
Route::get(     '/contact',
                array('as' => 'contact',
                function(){
                    return View::make('pages.contact');
                })
);
