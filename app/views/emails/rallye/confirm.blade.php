<h1>Bonjour {{$userFirstName}} {{$userLastName}}!</h1>

<p>
  Vous avez réservé <strong>{{$placeReserved}}</strong> places pour le rallye suivant
</p>
<p>
  {{$rallyeTitle}}</br>
  {{$rallyeTown}}</br>
  {{$rallyeStreet}}{{$rallyeStreetNumber}}</br>
</p>
<p>
  le {{$rallyeDate}}
</p>

<p>
  Veuillez payer la somme de <strong>{{$reservationPrice}}</strong> euros au numéro de compte suivant
</p>
<p>
  votre code de confirmation est : <strong>{{$confirmationCode}}</strong>
</p>
