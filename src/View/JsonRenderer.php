<?php

namespace App\View;

use Psr\Http\Message\ResponseInterface;

class JsonRenderer
{
    public function render(ResponseInterface $response, array $data = [])
    {
        $response->getBody()->write(json_encode($data));

        return $response;
    }
}
