<?php

namespace spec\App\Action;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FindPrimeNumbersActionSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('\App\Action\FindPrimeNumbersAction');
    }

    public function it_returns_prime_numbers_between_zero_and_number_provided()
    {
        $this->run(20)->shouldBe([ 2, 3, 5, 7, 11, 13, 17, 19 ]);
    }
}
