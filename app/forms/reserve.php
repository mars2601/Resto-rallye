<?php namespace todo\Forms;
use Laracasts\Validation\FormValidator;

class Reserve extends FormValidator{

  protected $rules = [
      'entreprise'   =>    'alpha_num',
      'contactFirstName'    =>    'required|alpha',
      'contactLastName'       =>    'required|alpha',
      'email'       =>    'required|email',
      'street'    =>    'required|alpha_dash',
      'streetNumber'  =>  'required|alpha_dash',
      'town'  => 'required|alpha_dash',
      'telephone' => 'required',
      'placeReserved' => 'required|numeric'
  ];

  protected $messages = [
    'entreprise.alpha' =>  'Le nom d\'entreprise doit comporter des lettres alphaébtiques et/ou des chiffres',
    'contactFirstName.required'  => 'Le prénom est indispensable',
    'contactFirstName.alpha' =>  'le prénom doit comporter des lettres alphabétiques',
    'contactLastName.required'  => 'Le nom est indispensable',
    'contactLastName.alpha' =>  'le nom doit comporter des lettres alphabétiques',
    'email.alpha' =>  'L\'email entré n\'est pas valide',
    'email.alpha' =>  'L\'email est indispensable',
    'street.required' => 'Le nom de la rue est indispensable',
    'street.alpha'  => 'le nom de la rue doit comporter des lettres alphabétiques',
    'streetNumber.required' => 'Le numéro du domicile est indispensable',
    'streetNumber.alpha_dash' =>  'Le numéro du domicile doit comporter des lettres alphaébtiques et/ou des chiffres',
    'town.required' => 'La ville est indispensable',
    'town.alpha_dash'  => 'la ville doit comporter des lettres alphabétiques',
    'telephone.required' =>  'Le numéro de téléphone est indispensable',
    // 'telephone.regex' =>  'Le numéro de téléphone n\'est pas un numéro valide',
    'placeReserved.required' => 'le nombre de place réservée est indispensable',
    'placeReserved.numeric' => 'le nombre de place doit comporter des chiffres'
  ];

}
