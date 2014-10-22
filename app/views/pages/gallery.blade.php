
@extends('layouts.master')


@section('content')
    <section class="gallery">
    	<div class="gallery__title big-title">
    		<h2>Galerie</h1>

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