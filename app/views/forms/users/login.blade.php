{{ Form::open(['route'=>'login', 'class' => 'login']) }}
    {{Form::label('email', 'Email: ', ['for' => 'email'])}}
    {{Form::email('email','' , ['class' => 'aform-control', 'id' => 'email', 'placeholder' => 'Entrez votre Email'])}}

    {{Form::label('password', 'Mot de passe: ', ['for' => 'password'])}}
    {{Form::password('password','' , ['id' => 'password', 'placeholder' => 'Mot de passe'])}}

  {{Form::submit('Se connecter')}}
</form>
{{ Form::close() }}
