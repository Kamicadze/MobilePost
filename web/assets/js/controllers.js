'use strict';

var postmanControllers = angular.module('postmanControllers', []);

postmanControllers.controller('CreatePostmanForm', ['$scope', '$window',
  'Postman', function ($scope, $window, Postman) {
    $scope.submit = function () {
      Postman.save($scope.postman, function () {
        $window.location.href = '#';
      }, function (data, status, headers, config) {
        //console.log(data);
        $scope.errors = {};
        $scope.errors.user={};
        $scope.errors.user.plainPassword={};
        
        if(data.status = 200){

          angular.forEach(data.data.errors.children, function(value, key){
            if(Array.isArray(value.errors)){
              $scope.errors[key] = value.errors.join(',');
            }
          });
          
          angular.forEach(data.data.errors.children.user.children, function(value, key){
            if(Array.isArray(value.errors)){
              $scope.errors.user[key] = value.errors.join(',');
            }
          });
           angular.forEach(data.data.errors.children.user.children.plainPassword.children, function(value, key){
            if(Array.isArray(value.errors)){
              $scope.errors.user.plainPassword[key] = value.errors.join(',');
            }
          });
        }
      });
    };
  }
]);