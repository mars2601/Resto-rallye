<?php

class AuthController extends BaseController {

  // public function __construct()
  // {
  // }
  public function login()
  {
     $user = array(
      'email' => Input::get('email'),
      'password' => Input::get('password')
        );

    if (Auth::attempt($user)) {
      return Redirect::back();
    }else{
      dd('aie');
      // mauvais mot de passe et/ou email -> redirect
    }
  }
  public function logout(){
    Auth::logout();
    return Redirect::route('homepage');
    Cookie::forget('reserved_rallye');
  }
}
