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
        <span class="reserve__do__reserveHeader__date"><span class="icon-calendar"></span><?php $data = new Date($rallye->date); ?>{{$data->format('l j F Y');}}</span>
      </div>

      <p class="reserve__do__infos__infoHeader">Réservation de <strong>{{ucfirst(Auth::user()->firstName)}} {{ucfirst(Auth::user()->lastName)}}</strong></p>
      <p class="reserve__do__infos__infoHeader">Nombre de place réservée: <strong>{{$placeReserved}}</strong></p>

      <div class="reserve__do__infos__infoName">
        <h4>Personne de contact</h4>
        <p><span class='icon-user'></span>{{$contactFirstName}} {{$contactLastName}}
        </p>
        <p class="reserve__do__infos__infoName__info"><span class='icon-office'></span>{{$entreprise}}</p>
        <p class="reserve__do__infos__infoName__info"><span class='icon-directions'></span>{{$street}} {{$streetNumber}}</p>
        <p class="reserve__do__infos__infoName__info"><span class='icon-pin'></span>{{$town}}</p>
        <p class="reserve__do__infos__infoName__info"><span class='icon-phone'></span>{{$telephone}}</p>
      </div>
      <div class="reserve__do__infos__form">
      @include('forms.rallyes.confirm')
      </div>


  </section>
</section>

@stop
