@extends('layouts.master')


@section('content')
<section class="reserve ">
  <div class="reserve__title big-title">
    <h2>Mes réservations</h2>
  </div>
  <section class="reserve__do">
      <div class="reserve__do__infos">
        <p class="reserve__do__infos__count"><strong>{{$count}}</strong>Réservation @if($count>1)<span>s</span>@endif</p>
        <ul class="reserve__do__infos__list">
          @if($count > 0)
            @foreach($eventUser as $reservation)
            <li class="myreservation">
              <div class="myreservation__header">
                <p class="myreservation__header__nbPlace">Réservation pour <strong>{{$reservation->place}}</strong> personnes</p>
                <!-- <p class="myreservation__entreprise"><span class='icon-office'></span><strong></strong></p> -->
              </div>
              <div class="myreservation__contact">
                  <h4 class="myreservation__title">Personne de contact:</h4>
                <p class="myreservation__info"><span class='icon-office'></span><strong>{{$reservation->entreprise}}</strong></p>
                <p class="myreservation__info"><span class='icon-user'></span><strong>{{$reservation->contactFirstName}} {{$reservation->contactLastName}}</strong></p>
              </div>
              <div class="myreservation__adress">
                <p class="myreservation__info"><span class='icon-directions'></span><strong>Rue {{$reservation->street}} {{$reservation->streetNumber}}</strong></p>
                <p class="myreservation__info"><span class='icon-pin'></span><strong>{{$reservation->town}}</strong></p>
                <p class="myreservation__info"><span class='icon-phone'></span><strong>{{$reservation->telephone}}</strong></p>
              </div>

              <p>
                @if($reservation->confirmation == 0)
                  <p>X | Votre réservation est <strong>en attente</strong> de payement. <strong>Veuillez payer</strong> la somme au numéro de compte indiqué sur votre mail de confirmation.</p>
                @elseif($reservation->confirmation == 1)
                  <p>V | Réservation payée et confirmée.</p>
                @endif
              </p>
              <a class="button" href="{{ URL::route('delete', $reservation->rallye_id) }}"><span class='icon-cross2'></span>Supprimer</a>
              <a class="button" href="{{ URL::route('reserve', array($reservation->rallye_id, 'modify')) }}"><span class='icon-compose'></span>Modifier</a>
              <a class="button" href="{{ URL::route('showEvent', array($reservation->rallye_id, 'n')) }}"></span>Voir le rallye</a>
            </li>
            @endforeach
          @else
            <p class="no-reserve-paragraph">Aucune réservation pour le moment</p>
            <a class="button no-reserve-button" href="{{ URL::route('rallyes') }}">Voir les Rallyes</a>
          @endif
      </ul>
    </div>
  </section>
</section>

@stop
