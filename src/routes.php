<?php


// Routes
$routes = require __DIR__ . '/../config/routes.php';
foreach ($routes as $k=>$controllerInfo) {
    $routeInfo = explode('@', $k);
    $app->{$routeInfo[1]}($routeInfo[0], function ($request, $response, $args) use ($controllerInfo, $app) {
        return $app->getContainer()[$controllerInfo[0]]->{$controllerInfo[1]}($request, $response, $args);
    });
}
