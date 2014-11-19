<?php
use todo\Forms\Login as LoginForm;
use Laracasts\Validation\FormValidationException;

class AuthController extends BaseController {

  private $loginForm;

  public function __construct(LoginForm $loginForm)
  {
    $this->loginForm = $loginForm;
  }

  public function login()
  {
    $user = Input::only('email', 'password');
    try
    {
      $this->loginForm->validate($user); //Gestion des erreurs via Validation
    }
    catch (FormValidationException $e)
    {
        return Redirect::back()->withInput()->withErrors($e->getErrors());
    }

    $user = array(
      'email' => Input::get('email'),
      'password' => Input::get('password')
        );

    if (Auth::attempt($user)) {
      return Redirect::back();
    }else{
      dd('aie');
      // log not found -> redirect
    }
  }
  public function logout(){
    Auth::logout();
    return Redirect::route('homepage');
    Cookie::forget('reserved_rallye');
  }
}
