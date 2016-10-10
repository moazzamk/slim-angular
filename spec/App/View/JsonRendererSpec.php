<?php

namespace spec\App\View;

use PhpSpec\ObjectBehavior;
use Psr\Http\Message\ResponseInterface;
use Slim\Http\Body;

class JsonRendererSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType('\App\View\JsonRenderer');
    }
    
    public function it_renders_json_data(ResponseInterface $response, Body $body)
    {
        $data = [ 'hi', 'hello' ];
        $body->write(json_encode($data))->shouldBeCalled();
        $response->getBody()->willReturn($body);
        $this->render($response, $data);
    }
}
