<?php namespace yxorP\app\lib\proxy\exception;

use Exception;
use yxorP\app\lib\psr\http\message\requestInterface;

class connectException extends aRequestException
{
    public function __construct($message, requestInterface $request, Exception $previous = null, array $handlerContext = [])
    {
        parent::__construct($message, $request, null, $previous, $handlerContext);
    }

    public function getResponse()
    {
        return null;
    }

    public function hasResponse(): bool
    {
        return false;
    }
}
