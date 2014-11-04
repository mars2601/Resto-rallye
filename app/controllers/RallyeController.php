<?php


class RallyeController extends BaseController {

  // public function __construct()
  // {
  // }

  public function index()
  {

    $date = date('Y-m-d H:i:s');

    $nextEvents = DB::table('rallyes')->where( 'date', '>', $date )->get();
    $lastEvents = DB::table('rallyes')->where( 'date', '<', $date )->get();
    return View::make('pages.events', array( 'nextEvents' => $nextEvents, 'lastEvents' => $lastEvents ));
  }
}
