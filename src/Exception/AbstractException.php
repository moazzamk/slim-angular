<?php

namespace App\Exception;

class AbstractException extends \Exception
{
    protected $code;
    protected $subCode;


    /**
     * AbstractException constructor.
     *
     * @param string           $message
     * @param int              $code
     * @param \Exception|null  $previous
     */
    public function __construct($message, $code=0, \Exception $previous=null)
    {
        if (!empty($this->code) && !empty($code)) {
            $this->subCode = $code;
            $code = $this->code;
        }

        parent::__construct($message, $code, $previous);
    }
}
