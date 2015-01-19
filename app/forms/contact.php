<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;

class Contact extends FormValidator{

  protected $rules = [
    'name'   =>    'required',
    'email'    =>    'required|email',
    'subject'       =>    'alpha_num',
    'message'       =>    'required',
  ];

  protected $messages = [
    'name.required'  => 'Le nom est indispensable',
    'email.required'  => 'L\' email est indispensable',
    'email.email' =>  'L\'email entré n\'est pas valide',
    'subject.alpha' =>  'Le sujet doit comporter des lettres alphaébtiques et/ou des chiffres',
    'message.required' =>  'Le message est indispensable'
  ];
}
