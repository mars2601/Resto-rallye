<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;

class Login extends FormValidator{

  protected $rules = [
      'email'       =>    'required|email',
      'password'    =>    'required'
  ];

  protected $messages = [
    'email.required'     =>  'L\'email est indispensable',
    'email.email'        =>  'L\'email entré n\'est pas valide',
    'password.required'  =>  'Le mot de passe est indispensable'
  ];

}
