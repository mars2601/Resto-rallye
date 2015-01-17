<!-- Ce form ne contient que des input hidden car les infos sont écrites en "dur dans la page" -->
{{ Form::open(['route'=>'storeReservation' , 'class' => 'reserve__do__infos__form' ]) }}
  <div class="separate">
    {{ Form::hidden('rallyeId', $idRallye) }}
    {{ Form::hidden('placeReserved', $placeReserved) }}
    {{ Form::hidden('entreprise', $entreprise) }}
    {{ Form::hidden('contactFirstName', $contactFirstName) }}
    {{ Form::hidden('contactLastName', $contactLastName) }}
    {{ Form::hidden('email', $email) }}
    {{ Form::hidden('street', $street) }}
    {{ Form::hidden('streetNumber', $streetNumber) }}
    {{ Form::hidden('town', $town) }}
    {{ Form::hidden('telephone', $telephone) }}
    {{ Form::hidden('confirmationCodeHidden', $confirmationCode) }}
    {{ Form::hidden('way', $way) }}

    <legend class="reserve__do__infos__form__alert">Un mail de confirmation a été envoyé à <strong>{{Auth::user()->email}}</strong><br/><strong>Payer la somme</strong> au numéro de compte indiqué dans l'email<br /><strong>Recopiez le code</strong> indiqué dans l'email pour confirmer la réservation du Rallye</legend>
    {{Form::label('confirmationCode', 'Code de confirmation: ')}}
      {{Form::text('confirmationCode' )}}
      <br />
  </div>
  <div class="separate">
      {{Form::submit('Confirmer la réservation', ['name' => 'confirmed'])}}
  </div>
{{ Form::close() }}
