'use strict';

var app = angular.module('postmanManager', [
  'postmanControllers',
  'dashboardControllers',
  'userControllers',
  'postmanServices',
  'userServices',
  'authorizationServices',
  'postmanDirectives',
  'ngRoute'
]);

app.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.when('/postman/new', {
      templateUrl: '/MobilePost/web/assets/partials/postman/postman-form.html',
      controller: 'CreatePostmanForm'
    }).when('/login',{
      templateUrl: '/MobilePost/web/assets/partials/user/login-form.html',
      controller: 'LoginUserForm'
    }).otherwise({
      templateUrl: '/MobilePost/web/assets/partials/index.html',
      controller: 'Dashboard'
    });
  }
]);
