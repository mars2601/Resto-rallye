@extends('layouts.master')


@section('content')
<section class="events">
  <div class="events__title big-title">
    <h2>S'enregistrer</h2>
  </div>

  @include('forms.users.register')

</section>

@stop
