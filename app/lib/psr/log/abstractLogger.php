<?php

namespace yxorP\app\lib\psr\log;

/**
 * This is a simple Logger implementation that other Loggers can inherit from.
 *
 * It simply delegates all log-level-specific methods to the `log` method to
 * reduce boilerplate code that a simple Logger that does the same thing with
 * messages regardless of the error level has to implement.
 */
abstract class abstractLogger implements loggerInterface
{
    use loggerTrait;
}
