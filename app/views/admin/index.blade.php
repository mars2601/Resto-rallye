<!doctype html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <title>Administration de Resto-rallye</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="/css/main.css">
  </head>

  <body ng-app="adminApp" class="admin">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

      <h1 class="visuallyhidden">Resto-rallye</h1>
      <nav class="admin__menu">
         <h2 class="visuallyhidden">Navigation principale</h1>

         <h3 class="admin__menu__title">Pages</h3>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/pages/accueil">Accueil</a>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/pages/a-propos">A Propos</a>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/pages/contact">Contact</a>

         <h3 class="admin__menu__title">Galerie</h3>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/galerie/voir">Voir</a>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/galerie/ajouter">Ajouter</a>

         <h3 class="admin__menu__title">événements</h3>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/evenements/voir">Voir</a>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/evenements/ajouter">Ajouter</a>

         <h3 class="admin__menu__title">Utilisateurs</h3>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/utilisateurs/voir">Voir</a>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/utilisateurs/ajouter">Ajouter</a>

         <h3 class="admin__menu__title">Réglages</h3>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/reglages/reseaux-sociaux">Réseaux Sociaux</a>
         <a class="admin__menu__link admin__menu__link--active" ng-href="#/reglages/preferences">Préferencess</a>

      </nav>

      <section ng-view="" class="admin__view">

      </section>



    <!--If before IE9 -->
        <script src="{{ $path }}bower_components/es5-shim/es5-shim.js"></script>
        <script src="{{ $path }}bower_components/json3/lib/json3.js"></script>

    <!-- Angular-->
        <script src="{{ $path }}bower_components/angular/angular.min.js"></script>
        <script src="{{ $path }}bower_components/angular-route/angular-route.min.js"></script>
        <script src="{{ $path }}bower_components/angular-cookies/angular-cookies.min.js"></script>
        <script src="{{ $path }}bower_components/angular-resource/angular-resource.min.js"></script>

    <!-- Script -->
        <script src="{{ $path }}scripts/app.js"></script>
        <script src="{{ $path }}scripts/controllers/main.js"></script>
</body>
</html>
