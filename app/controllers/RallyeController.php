<?php


class RallyeController extends BaseController {

  // public function __construct()
  // {
  // }

  public function index()
  {

    $date = date('Y-m-d H:i:s');

    $nextRallyes = DB::table('rallyes')->where( 'date', '>', $date )->get();
    $lastRallyes = DB::table('rallyes')->where( 'date', '<', $date )->get();
    return View::make('pages.rallyes', array( 'nextRallyes' => $nextRallyes, 'lastRallyes' => $lastRallyes ));
  }
  public function show($id)
  {
    $rallye = Rallye::find($id);
    if(Auth::check())
    {
        $reserved_rallye = DB::table('eventuser')->where('user_id', '=', Auth::user()->id)->pluck('rallye_id');
        return View::make('pages.showRallye', array( 'rallye' => $rallye, 'reserved_rallye' => $reserved_rallye ));
    }else{
      return View::make('pages.showRallye', array( 'rallye' => $rallye ));
    }
  }
  public function reserve($id, $way)
  {
    $rallye = Rallye::find($id);
    return View::make('pages.reserve', array( 'rallye' => $rallye, 'way' => $way ));
  }
  public function confirm()
  {
    if ( ! (Auth::check())){
      return Redirect::route('homepage');
    }else{
      $input = Input::only('way',
                           'idRallye',
                           'placeReserved',
                           'entreprise',
                           'telephone',
                           'contactFirstName',
                           'contactLastName',
                           'street',
                           'streetNumber',
                           'town'
                          );
        $way = $input['way'];
        $idRallye = $input['idRallye'];
        $placeReserved = $input['placeReserved'];
        $entreprise = $input['entreprise'];
        $telephone = $input['telephone'];
        $contactFirstName = $input['contactFirstName'];
        $contactLastName = $input['contactLastName'];
        $street = $input['street'];
        $streetNumber = $input['streetNumber'];
        $town = $input['town'];


        $userLastName = Auth::user()->lastName;

        $rallye = Rallye::find($idRallye);

          return View::make('pages.confirm', array(  'way'                 => $way,
                                                     'idRallye'           => $idRallye,
                                                     'placeReserved'      => $placeReserved,
                                                     'entreprise'         => $entreprise,
                                                     'telephone'          => $telephone,
                                                     'userLastName'       => $userLastName,

                                                     //  Personne de contact (Facultatif)
                                                     'contactFirstName'   => $contactFirstName,
                                                     'contactLastName'    => $contactLastName,
                                                     'street'             => $street,
                                                     'streetNumber'       => $streetNumber,
                                                     'town'               => $town,

                                                     // Données sur le rallye en question
                                                      'rallye' => $rallye
                                                ));
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
                         'street',
                         'streetNumber',
                         'town'
                       );

    $way = $input['way'];
    if($way == 'y'){
      // modify an existing reservation
      $userEvent = UserEvent::where('rallye_id', $input['rallyeId'])
                            ->where('user_id', Auth::user()->id)->firstOrFail();
  

      $userEvent->rallye_id = $input['rallyeId'];
      $userEvent->user_id = Auth::user()->id;
      $userEvent->entreprise = $input['entreprise'];
      $userEvent->contactFirstName = $input['contactFirstName'];
      $userEvent->contactLastName = $input['contactLastName'];
      $userEvent->street = $input['street'];
      $userEvent->streetNumber = $input['streetNumber'];
      $userEvent->town = $input['town'];
      $userEvent->telephone = $input['telephone'];

      // dd($userEvent);

      $userEvent->save();

    }else{
      // Create a new reservation

      // [fr] Création d'une table pivot récupérant les infos d'un user, d'un évenement
      // et le nombre de place. Cette table fonctionne un peu comme un bon qui réserve
      // autant de place a l'évenement.
      $userEvent = new UserEvent;

      $userEvent->rallye_id = $input['rallyeId'];
      $userEvent->user_id = Auth::user()->id;
      $userEvent->entreprise = $input['entreprise'];
      $userEvent->contactFirstName = $input['contactFirstName'];
      $userEvent->contactLastName = $input['contactLastName'];
      $userEvent->street = $input['street'];
      $userEvent->streetNumber = $input['streetNumber'];
      $userEvent->town = $input['town'];
      $userEvent->telephone = $input['telephone'];

      $userEvent->save();
    }

    return Redirect::route('showEvent', array( 'id' => $input['rallyeId']));
  }
  public function myReservation()
  {
    $userEvent = DB::table('eventuser')->where('user_id', '=', Auth::user()->id)->get();
    return View::make('pages.myReservation', array( 'userEvent' => $userEvent ));
  }
}
