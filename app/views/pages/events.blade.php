@extends('layouts.master')


@section('content')
    <section class="events">
      <div class="events__title big-title">
        <h2>Evénements</h2>
      </div>
      <section class="events__next">
          <h3 class="events__next__title">A venir</h3>
          <ol class="events__next__list">
            <li class="events__next__list__item">
              <a class="events__next__list__item__link" href="">
                <span class="events__next__list__item__link__goto"><span class="icon-plus"></span></span>
                <img src="../img/gal_5.png" alt="alt" class="events__next__list__item__link__image"/>
                <div class="events__next__list__item__link__infos">
                  <h4 class="events__next__list__item__link__infos__title">Tournai</h4>
                  <span class="events__next__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 novembre 2014</span>
                  <span class="events__next__list__item__link__infos__place"><span class="icon-calendar2"></span>Boulevard d'Avroy</span>
                </div>
              </a>
            </li>
          </ol>
      </section>
      <section class="events__past">
          <div class="events__past__wrapper">
            <h3 class="events__past__wrapper__title">Passé</h3>
            <h4 class="events__past__wrapper__date">2014</h4>
            <ol class="events__past__wrapper__list">
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link" href="">
                  <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
                  <img src="../img/gal_1.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
                  <div class="events__past__wrapper__list__item__link__infos">
                    <h4 class="events__past__wrapper__list__item__link__infos__title">Bruxelles</h4>
                    <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 octobre 2014</span>
                    <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-calendar2"></span>Grand place</span>
                  </div>
                </a>
              </li>
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link" href="">
                  <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
                  <img src="../img/gal_3.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
                  <div class="events__past__wrapper__list__item__link__infos">
                    <h4 class="events__past__wrapper__list__item__link__infos__title">Bruxelles</h4>
                    <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 octobre 2014</span>
                    <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-calendar2"></span>Grand place</span>
                  </div>
                </a>
              </li>
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link--last" href="">
                  <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
                  <img src="../img/gal_2.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
                  <div class="events__past__wrapper__list__item__link__infos">
                    <h4 class="events__past__wrapper__list__item__link__infos__title">Bruxelles</h4>
                    <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 octobre 2014</span>
                    <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-calendar2"></span>Grand place</span>
                  </div>
                </a>
              </li>
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link" href="">
                  <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
                  <img src="../img/gal_1.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
                  <div class="events__past__wrapper__list__item__link__infos">
                    <h4 class="events__past__wrapper__list__item__link__infos__title">Bruxelles</h4>
                    <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 octobre 2014</span>
                    <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-calendar2"></span>Grand place</span>
                  </div>
                </a>
              </li>
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link" href="">
                  <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
                  <img src="../img/gal_3.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
                  <div class="events__past__wrapper__list__item__link__infos">
                    <h4 class="events__past__wrapper__list__item__link__infos__title">Bruxelles</h4>
                    <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 octobre 2014</span>
                    <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-calendar2"></span>Grand place</span>
                  </div>
                </a>
              </li>
              <li class="events__past__wrapper__list__item">
                <a class="events__past__wrapper__list__item__link--last" href="">
                  <span class="events__past__wrapper__list__item__link__goto"><span class="icon-plus"></span></span>
                  <img src="../img/gal_2.png" alt="alt" class="events__past__wrapper__list__item__link__image"/>
                  <div class="events__past__wrapper__list__item__link__infos">
                    <h4 class="events__past__wrapper__list__item__link__infos__title">Bruxelles</h4>
                    <span class="events__past__wrapper__list__item__link__infos__date"><span class="icon-location4"></span>Le 25 octobre 2014</span>
                    <span class="events__past__wrapper__list__item__link__infos__place"><span class="icon-calendar2"></span>Grand place</span>
                  </div>
                </a>
              </li>
            </ol>
        </div>
      </section>
    </section>

@stop
