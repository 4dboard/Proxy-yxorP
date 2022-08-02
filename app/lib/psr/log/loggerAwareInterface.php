<?php

namespace yxorP\app\lib\psr\log;

/**
 * Describes a logger-aware instance.
 */
interface loggerAwareInterface
{
    /**
     * Sets a logger instance on the object.
     *
     * @param loggerInterface $logger
     *
     * @return void
     */
    public function setLogger(loggerInterface $logger): void;
}
