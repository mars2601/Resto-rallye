@extends('layouts.master')


@section('content')
<section class="reserve">
  <div class="reserve__title big-title">
    <h2>Mes réservations</h2>
  </div>

  <section class="reserve__do">
      <div class="reserve__do__infos">
        <p class="reserve__do__infos__count">Réservations: <strong>{{$count}}</strong></p>
        <ul class="reserve__do__infos__list">
          @foreach($eventUser as $reservation)
          <li>
            <div class="reserve__do__infos__rallye">
              <p class="reserve__do__infos__nbPlace"><span class='icon-user'></span>  <strong>{{$reservation->place}}</strong></p>
              <p class="reserve__do__infos__entreprise"><span class='icon-office'></span><strong>{{$reservation->entreprise}}</strong></p>
            </div>
            <div class="reserve__do__infos__contact">
              <p><strong>• {{$reservation->contactFirstName}} {{$reservation->contactLastName}}</strong></p>
              <p><strong>Rue {{$reservation->street}} {{$reservation->streetNumber}}</strong></p>
              <p><strong>{{$reservation->town}}</strong></p>
              <p><strong>{{$reservation->telephone}}</strong></p>
            </div>


            <a class="button" href="{{ URL::route('delete', $reservation->rallye_id) }}"><span class='icon-cross2'></span>Supprimer</a>
            <a class="button" href="{{ URL::route('reserve', array($reservation->rallye_id, 'modify')) }}"><span class='icon-compose'></span>Modifier</a>
          </li>
          @endforeach
      </ul>
    </div>
  </section>
</section>

@stop
