{{ Form::open(['route'=>'login', 'class' => 'login']) }}

    <fieldset>
      <span class='icon-mail'></span>
      {{Form::label('email', 'Email: ', ['for' => 'email'])}}
      {{Form::email('email','' , ['class' => 'aform-control', 'id' => 'email', 'placeholder' => 'user@domaine.com'])}}
        {{$errors->first('email', '<span class="error">:message</span>')}}
    </fieldset>
    <fieldset>
      <span class='icon-lock'></span>
      {{Form::label('password', 'Mot de passe: ', ['for' => 'password'])}}
      {{Form::password('password','' , ['id' => 'password', 'placeholder' => 'Mot de passe'])}}
        {{$errors->first('password', '<span class="error">:message</span>')}}
    </fieldset>
    <fieldset>
      {{Form::submit('Se connecter', ['name' => 'login'])}}
    </fieldset>
</form>
{{ Form::close() }}
