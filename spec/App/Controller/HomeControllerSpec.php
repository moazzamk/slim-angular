<?php


namespace spec\App\Controller;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Slim\Views\PhpRenderer;

class HomeControllerSpec extends ObjectBehavior
{
    public function let(PhpRenderer $renderer)
    {
        $this->beConstructedWith($renderer);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('\App\Controller\HomeController');
    }
}
