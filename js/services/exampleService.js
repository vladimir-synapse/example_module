(function(){
  angular.module('mainApp')
    .factory('exampleService', function($http){
      return {
        getSingleCall: function() {
          return $http({
            method  : 'GET',
            url     : '/example-url',
          });
        },
      }
    });
})();
