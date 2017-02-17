(function(){
    angular.module('mainApp', ['ngSanitize'],
        function($interpolateProvider){
            $interpolateProvider.startSymbol('{@');
            $interpolateProvider.endSymbol('@}');
        }
    );
})();