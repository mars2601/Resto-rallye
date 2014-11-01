<?php

namespace root\Controllers;
use root\Models as model;

class EventsController extends BaseController {

  // public function __construct()
  // {
  // }

  public function index()
  {
    $events = model\Event::all();
    $date = date('Y-m-d H:i:s');

    $nextEvents = \DB::table('events')->where( 'date', '>', $date )->get();
    $lastEvents = \DB::table('events')->where( 'date', '<', $date )->get();
    return \View::make('pages.events', array( 'nextEvents' => $nextEvents, 'lastEvents' => $lastEvents ));
  }
}
