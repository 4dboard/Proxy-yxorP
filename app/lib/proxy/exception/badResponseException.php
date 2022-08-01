<?php namespace yxorP\app\lib\proxy\exception;

use Exception;
use yxorP\app\lib\psr\http\message\RequestInterface;
use yxorP\app\lib\psr\http\message\ResponseInterface;

class badResponseException extends aRequestExceptionAa
{
    public function __construct($message, RequestInterface $request, ResponseInterface $response = null, Exception $previous = null, array $handlerContext = [])
    {
        if (null === $response) {
            @trigger_error('Instantiating the ' . __CLASS__ . ' class without a Response is deprecated since version 6.3 and will be removed in 7.0.', E_USER_DEPRECATED);
        }
        parent::__construct($message, $request, $response, $previous, $handlerContext);
    }
}
