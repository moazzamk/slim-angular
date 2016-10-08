<?php

namespace App\Controller;

use App\Action\FindPrimeNumbersAction;
use App\Exception\BadRequestException;
use App\View\JsonRenderer;
use Psr\Http\Message\RequestInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class PrimeNumberController
{
	/** @var \App\Action\FindPrimeNumbersAction */
	private $findPrimeNumbersAction;

	/** @var  JsonRenderer */
	private $renderer;


	/**
	 * PrimeNumberController constructor.
	 *
	 * @param FindPrimeNumbersAction  $findPrimeNumbersAction
	 * @param JsonRenderer            $jsonRenderer
	 */
	public function __construct(FindPrimeNumbersAction $findPrimeNumbersAction, JsonRenderer $jsonRenderer)
	{
		$this->findPrimeNumbersAction = $findPrimeNumbersAction;
		$this->renderer = $jsonRenderer;
	}

	/**
	 * @param Request   $request
	 * @param Response  $response
	 * @param array     $args
	 *
	 * @return \Psr\Http\Message\ResponseInterface
	 * @throws BadRequestException
	 */
	public function getList(Request $request , Response $response, $args)
	{
		$number = $request->getParam('number');
		$ret = $this->findPrimeNumbersAction->run($number);

		return $this->renderer->render($response, $ret);
	}
}
