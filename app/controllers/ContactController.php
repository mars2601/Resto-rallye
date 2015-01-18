<?php
use todo\Forms\Contact as ContactForm;
use Laracasts\Validation\FormValidationException;

class ContactController extends BaseController {

  public function __construct(ContactForm $contactForm)
  {
    $this->contactForm = $contactForm;
  }

  public function index()
  {
    if (Request::isMethod('post')){
      var_dump("ok");
      if ( ! (Auth::check())){
        $input = Input::only(
        'name',
        'email',
        'subject',
        'message'
        );

        // validation form
        // try
        // {
        //   $this->contactForm->validate($input);
        // }
        // catch (FormValidationException $e)
        // {
        //   return Redirect::back()->withInput()->withErrors($e->getErrors());
        // }

        $name = $input['name'];
        $email = $input['email'];
        $subject = $input['subject'];
        $message = $input['message'];

        $mailData = [
          $name,
          $email,
          $subject,
          $message
        ];
      }else{
        $input = Input::only(
        'subject',
        'message'
        );

        // validation form
        // try
        // {
        //   $this->contactForm->validate($input);
        // }
        // catch (FormValidationException $e)
        // {
        //   return Redirect::back()->withInput()->withErrors($e->getErrors());
        // }

        $subject = $input['subject'];
        $message = $input['message'];

        $mailData = [
          $name = Auth::user()->firstName+Auth::user()->lastName,
          $email = Auth::user()->email,
          $subject,
          $message
        ];
      }

      $mailConfig = Config::get('mail.from');
      $receiverMail = $mailConfig['address'];
      $receiverName = $mailConfig['name'];



      var_dump($receiverMail);
      var_dump($mailData);
      var_dump($receiverName);

      // Send the mail
      App::make('BaseController')->sendMail('emails.contact', $mailData, $receiverMail, $receiverName, 'Contact via Resto-Rallye');


      return View::make('pages.contact');
    }else{
      return View::make('pages.contact');
    }

  }
}
