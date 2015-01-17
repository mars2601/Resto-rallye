{{ Form::open(['route'=>'store', 'class' => 'register']) }}

  <fieldset>
    <span class='icon-user'></span>
    {{Form::label('firstName', 'Nom: ')}}
    {{Form::text('firstName','' )}}
      {{$errors->first('firstName', '<span class="error">:message</span>')}}
  </fieldset>
  <fieldset>
    <span class='icon-mouse'></span>
    {{Form::label('lastName', 'Prénom: ')}}
    {{Form::text('lastName','' )}}
      {{$errors->first('lastName', '<span class="error">:message</span>')}}
  </fieldset>
  <fieldset>
    <span class='icon-mail'></span>
    {{Form::label('email', 'Email: ')}}
    {{Form::email('email','' )}}
      {{$errors->first('emailRegister', '<span class="error">:message</span>')}}
  </fieldset>
  <fieldset>
    <span class='icon-lock'></span>
    {{Form::label('password', 'Mot de passe: ')}}
    {{Form::password('password','' )}}
      {{$errors->first('passwordRegister', '<span class="error">:message</span>')}}
  </fieldset>
  <fieldset>
    {{Form::submit('S\'enregistrer', ['name' => 'register'])}}
  </fieldset>
{{ Form::close() }}
