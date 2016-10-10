describe('PrimeNumber Test', function () {
    var primeNumber,
        $httpBackend;

    beforeEach(module('primey'));
    beforeEach(inject(function(_PrimeNumber_, _$httpBackend_) {
        primeNumber = _PrimeNumber_;
        $httpBackend = _$httpBackend_;
    }));

    it('should exist', function () {
        expect(primeNumber).toBeDefined();
    });

    describe('getPrimes()', function () {
        it('gets prime numbers', function () {
            $httpBackend.expectGET('/primes?number=' + 5).respond([2, 3, 5]);

            primeNumber.getPrimes(5, function (data) {
                expect(data).toEqual([2, 3, 5]);
            });

            $httpBackend.flush();
        });
    });
});