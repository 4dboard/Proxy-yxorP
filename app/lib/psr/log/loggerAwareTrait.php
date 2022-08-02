<?php

namespace yxorP\app\lib\psr\log;

/**
 * Basic Implementation of LoggerAwareInterface.
 */
trait loggerAwareTrait
{
    /**
     * The logger instance.
     *
     * @var loggerInterface|null
     */
    protected ?loggerInterface $logger = null;

    /**
     * Sets a logger.
     *
     * @param loggerInterface $logger
     */
    public function setLogger(loggerInterface $logger): void
    {
        $this->logger = $logger;
    }
}
