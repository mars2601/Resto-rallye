@extends('layouts.master')


@section('content')
<section class="reserve">
  <div class="reserve__title big-title">
    <h2>Mes réservations</h2>
  </div>

  <section class="reserve__do">
      <div class="reserve__do__infos">
        @foreach($userEvent as $reservation)

    </br>
    </br>
    </br>
      <p class="reserve__do__infos__nbPlace">Vous avez réserver {{$reservation->place}} places</p>

    </br>

      <div id="name">
        <p class="reserve__do__infos__entreprise">Au nom de l'entreprise {{$reservation->entreprise}}</p>
        <p>La personne de contact est {{$reservation->contactFirstName}} {{$reservation->contactLastName}}</p>
        <p>Rue {{$reservation->street}} {{$reservation->streetNumber}}</p>
        <p>{{$reservation->town}}</p>
        <p>{{$reservation->telephone}}</p>
      </div>

      <a class="events__show__link" href="{{ URL::route('reserve', array($reservation->rallye_id, 'modify')) }}">Modifier la réservation</a>

      @endforeach
  </section>
</section>

@stop
