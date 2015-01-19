{{ Form::open(['route'=>'contact', 'class' => 'contact-form']) }}

<?php if(!Auth::check()): ?>
<fieldset>
  <span class='icon-user'></span>
  {{Form::label('name', 'Nom: ', ['for' => 'name'])}}
  {{Form::text('name','' , ['class' => 'aform-control', 'id' => 'name', 'placeholder' => 'Votre nom et vore prénom'])}}
  {{$errors->first('name', '<span class="error">:message</span>')}}
</fieldset>
<fieldset>
  <span class='icon-mail'></span>
  {{Form::label('email', 'Email: ', ['for' => 'email'])}}
  {{Form::email('email','' , ['class' => 'aform-control', 'id' => 'email', 'placeholder' => 'user@domaine.com'])}}
  {{$errors->first('email', '<span class="error">:message</span>')}}
</fieldset>
<?php endif; ?>
<fieldset>
  {{Form::label('subject', 'Sujet: ', ['for' => 'subject'])}}
  {{Form::text('subject','' , ['class' => 'aform-control', 'id' => 'subject', 'placeholder' => ''])}}
  {{$errors->first('subject', '<span class="error">:message</span>')}}
</fieldset>
<fieldset>
  {{ Form::label('message', 'Message:', ['size' => '30x5']) }}
  {{Form::textarea('message','' , ['size' => '30x5'])}}
  {{$errors->first('message', '<span class="error">:message</span>')}}
</fieldset>
<fieldset>
  {{Form::submit('Envoyer', ['name' => 'contact'])}}
</fieldset>
</form>
{{ Form::close() }}
