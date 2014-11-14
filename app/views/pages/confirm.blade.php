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
        <h3 class="reserve__do__infos__title">Réservation de: {{$rallye->title}}</h3>
        <span class="reserve__do__infos__place"><span class="icon-location4"></span>{{$rallye->street}}&nbsp;{{$rallye->streetNumber}}</br>{{$rallye->town}}</span>
        <span class="reserve__do__infos__date"><span class="icon-calendar2"></span>{{strftime("%A %d %B %G", strtotime($rallye->date))}}</span>
      </div>
    </br>
    </br>
      <p>Mr/Mme {{$userLastName}},</p>
    </br>
      <p class="reserve__do__infos__nbPlace">Vous avez réserver {{$placeReserved}} places</p>

    </br>

      <div id="name">
        <p class="reserve__do__infos__entreprise">Au nom de l'entreprise {{$entreprise}}</p>
        <p>La personne de contact est {{$contactFirstName}} {{$contactLastName}}</p>
        <p>Rue {{$street}} {{$streetNumber}}</p>
        <p>{{$town}}</p>
        <p>{{$telephone}}</p>
      </div>

      @include('forms.rallyes.confirm')

  </section>



</section>

@stop
