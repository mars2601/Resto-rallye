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

/*-- Rallye ----------------------------------------------------------*/
Route::get(     '/rallyes',
                array(
                    'as' => 'rallyes',
                    'uses' => 'RallyeController@index'
                )
);

Route::get('/rallye/{id}{dateStatus}', array(
  'as' => 'showEvent',
  'uses' => 'RallyeController@show'
), function ($id, $dateStatus){
		return $id;
    return $dateStatus;
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

/*-- 404  ----------------------------------------------------------*/
Route::get(     '/404',
    array('as' => '404',
        function(){
            return '404';
        })
);


/*-- Admin  ----------------------------------------------------------*/

Route::get(     '/admin',
    array(
        'as'    => 'admin',
        'uses'  => 'AdminController@index',

    )
);

/*-- Authentication  ----------------------------------------------------------*/
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

/*-- user  ----------------------------------------------------------*/

Route::post('/store', array(
  'as' => 'store',
  'uses' => 'UserController@store'
));

/*-- rallye  ----------------------------------------------------------*/

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

Route::any('/delete{id}', array(
  'as' => 'delete',
  'uses' => 'RallyeController@delete'
), function ($id){
  return $id;
});
