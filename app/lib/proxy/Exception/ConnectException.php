<?php namespace yxorP\app\lib\proxy\Exception;

use Exception;
use yxorP\app\lib\Psr\Http\Message\RequestInterface;

class ConnectException extends ARequestExceptionAA
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