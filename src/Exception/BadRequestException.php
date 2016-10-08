<?php

namespace App\Exception;

class BadRequestException extends AbstractException
{
    protected $code = 400;
}
