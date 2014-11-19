<!-- Ce form ne contient que des input hidden car les infos sont écrites en "dur dans la page" -->
{{ Form::open(['route'=>'storeReservation' , 'class' => 'confirm' ]) }}
  <div class="separate">
    {{ Form::hidden('rallyeId', $idRallye) }}
    {{ Form::hidden('placeReserved', $placeReserved) }}
    {{ Form::hidden('entreprise', $entreprise) }}
    {{ Form::hidden('contactFirstName', $contactFirstName) }}
    {{ Form::hidden('contactLastName', $contactLastName) }}
    {{ Form::hidden('street', $street) }}
    {{ Form::hidden('streetNumber', $streetNumber) }}
    {{ Form::hidden('town', $town) }}
    {{ Form::hidden('telephone', $telephone) }}

    {{ Form::hidden('way', $way) }}
  </div>
  </br>
  </br>
  <div class="separate">
      {{Form::submit('Confirmer la réservation')}}
  </div>
{{ Form::close() }}
