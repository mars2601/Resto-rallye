<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Resto-Rallye</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{asset('css/main.css')}}">

        <script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

		<header class="header">
			<div class="wrapper">
			  	<h1 class="header__title"><a class="header__title__link" href=""><span>Resto</span> <span>rallye</span></a></h1>
			  	<nav class="header__nav">
			  		<h2 class="visuallyhidden">Navigation principale</h2>
					<ul>
						<li>{{ link_to_route('homepage', 'Accueil')}}</li>
						<li>{{ link_to_route('about', 'A propos')}}</li>
						<li>{{ link_to_route('rallyes', 'Evenements')}}</li>
						<li>{{ link_to_route('gallery', 'Galerie')}}</li>
						<li>{{ link_to_route('contact', 'Contact')}}</li>
					</ul>
				</nav>
			</div>

      <!-- A revoir /////// TEST USER -->
      <div id="name" style="position:absolute; background-color:red; top:0;">
        @if ( ! (Auth::check()))
          @include('forms.users.login')
          <p>Pas encore inscris ? <a href="{{ URL::route('register') }}">Inscrivez vous !</a></p>
        @else
          <p>
            Vous êtes connecté en tant que {{Auth::user()->email;}}
            <a href="{{ URL::route('logout') }}">se déconnecter</a>

          </p>
        @endif
      </div>
      <!-- A revoir /////// TEST USER -->


		</header>

        @yield('content')

        <footer class="footer">
            <div class="footer__social-network">
                <a href="#" class="footer__social-network__link footer__social-network__link--facebook">Notre page Facebook</a>
                <a href="#" class="footer__social-network__link footer__social-network__link--twitter">Notre profil Twitter</a>
                <a href="#" class="footer__social-network__link footer__social-network__link--rss">Flux RSS</a>
            </div>


            <!-- <div class="footer__social-network">
                {{ Form::open(array('url' => 'foo/bar')) }}
                    {{Form::text('email', 'example@gmail.com')}}
                    {{Form::submit('S’inscrire')}}
                {{ Form::close() }}
            </div> -->

            <div class="footer__end-line">
                <span class="footer__end-line__copyright">
                    ® 2014 Resto-Rallye
                </span>
                <span class="footer__end-line__separation"> - </span>
                <span class="footer__end-line__credits">
                    Fait par <a href="http://www.marcel-pirnay.be">Marcel Pirnay</a> et <a href="http://www.maxime-lefebvre.be">Maxime Lefèbvre</a>
                </span>

            </div>
        </footer>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.1.min.js') }}"><\/script>')</script>

        <script src="{{ asset('js/plugins.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>

		<script src="//use.typekit.net/vey2mcx.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <!--<script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script> -->
    </body>
</html>
