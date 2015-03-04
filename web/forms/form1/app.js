var myApp = angular.module('myApp', []);

/* Note that using scope is different than using this
 * In particular, the as property does not work with $scope
 * Need to fully understand why ar some point
 */
myApp.controller('FormController', ['$scope', function($scope) {
    $scope.master = {};

    $scope.update = function(user) {
      $scope.master = angular.copy(user);
    };

    $scope.reset = function() {
      $scope.user = angular.copy($scope.master);
    };

    $scope.reset();
}]);
