<?php

return [
	// Actions
	'Action\FindPrimeNumbersAction' => function () {
		return new App\Action\FindPrimeNumbersAction();
	},

	// Controllers
	'Controller\PrimeNumbersController' => function ($container) {
		return new \App\Controller\PrimeNumberController(
			$container['Action\FindPrimeNumbersAction'],
			$container['JsonRenderer']
		);
	},
	'Controller\HomeController' => function ($container) {
		return new \App\Controller\HomeController($container['renderer']);
	},


	// Misc. Services
	'JsonRenderer' => function () {
		return new \App\View\JsonRenderer();
	}
];
