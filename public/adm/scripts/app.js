'use strict';

/**
 * @ngdoc overview
 * @name adminApp
 * @description
 * # adminApp
 *
 * Main module of the application.
 */
angular
  .module('adminApp', [
    'ngRoute'
  ])
  .config(function ($routeProvider) {
    $routeProvider
        .when('/', {
        templateUrl: '/adm/views/main.html',
        controller: 'MainCtrl'
        })

        .when('/pages/accueil', {
        templateUrl: '/adm/views/pages/home.html',
        controller: 'HomeCtrl'
        })

        .when('/pages/a-propos', {
        templateUrl: '/adm/views/pages/about.html',
        controller: 'AboutCtrl'
        })

        .when('/pages/contact', {
            templateUrl: '/adm/views/pages/contact.html',
            controller: 'AboutCtrl'
        })



        .otherwise({
        redirectTo: '/'
        });
  });
