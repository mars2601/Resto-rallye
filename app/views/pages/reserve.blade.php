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
    @elseif(Auth::check())
      <div class="reserve__do__infos">
        <h3 class="reserve__do__infos__title">{{$rallye->title}}</h3>
      </div>
      <div class="reserve__do__reserveHeader">
        <span class="reserve__do__reserveHeader__place"><span class="icon-pin"></span>{{$rallye->street}}&nbsp;{{$rallye->streetNumber}}, {{$rallye->town}}</span>
        <span class="reserve__do__reserveHeader__date"><span class="icon-calendar"></span><?php $data = new Date($rallye->date); ?>{{$data->format('l j F Y');}}</span>
      </div>
      <div class="reserve__do__suscribe">
        @include('forms.rallyes.reserve')
      </div>
      <!-- {{$way}} -->
      <!--
        <!-- id -->
    		<!-- {{ Form::label('entreprise', 'Société') }}
    		{{ Form::text('entreprise') }}
      {{ Form::close() }} -->

    @else
      <!-- L'utilsateur a déja réervé cet évenement -->
    @endif
  </section>





</section>

@stop
