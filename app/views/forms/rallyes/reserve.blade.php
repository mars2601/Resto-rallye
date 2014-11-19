@if($way == 'y')
  {{Form::model($rallye, array('route' => 'confirm', 'class' => 'reserve'))}}
  <p>ooo</p>
@else
  {{ Form::open(['route'=>'confirm' , 'class' => 'reserve']) }}
@endif
<fieldset>
  {{Form::label('gift', 'Ceci est un cadeau: ')}}
    {{Form::checkbox('gift','' )}}
</fieldset>

<fieldset>
  <span class='icon-office'></span>
  {{Form::label('id', 'Société: ')}}
    {{Form::text('id','' )}}
</fieldset>
<fieldset>
  <span class='icon-user'></span>
  {{Form::label('contactFirstName', 'Nom: ')}}
    {{Form::text('contactFirstName','' )}}
</fieldset>
<fieldset>
  <span class='icon-mouse'></span>
  {{Form::label('contactLastName', 'Prénom: ')}}
    {{Form::text('contactLastName','' )}}
</fieldset>
<fieldset>
  <span class='icon-directions'></span>
  {{Form::label('street', 'Rue: ')}}
    {{Form::text('street','' )}}
</fieldset>
<fieldset>
  <span class='icon-compass'></span>
  {{Form::label('streetNumber', 'Numéro: ')}}
    {{Form::text('streetNumber','' )}}
</fieldset>
<fieldset>
  <span class='icon-pin-alt'></span>
  {{Form::label('town', 'Ville: ')}}
    {{Form::text('town','' )}}
</fieldset>
<fieldset>
  <span class='icon-phone'></span>
  {{Form::label('telephone', 'Numéro de téléphone: ')}}
    {{Form::text('telephone','' )}}
</fieldset>
<fieldset>
  <span class='icon-users'></span>
  {{Form::label('placeReserved', 'Nombre de personnes attendue: ')}}
    {{Form::number('placeReserved','', ['min' => '0', 'max' => '10'] )}}
</fieldset>

{{ Form::hidden('idRallye', $rallye->id) }}
{{ Form::hidden('way', $way) }}

<fieldset>
  @if ($way == 'y')
    <!-- Modify reservation -->
    {{Form::submit('Modifier la réservation')}}
  @else
    <!-- New reservation -->
    {{Form::submit('Réserver le Rallye')}}
  @endif
</fieldset>
{{ Form::close() }}
