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
    // $eventUser = EventUser::where('rallye_id', $input['rallyeId'])

    return View::make('pages.rallyes', array( 'nextRallyes' => $nextRallyes, 'lastRallyes' => $lastRallyes ));
  }
  public function show($id, $dateStatus)
  {
    $rallye = Rallye::find($id);
    if($dateStatus == 'p'){
      $rallye->placeAvailable = 0;
      $rallye->save();
    }
    if(Auth::check())
    {
        $reserved_rallye = DB::table('eventuser')->where('user_id', '=', Auth::user()->id)->pluck('rallye_id');
        return View::make('pages.showRallye', array( 'rallye' => $rallye, 'dateStatus' => $dateStatus, 'reserved_rallye' => $reserved_rallye ));
    }else{
      return View::make('pages.showRallye', array( 'rallye' => $rallye, 'dateStatus' => $dateStatus ));
    }
  }
  public function reserve($id, $way)
  {
    $rallye = Rallye::find($id);
    if (Auth::check()){
      $eventuser = DB::table('eventuser')->where('rallye_id', $rallye->id)
              ->where('user_id', Auth::user()->id)->first();
      if($eventuser){
        if($eventuser->rallye_id == $rallye->id){

          //  l'utilisateur tente d'acéder a la page de réservation d'un évenement qu'il a déja réservé
          $count = DB::table('eventuser')->where('user_id', '=', Auth::user()->id)->count();
          if($way == 'y'){
            return View::make('pages.reserve', array( 'eventuser' => $eventuser,'rallye' => $rallye, 'way' => $way ));
          }else{
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
      $eventUser = EventUser::where('rallye_id', $input['rallyeId'])
                            ->where('user_id', Auth::user()->id)->firstOrFail();

      $Rallye = Rallye::find($input['rallyeId']);
      $Rallye->placeAvailable = $Rallye->placeAvailable + $eventUser->place;
      $Rallye->placeAvailable = $Rallye->placeAvailable - $input['placeReserved'];
      // Available place count
    }else{
      // Create a new reservation

      // [fr] Création d'une table pivot récupérant les infos d'un user, d'un évenement
      // et le nombre de place. Cette table fonctionne un peu comme un bon qui réserve
      // autant de place a l'évenement.
      $eventUser = new EventUser;

      $Rallye = Rallye::find($input['rallyeId']);
      $Rallye->placeAvailable = $Rallye->placeAvailable - $input['placeReserved'];
      // Available place count
    }



    $eventUser->rallye_id = $input['rallyeId'];
    $eventUser->user_id = Auth::user()->id;
    $eventUser->entreprise = $input['entreprise'];
    $eventUser->contactFirstName = $input['contactFirstName'];
    $eventUser->contactLastName = $input['contactLastName'];
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
    $eventUser = EventUser::where('user_id', '=', Auth::user()->id)->get();
    $count = EventUser::where('user_id', '=', Auth::user()->id)->count();
    return View::make('pages.myReservation', array( 'eventUser' => $eventUser, 'count' => $count ));
  }
  public function delete($id)
  {
    $reservation = EventUser::where('rallye_id', '=', $id)->first();
    $Rallye = Rallye::find($id);
    $Rallye->placeAvailable = $Rallye->placeAvailable + $reservation->place;

    $Rallye->save();
    $reservation->delete();
    $eventUser = EventUser::where('user_id', '=', Auth::user()->id)->get();
    $count = EventUser::where('user_id', '=', Auth::user()->id)->count();


    return View::make('pages.myReservation', array( 'eventUser' => $eventUser, 'count' => $count ));
  }
}
