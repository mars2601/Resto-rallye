@extends('layouts.master')

@section('content')
    <section class="home__introduction">
      <div class="home__introduction__event">
        @foreach($nextRallyes as $next)
          <div class="home__introduction__event__wrapper">
            <h2 class="home__introduction__event__wrapper__title">{{$next->title}}</h2>
            <time datetime="2014-10-22" class="home__introduction__event__wrapper__date"><?php $data = new Date($next->date); ?>{{$data->format('l j F Y');}}</time>
            <a href="{{ URL::route('showEvent', array($next->id, 'n')) }}" class="home__introduction__event__wrapper__link">Voir l'événement</a>
          </div>

          @endforeach

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
        <p class="home__interview__wrapper__paragraph">{{$quote->content}}</p>
        <cite class="home__interview__wrapper__author">{{$quote->author}}</cite>
      </blockquote>
    </section>


    <section class="home__last-events">
      <h2 class="home__last-events"></h2>

    </section>
    <section class="events__past events__past--homepage">
      <div class="events__past__wrapper">
        <h2 class="home__presentation__title">Nos derniers événements</h2>
        <ol class="events__past__wrapper__list">
          @foreach($rallyes as $last)
          <li class="events__past__wrapper__list__item">
            <a class="events__past__wrapper__list__item__link events__past--homepage--item" href="{{ URL::route('showEvent', array($last->id, 'p')) }}">
              <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
              <img src="../img/gal_1.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
              <div class="events__past__wrapper__list__item__link__infos">
                <h4 class="events__past__wrapper__list__item__link__infos__title">{{$last->title}}</h4>
                <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-pin"></span>{{$last->town}}</span>
                <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-calendar"></span>{{strftime("%A %d %B %G", strtotime($last->date))}}</span>
              </div>
            </a>
          </li>
          @endforeach
        </ol>
      </div>
    </section>
@stop
