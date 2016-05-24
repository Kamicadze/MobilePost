'use strict';

var postmanServices = angular.module('postmanServices', ['ngResource']);
var userServices = angular.module('userServices', ['ngResource']);
var authorizationServices = angular.module('authorizationServices', ['ngResource']);

postmanServices.factory('Postman', ['$resource',
  function ($resource) {
    return $resource('http://pai.local/MobilePost/web/app_dev.php/api/postman/postmen/:postmanId.json', {}, {
      save: {method: 'POST', headers: {'Accept': 'application/json'}},
      get: {method: 'GET', isArray: false, headers: {'Accept': 'application/json'}}
    });
  }
]);

userServices.factory('User', ['$resource',
  function($resource) {
    return $resource('http://pai.local/MobilePost/web/app_dev.php/login_check', {}, {
      login: {method: 'POST', headers: {'Accept': 'application/json'}}
    });
  }
]);

authorizationServices.factory('Authorization', ['$resource',
  function($resource) {
    return $resource('http://pai.local/MobilePost/web/app_dev.php/api/user.json', {}, {
      get: {method: 'get', headers: {'Accept': 'application/json'}}
    });
  }
]);