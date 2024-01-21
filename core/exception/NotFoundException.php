<?php

namespace app\core\exception;

class NotFoundException extends \Exception
{

    protected $code = 404;
    protected $message = 'Not found';

    public function __toString(): string
    {
        return "$this->code - $this->message";
    }

}