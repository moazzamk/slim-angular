<?php

namespace App\Controller;

use App\Action\FindPrimeNumbersAction;
use App\Exception\BadRequestException;

class PrimeNumberController
{
	/** @var \App\Action\FindPrimeNumbersAction */
	private $findPrimeNumbersAction;


	
	public function __construct(FindPrimeNumbersAction $findPrimeNumbersAction)
	{
		$this->findPrimeNumbersAction = $findPrimeNumbersAction;
	}

	public function get($request, $response, $args)
	{
		$number = $request->getAttribute('number');
		if (empty($number)) {
			throw new BadRequestException('Please provide a number greater than zero');
		}

		$ret = $this->findPrimeNumbersAction->run($number);
	}
}
