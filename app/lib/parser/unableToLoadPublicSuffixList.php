<?php

namespace yxorP\app\lib\parser;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use Throwable;

final class unableToLoadPublicSuffixList extends InvalidArgumentException implements cannotProcessHostInterface
{
    #[Pure] public static function dueToInvalidRule(?string $line, Throwable $exception): self
    {
        return new self('The following rule "' . ($line ?? 'NULL') . '" could not be processed because it is invalid.', 0, $exception);
    }
}