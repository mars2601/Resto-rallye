@if($way == 'y')
  {{Form::model($eventuser, array('route' => 'confirm', 'class' => 'reserve reserve-first-step'))}}
@else
  {{ Form::open(['route'=>'confirm' , 'class' => 'reserve reserve-first-step']) }}
@endif

<div class="reserve-first-step__check-i">
  {{Form::label('gift', 'Ceci est un cadeau: ')}}
    {{Form::checkbox('gift')}}
</div>
<fieldset class="reserve-first-step__contact-person">
  <div class="contact-person">
    <legend class="reserve-first-step__contact-legend">Désigner une personne de contact</legend>
  </div>
  <div class="reserve-first-step__check-i">
    {{Form::label('me', 'Me désigner moi-même comme personne de contact: ')}}
      {{Form::checkbox('me','' )}}
  </div>
  <div class="contact-person">
    <legend class="reserve-first-step__other-person-legend">Veuillez à remplir les champs suivants.</legend>
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-office'></span>
    {{Form::label('entreprise', '*Société: ')}}
      {{Form::text('entreprise' )}}
      {{$errors->first('entreprise', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-user'></span>
    {{Form::label('contactFirstName', '*Nom: ')}}
      {{Form::text('contactFirstName' )}}
      {{$errors->first('contactFirstName', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-mouse'></span>
    {{Form::label('contactLastName', '*Prénom: ')}}
      {{Form::text('contactLastName' )}}
      {{$errors->first('contactLastName', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-mouse'></span>
    {{Form::label('email', '*Email: ')}}
    {{Form::text('email' )}}
    {{$errors->first('email', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-directions'></span>
    {{Form::label('street', '*Rue: ')}}
      {{Form::text('street' )}}
      {{$errors->first('street', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-compass'></span>
    {{Form::label('streetNumber', '*Numéro: ')}}
      {{Form::text('streetNumber' )}}
      {{$errors->first('streetNumber', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-pin-alt'></span>
    {{Form::label('town', '*Ville: ')}}
      {{Form::text('town' )}}
      {{$errors->first('town', '<span class="error">:message</span>')}}
  </div>
  <div class="reserve-first-step__text-i">
    <span class='icon-phone'></span>
    {{Form::label('telephone', '*Numéro de téléphone: ')}}
      {{Form::text('telephone' )}}
      {{$errors->first('telephone', '<span class="error">:message</span>')}}
  </div>
</fieldset>

<div class="reserve-first-step__text-i placeReserved">
  {{Form::label('placeReserved', '*Nombre de personnes attendue: ')}}
    {{Form::number('placeReserved')}}
    {{$errors->first('placeReserved', '<span class="error">:message</span>')}}
</div>


{{ Form::hidden('idRallye', $rallye->id) }}
{{ Form::hidden('way', $way) }}
<div>
  @if ($way == 'y')
    <!-- Modify reservation -->
    {{Form::submit('Modifier la réservation', ['name' => 'reserve'])}}
  @else
    <!-- New reservation -->
    {{Form::submit('Réserver le Rallye', ['name' => 'reserve'])}}
  @endif
</div>
{{ Form::close() }}
