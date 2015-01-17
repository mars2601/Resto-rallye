@extends('layouts.master')


@section('content')

<!-- <script src="{{ asset('js/vendor/shadowbox.js')}}"></script> -->
    <script src="{{ asset('js/vendor/jquery.colorbox-min.js')}}"></script>

    <section class="album">
    	<div class="album__title big-title">
    		<h2>Galerie</h2>
    	</div>

    	<section class="album__photos">
    			<h3 class="album__photos__title"><span>{{$name}}</span></h3>
    			<p class="album__photos__description">
    				{{$description}}
    			</p>

        <section class="album__photos__list">
         	@foreach($photos as $photo)
              <a class="thumbnail" rel="shadowbox[gallery]" style="background-image: url({{$photo_path . $photo->thumbnail}})" title="{{$photo->alt}}" href="{{$photo_path . $photo->link}}">
         	    </a>
      	@endforeach
        </section>
      <a class="button" href="{{ URL::route('showEvent', array($rallye->id, 'p')) }}">Voir l'évenement'</a>
    	</section>
    </section>

    <script>
      jQuery('a.thumbnail').colorbox({ opacity:0.5 , rel:'group1', width:"80%", height:"80%", arrowKey:true, next:"suivante", previous:"précédente" });
    </script>


@stop
