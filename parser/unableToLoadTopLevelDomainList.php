<?php

namespace yxorP\parser;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Throwable;

final class unableToLoadTopLevelDomainList extends InvalidArgumentException implements cannotProcessHostInterface
{
    #[Pure] #[Pure] public static function dueToInvalidTopLevelDomain(string $content, Throwable $exception = null): self
    {
        return new self('Invalid Top Level Domain: ' . $content, 0, $exception);
    }

    #[Pure] #[Pure] public static function dueToInvalidVersionLine(string $line): self
    {
        return new self('Invalid Version line: ' . $line);
    }

    #[Pure] #[Pure] public static function dueToFailedConversion(): self
    {
        return new self('Invalid content: Top Level Domain List conversion failed.');
    }

    #[Pure] #[Pure] public static function dueToInvalidLine(string $line): self
    {
        return new self('Invalid line content: ' . $line);
    }
}