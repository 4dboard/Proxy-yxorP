<?php declare(strict_types=1);

/**
 * @license Apache 2.0
 */

namespace yxorP\app\lib\openapi\logger;

use yxorP\app\lib\openapi\logger;
use yxorP\app\lib\psr\log\abstractLogger;
use yxorP\app\lib\psr\log\loggerInterface;
use yxorP\app\lib\psr\log\logLevel;

class DefaultLogger extends abstractLogger implements loggerInterface
{
    public function log(mixed $level, $message, array $context = []): void
    {
        // BC: delegate to the static instance
        if (in_array($level, [logLevel::NOTICE, logLevel::INFO, logLevel::DEBUG])) {
            Logger::notice($message);
        } else {
            Logger::warning($message);
        }
    }
}
