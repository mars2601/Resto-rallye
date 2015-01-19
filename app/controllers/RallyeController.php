<?php
use todo\Forms\Reserve as ReserveForm;
use Laracasts\Validation\FormValidationException;

class RallyeController extends BaseController {

  public function __construct(ReserveForm $reserveForm)
  {
    $this->reserveForm = $reserveForm;
  }

  public function index()
  {
    $date = date('Y-m-d H:i:s');

    // Create two different variables with the next Rallyes and with the previous ones.
    $nextRallyes = DB::table('rallyes')->where( 'date', '>', $date )->get();
    $lastRallyes = DB::table('rallyes')->where( 'date', '<', $date )->get();

    foreach($nextRallyes as $next){
      $dateNext = new Date($next->date);
    }

    return View::make('pages.rallyes', array( 'nextRallyes' => $nextRallyes, 'lastRallyes' => $lastRallyes ));
  }

  public function show($id, $dateStatus)
  {
    $rallye = Rallye::find($id);
    $album = DB::table('albums')->where('id', $rallye->album_id)->first();
    if($dateStatus == 'p'){
      $rallye->placeAvailable = 0;
      $rallye->save();
    }
    if(Auth::check())
    {
        $reserved_rallye = DB::table('eventuser')->where('user_id', '=', Auth::user()->id)->pluck('rallye_id');
        return View::make('pages.showRallye', array( 'rallye' => $rallye, 'dateStatus' => $dateStatus, 'reserved_rallye' => $reserved_rallye, 'album' => $album ));
    }else{
      return View::make('pages.showRallye', array( 'rallye' => $rallye, 'dateStatus' => $dateStatus, 'album' => $album ));
    }
  }

  public function reserve($id, $way)
  {
      $rallye = Rallye::find($id);
      if (Auth::check()){
        $eventuser = EventUser::where('rallye_id', $rallye->id)
                              ->where('user_id', Auth::user()->id)->first();

        if($eventuser){
          if($eventuser->rallye_id == $rallye->id){

            $count = DB::table('eventuser')->where('user_id', '=', Auth::user()->id)->count();
            // $way is the way to access the 'reserve' form: ('y') for modify / ('w') for new
            if($way == 'y'){
              //modify a reservation
              return View::make('pages.reserve', array( 'eventuser' => $eventuser,'rallye' => $rallye, 'way' => $way ));

            }else{
              //reservation already exist
              return Redirect::route('myReservation', array( 'eventuser' => $eventuser, 'count' => $count ));
            }
          }else{
            return View::make('pages.reserve', array( 'rallye' => $rallye, 'way' => $way ));
          }
        }else{
          return View::make('pages.reserve', array( 'rallye' => $rallye, 'way' => $way ));
        }
      }else{
        return View::make('pages.reserve', array( 'rallye' => $rallye, 'way' => $way ));
      }
  }

  public function confirm()
  {
    if(Input::has('reserve')){

      if ( ! (Auth::check())){
        return Redirect::route('homepage');
      }else{
        $input = Input::only('gift',
                             'way',
                             'idRallye',
                             'placeReserved',
                             'entreprise',
                             'telephone',
                             'contactFirstName',
                             'contactLastName',
                             'street',
                             'streetNumber',
                             'town',
                             'email'
                            );

          // validation form
          try
          {
            $this->reserveForm->validate($input);
          }
          catch (FormValidationException $e)
          {
              return Redirect::back()->withInput()->withErrors($e->getErrors());
          }

          $gift = $input['gift'];
          $way = $input['way'];
          $idRallye = $input['idRallye'];
          $placeReserved = $input['placeReserved'];
          $entreprise = $input['entreprise'];
          $telephone = $input['telephone'];
          $contactFirstName = $input['contactFirstName'];
          $contactLastName = $input['contactLastName'];
          $email = $input['email'];
          $street = $input['street'];
          $streetNumber = $input['streetNumber'];
          $town = $input['town'];
          // Confirmation code generator
          $confirmationCode = str_random(5);
          // Current Rallye reservation
          $rallye = Rallye::find($idRallye);
          //  Current user
          $user = Auth::user();
          $userLastName = $user->lastName;

          // Price calculation of a reservation
          $rallyePricesReservation = floatval($rallye->price) * floatval($placeReserved);

          // Email confirmation data sending
          $mailData = [
            'userMail' => Auth::user()->email,

            'confirmationCode' => $confirmationCode,
            'userFirstName' => Auth::user()->firstName,
            'userLastName' => Auth::user()->lastName,
            'placeReserved' => $placeReserved,
            'rallyeTitle' => $rallye->title,
            'rallyeDate' => $rallye->date,
            'rallyeTown' => $rallye->town,
            'rallyeStreet' => $rallye->street,
            'rallyeStreetNumber' => $rallye->streetNumber,
            'reservationPrice'  => $rallyePricesReservation
          ];


          $receiverMail = $user->email;
          $receiverName = $user->firstName+$user->lastName;

          // Email sending to the buyer
          App::make('BaseController')->sendMail('emails.rallye.confirm', $mailData, $receiverMail, $receiverName, 'Resto-Rallye reservation');

          // If it is a gift, send an email to the receiver
          if($gift == "1"){

            $receiverMail = $email;
            $receiverName = $contactFirstName+$contactLastName;

            $mailData = [
              'userMail' => Auth::user()->email,
              'receiverFirstName' => $contactFirstName,
              'receiverLastName' => $contactLastName,
              'confirmationCode' => $confirmationCode,
              'buyerFirstName' => Auth::user()->firstName,
              'buyerLastName' => Auth::user()->lastName,
              'placeReserved' => $placeReserved,
              'rallyeTitle' => $rallye->title,
              'rallyeDate' => $rallye->date,
              'rallyeTown' => $rallye->town,
              'rallyeStreet' => $rallye->street,
              'rallyeStreetNumber' => $rallye->streetNumber,
              'reservationPrice'  => $rallyePricesReservation
            ];
            // Ask the send mail method og basController
            App::make('BaseController')->sendMail('emails.rallye.gift', $mailData,  $receiverMail, $receiverName, 'Cadeau: Resto-Rallye ');

          }

          // Return the correct view
          return View::make('pages.confirm', array(    'way'                 => $way,
                                                       'idRallye'           => $idRallye,
                                                       'placeReserved'      => $placeReserved,
                                                       'entreprise'         => $entreprise,
                                                       'telephone'          => $telephone,
                                                       'userLastName'       => $userLastName,
                                                       //  Personne de contact (Facultatif)
                                                       'contactFirstName'   => $contactFirstName,
                                                       'contactLastName'    => $contactLastName,
                                                       'email'              => $email,
                                                       'street'             => $street,
                                                       'streetNumber'       => $streetNumber,
                                                       'town'               => $town,
                                                       'confirmationCode'   => $confirmationCode,
                                                       // Données sur le rallye en question
                                                        'rallye' => $rallye
                                                  ));
      }
    }
  }

  public function storeReservation()
  {
    $input = Input::only('way',
                         'rallyeId',
                         'placeReserved',
                         'entreprise',
                         'telephone',
                         'contactFirstName',
                         'contactLastName',
                         'email',
                         'street',
                         'streetNumber',
                         'town',
                         'confirmationCode',
                         'confirmationCodeHidden'
                       );


    if($input['confirmationCodeHidden'] == $input['confirmationCode']){
      // code confirmation success
      $way = $input['way'];
      if($way == 'y'){
        //** Modify an existing reservation
        $eventUser = EventUser::where('rallye_id', $input['rallyeId'])
                              ->where('user_id', Auth::user()->id)->firstOrFail();

        $Rallye = Rallye::find($input['rallyeId']);

        // count the available places
        $Rallye->placeAvailable = $Rallye->placeAvailable + $eventUser->place;
        $Rallye->placeAvailable = $Rallye->placeAvailable - $input['placeReserved'];
      }else{

        //** Create a new reservation
        // [fr] Création d'une table pivot récupérant les infos d'un user, d'un évenement
        // et le nombre de place. Cette table fonctionne un peu comme un bon qui réserve
        // autant de place a l'évenement.
        $eventUser = new EventUser;

        $Rallye = Rallye::find($input['rallyeId']);

        // Available place count
        $Rallye->placeAvailable = $Rallye->placeAvailable - $input['placeReserved'];
      }
    }else{
      // TODO: code confirmation wrong / re-send the message
      die('aie');
    }


    $eventUser->confirmationCode = $input['confirmationCode'];
    $eventUser->rallye_id = $input['rallyeId'];
    $eventUser->user_id = Auth::user()->id;
    $eventUser->entreprise = $input['entreprise'];
    $eventUser->contactFirstName = $input['contactFirstName'];
    $eventUser->contactLastName = $input['contactLastName'];
    $eventUser->email = $input['email'];
    $eventUser->street = $input['street'];
    $eventUser->streetNumber = $input['streetNumber'];
    $eventUser->town = $input['town'];
    $eventUser->telephone = $input['telephone'];
    $eventUser->place = $input['placeReserved'];

    $eventUser->save();
    $Rallye->save();

    return Redirect::route('showEvent', array( 'id' => $input['rallyeId'], 'dateStatus' => 'n'));
  }

  public function myReservation()
  {
    // Get the reservation(s) of the current user
    $eventUser = EventUser::where('user_id', '=', Auth::user()->id)->get();
    // Count the number of reservation
    $count = EventUser::where('user_id', '=', Auth::user()->id)->count();
    return View::make('pages.myReservation', array( 'eventUser' => $eventUser, 'count' => $count ));
  }

  public function delete($id)
  {
    // Find the reservation
    $reservation = EventUser::where('rallye_id', '=', $id)->first();
    // Find the Rallye
    $Rallye = Rallye::find($id);
    // Adjust the available places.
    $Rallye->placeAvailable = $Rallye->placeAvailable + $reservation->place;

    $Rallye->save();
    $reservation->delete();

    // Get the reservation(s) of the current user
    $eventUser = EventUser::where('user_id', '=', Auth::user()->id)->get();
    // Count the number of reservation
    $count = EventUser::where('user_id', '=', Auth::user()->id)->count();

    return View::make('pages.myReservation', array( 'eventUser' => $eventUser, 'count' => $count ));
  }
}
