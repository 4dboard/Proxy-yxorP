<?php

namespace yxorP\app\lib\psr\log;

use Stringable;

/**
 * This Logger can be used to avoid conditional log calls.
 *
 * Logging should always be optional, and if no logger is provided to your
 * library creating a NullLogger instance to have something to throw logs at
 * is a good way to avoid littering your code with `if ($this->logger) { }`
 * blocks.
 */
class nullLogger extends abstractLogger
{
    /**
     * Logs with an arbitrary level.
     *
     * @param mixed $level
     * @param string|Stringable $message
     * @param array $context
     *
     * @return void
     *
     * @throws invalidArgumentException
     */
    public function log(mixed $level, string|Stringable $message, array $context = []): void
    {
        // noop
    }
}
