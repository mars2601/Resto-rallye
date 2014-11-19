<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;

class Register extends FormValidator{

  protected $rules = [
      'fisrtName'   =>    'required|alpha',
      'lastName'    =>    'required|alpha',
      'email'       =>    'required|email',
      'password'    =>    'required'
  ];

  protected $messages = [
    'firstName.required' =>  'Le nom est indispensable',
    'lastName.required'  =>  'Le prénom est indispensable',
    'firstName.alpha'    =>  'Le nom doit comporter des charactères alphabétiques',
    'lastName.alpha'     =>  'Le prénom doit comporter des charactères alphabétiques',
    'email.required'     =>  'L\'email est indispensable',
    'email.email'        =>  'L\'email entré n\'est pas valide',
    'password.required'  =>  'Le mot de passe est indispensable'
  ];

}
