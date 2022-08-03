<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Error;

use RuntimeException;

/**
 * Error caused by actions of GraphQL clients. Can be safely displayed to a client...
 */
class UserError extends RuntimeException implements ClientAwareInterface
{
    /**
     * @return bool
     */
    public function isClientSafe(): bool
    {
        return true;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return 'user';
    }
}
