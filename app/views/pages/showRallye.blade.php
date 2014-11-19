@extends('layouts.master')

<script src="{{ asset('js/vendor/raphael.2.1.0.min.js')}}"></script>
<script src="{{ asset('js/vendor/justgage.1.0.1.min.js')}}"></script>

@section('content')
<section class="events">
  <div class="events__title big-title">
    <h2>Evénement
      @if ($dateStatus == 'n')
        A venir
      @else
        Passé
      @endif
    </h2>
  </div>

  <section class="events__show">
    <img src="../img/gal_5.png" alt="alt" class="events__show__image"/>
    <div class="events__show__infos">
      <div class="events__show__infos__header">
        <h4 class="events__show__infos__header__title">{{$rallye->title}}</h4>
        <div id="gauge" style="width:280px; height:200px"><p class="ifNoJs">{{$rallye->placeAvailable}} places restantes</p></div>
        <span class="events__show__infos__header__place"><span class="icon-pin"></span>{{$rallye->street}}&nbsp;{{$rallye->streetNumber}}, {{$rallye->town}}</span>
        <span class="events__show__infos__header__date"><span class="icon-calendar"></span>{{strftime("%A %d %B %G", strtotime($rallye->date))}}</span>
      </div>
        <p class="events__show__infos__paragraph">{{$rallye->description}}</p>




    @if ((Auth::check()) && ($reserved_rallye == $rallye->id) && ($dateStatus == 'n'))
      <p class="events__show__infos__reserve">Vous avez réservé cet évenement.</p><a class="events__show__link" href="{{ URL::route('myReservation') }}">Voir mes réservation</a>
      <!-- <p>Vous avez réservé cet évenement.</p> -->
    @elseif($dateStatus == 'n')
      <a class="events__show__link" href="{{ URL::route('reserve', array($rallye->id, 'new')) }}">Réserver l'évenement</a>
    @else
      <a class="events__show__link" href="{{ URL::route('album', array($rallye->id, 'new')) }}">Voir l'album</a>
    @endif
  </div>

  </section>

  <script>
  var percentColors = [
    "#000000"
  ]
  var g = new JustGage({
    id: "gauge",
    value: {{$rallye->placeAvailable}},
    min: 0,
    max: {{$rallye->place}},
    title: "Places",
    label: "restantes",
    valueFontColor : "#555",
    labelFontColor: "#555",
    titleFontColor: "#000000",
    levelColors : percentColors
    });
</script>

</section>

@stop
