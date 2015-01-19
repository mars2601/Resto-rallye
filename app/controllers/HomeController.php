<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		$date = date('Y-m-d');

		$quote = Quote::first();
		$rallyes = DB::table('rallyes')->take(3)->where( 'date', '<', $date )->get();
		$nextRallyes = DB::table('rallyes')->where( 'date', '>', $date )->get();

		return View::make('pages.homepage', array( 'quote' => $quote,
																							 'rallyes' => $rallyes,
																							 'nextRallyes' => $nextRallyes
																							));
	}
}
