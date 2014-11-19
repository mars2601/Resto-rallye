@extends('layouts.master')


@section('content')
    <section class="events">
      <div class="events__title big-title">
        <h2>Evénements</h2>
      </div>

      <section class="events__next">
          <h3 class="events__next__title">A venir</h3>
          <ol class="events__next__list">
            @foreach($nextRallyes as $next)
            <li class="events__next__list__item">
              <a class="events__next__list__item__link" href="{{ URL::route('showEvent', array($next->id, 'n')) }}">
                <span class="events__next__list__item__link__goto"><span class="icon-plus"></span></span>
                <img src="../img/gal_5.png" alt="alt" class="events__next__list__item__link__image"/>
                <div class="events__next__list__item__link__infos">
                  <h4 class="events__next__list__item__link__infos__title">{{$next->title}}</h4>
                  <span class="events__next__list__item__link__infos__place"><span class="icon-pin"></span>{{$next->town}}</span>
                  <span class="events__next__list__item__link__infos__date"><span class="icon-calendar"></span>{{strftime("%A %d %B %G", strtotime($next->date))}}</span>
                </div>
              </a>
            </li>
            @endforeach
          </ol>
      </section>

      <section class="events__past">
          <div class="events__past__wrapper">
            <h3 class="events__past__wrapper__title">Passé</h3>
            <h4 class="events__past__wrapper__date">2014</h4>
            <ol class="events__past__wrapper__list">
              @foreach($lastRallyes as $last)
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link" href="{{ URL::route('showEvent', array($last->id, 'p')) }}">
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
    </section>

@stop
