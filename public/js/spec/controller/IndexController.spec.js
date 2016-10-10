describe('Index Controller', function () {
    beforeEach(module('App'));

    var $controller,
        $http;

    beforeEach(function (__$controller__, __$http__) {
        $controller = __$controller__;
        $http = __$http__;
    });

    describe('IndexController', function () {
       var scope, httpBackend;

        beforeEach(inject(function ($rootScope, $controller, ) {
            scope = $rootScope.$new();
            httpBackend = $httpBackend;

            httpBackend.when('GET', '/primes').respond([2, 3, 5, 7]);

            $controller('IndexController', { $scope: $scope, $http: $http });

        }));


        describe('getPrimes()', function () {
            $http.flush();
            $controller.getPrimes();

            expect($scope.primeNumbers).toEqual([2, 3, 5, 7]);
        })

    });

    describe('getPrimes()', function () {
        it('fetches prime numbers', function () {
            var $scope = {},
                controller = $controller('IndexController', { $scope: $scope, $http: $http });

            $scope.number = 10;
            $scope.getPrimes();




        })
    });


    it('has something', function () {
        expect(2 + 2).toEqual(4);
    });
});
