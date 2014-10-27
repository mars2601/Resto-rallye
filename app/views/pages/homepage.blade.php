@extends('layouts.master')


@section('content')
    <div class="home__introduction">
      <section class="home__introduction__event">
          <div class="home__introduction__event__wrapper">
            <h2 class="home__introduction__event__wrapper__title">Prochain évenement <span>au centre de Liège</span></h2>
            <time datetime="2014-10-22" class="home__introduction__event__wrapper__date">Vendredi 22 octobre 2014</time>
            <a href="" class="home__introduction__event__wrapper__link">Voir l'événement</a>
          </div>
      </section>
      <div class="home__introduction__logo">
        <img src="./img/logo.svg" alt="" class="home__introduction__logo__image">
      </div>
    </div>
    <div class="home__presentation">
      <h2 class="home__presentation__title">C'est quoi ?</h2>
      <p class="home__presentation__paragraph">Pourquoi toujours se limiter à un seul restaurant pour déguster l’entièreté d’un menu ? RestoRallye offre la possibilité à ses « gastronomades » de faire la connaissance en une seule soirée de plusieurs restaurants d’une localité. Pour les participants, c’est aussi l’occasion de découvrir une nouvelle région de manière originale et ludique.</p>
      <img src="../img/presentation.jpg" alt="" class="home__presentation__image">
    </div>
    <div class="home__interview">
      <section class="home__interview__wrapper">
        <img src="./img/interviewer.jpg" height="200" width="200" alt="" class="home__interview__wrapper__image">
        <p class="home__interview__wrapper__paragraph">« Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  »</p>
        <h3 class="home__interview__wrapper__author">Le soir</h3>
      </section>
      <div class="home__introduction__logo home__interview__logo">
        <img src="./img/logo-small.svg" alt="" class="home__introduction__logo__image">
      </div>
    </div>
    <section class="gallery">
      <h2 class="home__gallery__title">Nos derniers événements</h2>
      <section class="gallery__photos">
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
        </section>
      </section>
@stop
