<?php

return [
    '/primes@get' => [ 'Controller\PrimeNumbersController', 'getList' ],
    '/@get' => [ 'Controller\HomeController', 'index' ]
];
