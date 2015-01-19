<?php
use Jenssegers\Date\Date;


class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */


	protected function setupLayout()
	{
		Date::setLocale('fr');
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

	public function sendMail($mail, $data, $receiverMail, $receiverName, $subject)
	{
		// send Email
		// call the function with this method -> App::make('BaseController')->sendMail($mail, $data, $receiverMail, $receiverName, $subject);
		Mail::send($mail, $data, function($message) use ($receiverMail, $receiverName, $subject) {
			$message->to($receiverMail, $receiverName)
			->subject($subject);
		});
	}

}
