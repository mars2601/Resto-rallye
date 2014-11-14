@extends('layouts.master')


@section('content')
<section class="events">
  <div class="events__title big-title">
    <h2>Evénement</h2>
  </div>

  <section class="events__show">
    <img src="../img/gal_5.png" alt="alt" class="events__show__image"/>
    <div class="events__show__infos">
      <h4 class="events__show__infos__title">{{$rallye->title}}</h4>
      <span class="events__show__infos__place"><span class="icon-location4"></span>{{$rallye->street}}&nbsp;{{$rallye->streetNumber}}</br>{{$rallye->town}}</span>
      <span class="events__show__infos__date"><span class="icon-calendar2"></span>{{strftime("%A %d %B %G", strtotime($rallye->date))}}</span>
      <p class="events__show__infos__paragraph">{{$rallye->description}}</p>
    </div>
    @if ((Auth::check()) && ($reserved_rallye == $rallye->id))
      <p>Vous avez réservé cet évenement. <a class="events__show__link" href="{{ URL::route('myReservation') }}">Voir mes réservation</a></p>
    @else
      <a class="events__show__link" href="{{ URL::route('reserve', array($rallye->id, 'new')) }}">Réserver l'évenement</a>
    @endif
  </section>


</section>

@stop
