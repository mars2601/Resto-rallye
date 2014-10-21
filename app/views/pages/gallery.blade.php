
@extends('layouts.master')


@section('content')
    <section class="gallery">
    	<div class="gallery__title big-title">
    		<h2>Galerie</h1>
    		<svg class="decor" height="100px" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
				  <path d="M0 100 L100 0 L100 100" stroke-width="0"  fill="#FFF"></path>
			</svg>
    	</div>


    	<section class="gallery__photos">
    			<h3 class="gallery__photos__title"><span>Photos</span></h3>
    			<div class="gallery__photos__sort">
    				<a href="#">Tout</a>
    				<a href="#">évenements</a>
    				<a href="#">Thèmes</a>
    			</div>
    			<section class="gallery__photos__album">
	    			<a href="#">
	    				<img src="../img/gal_1.png" alt="">
	    				<figcaption>
		    				<div>
		    					<h4>Centre de Liège</h4>
		    					<span>Le 25 octobre 2014</span>
		    				</div>
	    				</figcaption>
	    			</a>
    			</section>
       			
       			<section class="gallery__photos__album">
	    			<a href="#">
	    				<img src="../img/gal_2.png" alt="">
	    				<figcaption>
	    				<div>
	    					<h4>Tournai</h4>
	    					<span>Le 25 octobre 2014</span>
	    					</div>
	    				</figcaption>
	    			</a>
    			</section>
    	   		
    	   		<section class="gallery__photos__album gallery__photos__album--last">
	    			<a href="#">
	    				<img src="../img/gal_3.png" alt="">
	    				<figcaption>
		    				<div>
		    					<h4>Sablon (Bruxelles)</h4>
		    					<span>Le 25 octobre 2014</span>
		    				</div>
	    				</figcaption>
	    			</a>
    			</section>
    	   		
    	   		<section class="gallery__photos__album">
	    			<a href="#">
	    				<img src="../img/gal_4.png" alt="">
	    				<figcaption>
	    					<div>
	    						<h4>Le pays de Herve</h4>
	    						<span>Le 25 octobre 2014</span>
	    					</div>
	    				</figcaption>
	    			</a>
    			</section>
    	   		
    	   		<section class="gallery__photos__album ">
	    			<a href="#">
	    				<img src="../img/gal_5.png" alt="">
	    				<figcaption>
	    					<div>
	    						<h4>Marche-en-famenne</h4>
	    						<span class="gallery__photos__album__date">Le 25 octobre 2014</span>
	    					</div>
	    				</figcaption>
	    			</a>
    			</section>

    	   		<section class="gallery__photos__album gallery__photos__album--last">
	    			<a href="#">
	    				<img src="../img/gal_1.png" alt="">
	    				<figcaption>
	    				<div>
	    					<h4>Theux</h4>
	    					<span>Le 25 octobre 2014</span>
	    				</div>
	    				</figcaption>
	    			</a>
    			</section>
    	</section>

    	<section class="gallery__videos">
    			<svg class="decor" height="100px" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
				  <path d="M0 0 L50 100 L100 0" stroke-width="0"  fill="#FFF"></path>

    	</svg>
    			<h3 class="gallery__videos__title">Videos</h3>
    		
    	</section>
    </section>
@stop