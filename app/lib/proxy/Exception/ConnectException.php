<?php namespace yxorP\app\lib\proxy\exception;

use Exception;
use yxorP\app\lib\Psr\Http\Message\RequestInterface;

class connectException extends aRequestExceptionAa
{
    public function __construct($message, RequestInterface $request, Exception $previous = null, array $handlerContext = [])
    {
        parent::__construct($message, $request, null, $previous, $handlerContext);
    }

    public function getResponse()
    {
        return null;
    }

    public function hasResponse()
    {
        return false;
    }
}
