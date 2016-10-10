
App.controller('IndexController', ['$scope', 'PrimeNumber', function ($scope, PrimeNumber) {
    $scope.number = 1000;

    $scope.getPrimes = function () {
        PrimeNumber.getPrimes($scope.number, function (data) {
            $scope.primeNumbers = data;
        });
    };
}]);
