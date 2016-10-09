<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

$app->getContainer()['errorHandler'] = function ($c) {
    return function ($request, $response, $exception) use ($c) {
        return $c['response']->withStatus($exception->getCode())
            ->withHeader('Content-Type', 'application/json')
            ->write(json_encode([
                'message' => $exception->getMessage(),
                'code' => $exception->getCode(),
                'success' => 0,
            ]));
    };
};

$servicesConfig = require __DIR__ . '/../config/services.php';
foreach ($servicesConfig as $key=>$value) {
	$container[$key] = $value;
}

