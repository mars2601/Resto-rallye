{{ Form::open(['route'=>'store', 'class' => 'register']) }}
    {{Form::label('firstName', 'Nom: ',
    ['class' => 'block'])}}
      {{Form::text('firstName','' )}}
    {{Form::label('lastName', 'Prénom: ',
    ['class' => 'block'])}}
      {{Form::text('lastName','' )}}
    {{Form::label('email', 'Email: ',
    ['class' => 'block'])}}
      {{Form::email('email','' )}}
    {{Form::label('password', 'Mot de passe: ',
    ['class' => 'block'])}}
      {{Form::password('password','' )}}
      {{Form::submit('S\'enregistrer')}}
  </div>
{{ Form::close() }}
