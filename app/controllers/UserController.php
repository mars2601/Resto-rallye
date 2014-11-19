<?php
use todo\Forms\Register as RegisterForm;
use Laracasts\Validation\FormValidationException;


class UserController extends BaseController {

  private $registerForm;

  public function __construct(RegisterForm $registerForm)
  {
    $this->registerForm = $registerForm;
  }
  public function store()
  {
    $input = Input::only('firstName', 'lastName', 'email', 'password');

    // try
    // {
    //   $this->registerForm->validate($input); //Gestion des erreurs via Validation
    // }
    // catch (FormValidationException $e)
    // {
    //     return Redirect::back()->withInput()->withErrors($e->getErrors());
    // }
    $user = new User;

    $user->firstName = ucfirst($input['firstName']);
    $user->lastName = ucfirst($input['lastName']);
    $user->email = $input['email'];
    $user->password = Hash::make($input['password']);

    $user->save();

    Auth::login($user);
    return Redirect::back();
  }
}
