@extends('layouts.master')


@section('content')
<section class="events">
  <div class="events__title big-title">
    <h2>Evénement</h2>
  </div>

  <h3>{{$rallye->title}}</h3>
  <p>
    {{$rallye->street}}{{$rallye->streetNumber}}
    </br>
    {{$rallye->town}}
  </p>
  <p>
    {{strftime("%A %d %B %G", strtotime($rallye->date))}}
  </p>

</section>

@stop
