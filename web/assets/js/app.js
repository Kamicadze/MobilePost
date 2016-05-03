'use strict';

var app = angular.module('postmanManager', [
  'postmanControllers',
  'postmanServices',
  'postmanDirectives',
  'ngRoute'
]);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/postman/new', {
      templateUrl: '/MobilePost/web/assets/partials/postman/postman-form.html',
      controller: 'CreatePostmanForm'
    }).otherwise({
      templateUrl: '/MobilePost/web/assets/partials/index.html',
    });
  }
]);