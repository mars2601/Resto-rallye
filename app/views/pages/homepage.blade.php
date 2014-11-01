@extends('layouts.master')


@section('content')

<?php //dd($quote); ?>
    <section class="home__introduction">
      <div class="home__introduction__event">
          <div class="home__introduction__event__wrapper">
            <h2 class="home__introduction__event__wrapper__title">Prochain évenement au centre de Liège</h2>
            <time datetime="2014-10-22" class="home__introduction__event__wrapper__date">Vendredi 22 octobre 2014</time>
            <a href="" class="home__introduction__event__wrapper__link">Voir l'événement</a>
          </div>
      </div>
      <img src="./img/logo.svg" alt="" class="home__introduction__logo">
    </section>


    <section class="home__presentation">
      <h2 class="home__presentation__title">C'est quoi ?</h2>
      <p class="home__presentation__paragraph">Pourquoi toujours se limiter à un seul restaurant pour déguster l’entièreté d’un menu ? RestoRallye offre la possibilité à ses « gastronomades » de faire la connaissance en une seule soirée de plusieurs restaurants d’une localité. Pour les participants, c’est aussi l’occasion de découvrir une nouvelle région de manière originale et ludique.</p>
      <img src="../img/presentation.jpg" alt="" class="home__presentation__image">
    </section>


    <section class="home__interview">
      <h2 class="visuallyhidden">Témoignages</h2>
      <blockquote  class="home__interview__wrapper">
        <img src="./img/interviewer.jpg" height="200" width="200" alt="" class="home__interview__wrapper__image">
        <p class="home__interview__wrapper__paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <cite class="home__interview__wrapper__author">Le soir</cite>
      </blockquote>
    </section>


    <section class="home__last-events">
      <h2 class="home__last-events">Nos derniers événements</h2>

    </section>
@stop
