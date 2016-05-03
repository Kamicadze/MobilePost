'use strict';

var postmanServices = angular.module('postmanServices', ['ngResource']);

postmanServices.factory('Postman', ['$resource',
  function ($resource) {
    return $resource('http://pai.local/MobilePost/web/app_dev.php/api/postman/postmen/:postmanId.json', {}, {
      save: {method: 'POST', headers: {'Accept': 'application/json'}},
      get: {method: 'GET', isArray: false, headers: {'Accept': 'application/json'}}
    });
  }
]);