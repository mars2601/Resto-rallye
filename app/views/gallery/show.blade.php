@extends('layouts.master')


@section('content')




    <section class="album">
    	<div class="album__title big-title">
    		<h2>Galerie</h2>
    	</div>


    	<section class="album__photos">
    			<h3 class="album__photos__title"><span>{{$name}}</span></h3>
    			<p class="album__photos__description">
    				{{$description}}
    			</p>


       	@foreach($photos as $photo)
       	    <a href="{{$photo_path . $photo->link}}">
       	        <img src="{{$photo_path . $photo->thumbnail}}" alt="{{$photo->alt}}"/>
       	    </a>

    	@endforeach

    	</section>

    </section>
@stop
