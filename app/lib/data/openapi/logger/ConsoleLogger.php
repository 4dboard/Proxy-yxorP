<?php

namespace yxorP\app\lib\openapi\logger;

use Exception;
use yxorP\app\lib\psr\log\abstractLogger;
use yxorP\app\lib\psr\log\loggerInterface;
use yxorP\app\lib\psr\log\logLevel;

class ConsoleLogger extends abstractLogger implements loggerInterface
{
    public const COLOR_ERROR = "\033[31m";
    public const COLOR_WARNING = "\033[33m";
    public const COLOR_STOP = "\033[0m";

    /** @var bool */
    protected bool $called = false;

    /** @var bool */
    protected bool $debug;

    public function __construct(bool $debug = false)
    {
        $this->debug = $debug;
    }

    public function called()
    {
        return $this->called;
    }

    /**
     * @param array $context additional details; supports custom `prefix` and `exception`
     */
    public function log(mixed $level, $message, array $context = []): void
    {
        $this->called = true;

        $prefix = '';
        $color = '';
        // level adjustments
        switch ($level) {
            case logLevel::WARNING:
                $prefix = $context['prefix'] ?? 'Warning: ';
                $color = static::COLOR_WARNING;
                break;
            case logLevel::ERROR:
                $prefix = $context['prefix'] ?? 'Error: ';
                $color = static::COLOR_ERROR;
                break;
        }
        $stop = !empty($color) ? static::COLOR_STOP : '';

        /** @var ?Exception $exception */
        $exception = $context['exception'] ?? null;
        if ($message instanceof Exception) {
            $exception = $message;
            $message = $exception->getMessage();
        }

        $logLine = sprintf('%s%s%s%s', $color, $prefix, $message, $stop);
        error_log($logLine);

        if ($this->debug) {
            if ($exception) {
                error_log($exception->getTraceAsString());
            } elseif (!empty($logLine)) {
                $stack = explode(PHP_EOL, (new Exception())->getTraceAsString());
                // self
                array_shift($stack);
                // AbstractLogger
                array_shift($stack);
                foreach ($stack as $line) {
                    error_log($line);
                }
            }
        }
    }
}
