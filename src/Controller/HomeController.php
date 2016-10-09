<?php

namespace App\Controller;

use Slim\Views\PhpRenderer;

class HomeController
{
    /** @var PhpRenderer  */
    private $renderer;


    /**
     * HomeController constructor.
     * 
     * @param PhpRenderer  $renderer
     */
    public function __construct(PhpRenderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * @param $request
     * @param $response
     * @param array $args
     */
    public function index($request, $response, $args=[])
    {
        $this->renderer->render($response, 'index.phtml', []);
    }
}
