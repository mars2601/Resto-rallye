@extends('layouts.master')


@section('content')
<section class="reserve">
  <div class="reserve__title big-title">
    <h2>Confirmer la réservation</h2>
  </div>

  <!-- Même code que dans reserve afin d'afficher les infos que l'utilisateurs a entrer afin qu'il puisse
  ---  Les confirmer . Ces infos sont écrite en "dur" (plus dans un form)
  -->

  <section class="reserve__do">
      <div class="reserve__do__infos">
        <h3 class="reserve__do__infos__title">{{$rallye->title}}</h3>
      </div>
      <div class="reserve__do__reserveHeader">
        <span class="reserve__do__reserveHeader__place"><span class="icon-pin"></span>{{$rallye->street}}&nbsp;{{$rallye->streetNumber}}, {{$rallye->town}}</span>
        <span class="reserve__do__reserveHeader__date"><span class="icon-calendar"></span>{{strftime("%A %d %B %G", strtotime($rallye->date))}}</span>
      </div>
    </br>
    </br>
      <p>Réservation de <strong>{{ucfirst(Auth::user()->firstName)}} {{ucfirst(Auth::user()->lastName)}}</strong></p>
    </br>
      <p class="reserve__do__infos__nbPlace">Places réservées: <strong>{{$placeReserved}}</strong></p>

    </br>

      <div id="name">
        <h4>Personne de contact</h4>
        <p><span class='icon-user'></span><strong>{{$contactFirstName}} {{$contactLastName}}</strong></p>
        <p class="reserve__do__infos__entreprise"><span class='icon-office'></span><strong>{{$entreprise}}</strong></p>
        <p class="adress"><span class='icon-directions'></span>{{$street}} {{$streetNumber}}</p>
        <p class="adress"><span class='icon-pin'></span>{{$town}}</p>
        <p class="adress"><span class='icon-phone'></span>{{$telephone}}</p>
      </div>

      @include('forms.rallyes.confirm')

  </section>



</section>

@stop
