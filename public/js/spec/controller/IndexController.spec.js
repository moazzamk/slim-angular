describe('Index Controller', function () {

    var $controller,
        primeNumber;

    beforeEach(module('primey'));

    beforeEach(inject(function (_$controller_, PrimeNumber) {
        $controller = _$controller_;
        primeNumber = PrimeNumber
    }));

    it('should exist', function () {
        var $scope = {};
        controller = $controller('IndexController', {$scope: $scope, PrimeNumber: primeNumber});
        expect(controller).toBeDefined();
    })
});
