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
                    'as' => 'rallyes',
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


Route::get('/galerie/{slug}', array(
    'as' => 'album',
    'uses' => 'GalleryController@show'
), function ($slug){
    return $slug;
});


/*-- Contact  ----------------------------------------------------------*/
Route::get(     '/contact',
                array('as' => 'contact',
                function(){
                    return View::make('pages.contact');
                })
);

/*-- Contact  ----------------------------------------------------------*/
Route::get(     '/404',
    array('as' => '404',
        function(){
            return '404';
        })
);




Route::get(     '/admin',
    array(
        'as'    => 'admin',
        'uses'  => 'AdminController@index',

    )
);