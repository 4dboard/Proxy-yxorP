<?php namespace yxorP\guzzle\Exception;

use Exception;
use yxorP\psr\Http\Message\RequestInterface;

class ConnectException extends RequestException
{
    public function __construct($message, RequestInterface $request, Exception $previous = null, array $handlerContext = [])
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