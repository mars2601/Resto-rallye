@extends('layouts.master')


@section('content')
<section class="reserve">
  <div class="reserve__title big-title">
    <h2>Réserver</h2>
  </div>

  <section class="reserve__do">
    @if ( ! (Auth::check()))
      <div class="reserve__do__login">
        <h3 class="reserve__do__login__title">Déjà inscris ?</h3>
        @include('forms.users.login')
      </div>
      <div class="reserve__do__register">
        <h3 class="reserve__do__register__title">Pas encore inscris ?</h3>
        @include('forms.users.register')
      </div>
    @else
      <div class="reserve__do__infos">
        <h3 class="reserve__do__infos__title">Réserver l'évenement: {{$rallye->title}}</h3>
        <span class="reserve__do__infos__place"><span class="icon-location4"></span>{{$rallye->street}}&nbsp;{{$rallye->streetNumber}}</br>{{$rallye->town}}</span>
        <span class="reserve__do__infos__date"><span class="icon-calendar2"></span>{{strftime("%A %d %B %G", strtotime($rallye->date))}}</span>
      </div>
      <div class="reserve__do__suscribe">
        @include('forms.rallyes.reserve')
      </div>
    @endif
  </section>



</section>

@stop
