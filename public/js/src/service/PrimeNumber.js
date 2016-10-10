App.factory('PrimeNumber', ['$http', function ($http) {

    return {
        getPrimes: function (number, callback) {
            $http.get('/primes?number=' + number)
                .then(function (response) {
                    callback(response.data)
                });
        }
    };

}]);
