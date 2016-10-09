<?php


namespace spec\App\Controller;

use App\Action\FindPrimeNumbersAction;
use App\View\JsonRenderer;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PrimeNumberControllerSpec extends ObjectBehavior
{
    public function let(FindPrimeNumbersAction $findPrimeNumbersAction, JsonRenderer $jsonRenderer)
    {
        $this->beConstructedWith($findPrimeNumbersAction, $jsonRenderer);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('\App\Controller\PrimeNumberController');
    }
}
