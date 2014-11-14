<?php

class UserController extends BaseController {

  // public function __construct()
  // {
  // }
  public function store()
  {
    $input = Input::only('firstName', 'lastName', 'email', 'password');

    $user = new User;

    $user->firstName = $input['firstName'];
    $user->lastName = $input['lastName'];
    $user->email = $input['email'];
    $user->password = Hash::make($input['password']);

    $user->save();

    Auth::login($user);
    return Redirect::back();
  }
}
