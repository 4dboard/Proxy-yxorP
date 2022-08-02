<?php

declare(strict_types=1);

namespace yxorP\app\lib\psr\graphQL\Server;

use Exception;
use yxorP\app\lib\psr\graphQL\Error\ClientAwareInterface;

class RequestError extends Exception implements ClientAwareInterface
{
    /**
     * Returns true when exception message is safe to be displayed to client
     *
     * @return bool
     */
    public function isClientSafe()
    {
        return true;
    }

    /**
     * Returns string describing error category. E.g. "validation" for your own validation errors.
     *
     * Value "graphql" is reserved for errors produced by query parsing or validation, do not use it.
     *
     * @return string
     */
    public function getCategory()
    {
        return 'request';
    }
}
