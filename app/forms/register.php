<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;

class Register extends FormValidator{

  protected $rules = [
      'firstName'   =>    'required|alpha',
      'lastName'    =>    'required|alpha',
      'emailRegister'       =>    'required|email',
      'passwordRegister'    =>    'required'
  ];

  protected $messages = [
    'firstName.required' =>  'Le nom est indispensable',
    'lastName.required'  =>  'Le prénom est indispensable',
    'firstName.alpha'    =>  'Le nom doit comporter des charactères alphabétiques',
    'lastName.alpha'     =>  'Le prénom doit comporter des charactères alphabétiques',
    'emailRegister.required'     =>  'L\'email est indispensable',
    'emailRegister.email'        =>  'L\'email entré n\'est pas valide',
    'passwordRegister.required'  =>  'Le mot de passe est indispensable'
  ];

}
