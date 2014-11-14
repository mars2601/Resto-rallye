{{ Form::open(['route'=>'confirm' , 'class' => 'reserve']) }}
<fieldset>
  {{Form::label('gift', 'Ceci est un cadeau: ',
  ['class' => 'block'])}}
    {{Form::checkbox('gift','' )}}
</fieldset>

<fieldset>
  {{Form::label('entreprise', 'Société: ',
  ['class' => 'block'])}}
    {{Form::text('entreprise','' )}}
  {{Form::label('contactFirstName', 'Nom: ',
  ['class' => 'block'])}}
    {{Form::text('contactFirstName','' )}}
  {{Form::label('contactLastName', 'Prénom: ',
  ['class' => 'block'])}}
    {{Form::text('contactLastName','' )}}
  {{Form::label('street', 'Rue: ',
  ['class' => 'block'])}}
    {{Form::text('street','' )}}
  {{Form::label('streetNumber', 'Numéro: ',
  ['class' => 'block'])}}
    {{Form::text('streetNumber','' )}}
  {{Form::label('town', 'Ville: ',
  ['class' => 'block'])}}
    {{Form::text('town','' )}}
  {{Form::label('telephone', 'Numéro de téléphone: ',
  ['class' => 'block'])}}
    {{Form::text('telephone','' )}}
  {{Form::label('placeReserved', 'Nombre de personnes attendue: ',
  ['class' => 'block'])}}
    {{Form::number('placeReserved','', ['min' => '0', 'max' => '10'] )}}
  {{ Form::hidden('idRallye', $rallye->id) }}
  {{ Form::hidden('way', $way) }}
</fieldset>

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
