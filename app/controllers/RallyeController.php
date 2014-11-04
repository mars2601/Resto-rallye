<?php

class RallyeController extends BaseController {

  // public function __construct()
  // {
  // }

  public function index()
  {
    $rallyes = Rallye::all();
    $date = date('Y-m-d H:i:s');

    $nextRallyes = DB::table('rallyes')->where( 'date', '>', $date )->get();
    $lastRallyes = DB::table('rallyes')->where( 'date', '<', $date )->get();
    return View::make('pages.rallyes', array( 'nextRallyes' => $nextRallyes, 'lastRallyes' => $lastRallyes ));
  }
  public function show($id)
  {
    $rallye = Rallye::find($id);

    return View::make('pages.showRallye', array( 'rallye' => $rallye ));
  }
}
