<?php

namespace App\Exception;

class AbstractException extends \Exception
{
    protected $code;

    public function __construct($message, $code=0, \Exception $previous=null)
    {
        if (!empty($code) && !empty($this->code)) {
            $code = "{$this->code}.{$code}";
        }
        parent::__construct($message, $code, $previous);
    }
}

