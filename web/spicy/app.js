var myApp = angular.module('myApp', []);

/* Note that using scope is different than using this
 * In particular, the as property does not work with $scope
 * Need to fully understand why ar some point
 */
myApp.controller('SpicyController', ['$scope', function($scope) {
    $scope.spice = 'very';
    $scope.customSpice = 'wasabi';

    $scope.chiliSpicy = function() {
        $scope.spice = 'chili';
    };

    $scope.jalapenoSpicy = function() {
        $scope.spice = 'jalapeño';
    };
    $scope.spicy = function(spice) {
        $scope.spice = spice;
    };
}]);