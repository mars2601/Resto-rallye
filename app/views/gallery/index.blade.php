
@extends('...layouts.master')


@section('content')







    <section class="gallery">
    	<div class="gallery__title big-title">
    		<h2>Galerie</h2>
    	</div>


    	<section class="gallery__photos">
    			<h3 class="gallery__photos__title"><span>Photos</span></h3>
    			<!-- <div class="gallery__photos__sort">
    				<a href="#">Tout</a>
    				<a href="#">évenements</a>
    				<a href="#">Thèmes</a>
    			</div> -->


       	@foreach($albums as $album)
       		   	<section class="gallery__photos__album">
	    			<a href="galerie/{{$album['slug']}}" class="gallery__photos__album__link">

	    				<img src="{{ $album['file']  }}" alt="" class="gallery__photos__album__link__image">

	    				<div class="gallery__photos__album__link__text">
	    					<div class="gallery__photos__album__link__text__container">

		    					<h4 class="gallery__photos__album__link__text__title">
		    					{{ $album['name'] }}
		    					</h4>
		    					<time class="gallery__photos__album__link__text__date" datetime="2014-10-25">
		    					Le 25 octobre 2014
		    					</time>
		    	    		</div>
	    				</div>
	    			</a>
    			</section>
    	@endforeach

    	</section>

    	<section class="gallery__videos">
    	<div class="wrapper">
    		<h3 class="gallery__videos__title">Videos</h3>
    		<section class="gallery__videos__video" >
    				<img src="../img/gal_1.png" alt="">
	    				<figcaption>
	    				<div>
	    					<h4>Theux</h4>
	    					<span>Le 25 octobre 2014</span>
	    				</div>
	    			</figcaption>
    		</section>
    	</div>
    	</section>
    </section>
@stop
