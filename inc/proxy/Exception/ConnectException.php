<?php

namespace yxorP\inc\proxy\Exception;

use Exception;
use yxorP\inc\psr\Http\Message\RequestInterface;

/**
 * Exception thrown when a connection cannot be established.
 *
 * Note that no response is present for a ConnectException
 */
class ConnectException extends ARequestException
{
    public function __construct(
        $message,
        RequestInterface $request,
        Exception $previous = null,
        array $handlerContext = []
    )
    {
        parent::__construct($message, $request, null, $previous, $handlerContext);
    }

    /**
     * @return null
     */
    public function getResponse()
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasResponse(): bool
    {
        return false;
    }
}
