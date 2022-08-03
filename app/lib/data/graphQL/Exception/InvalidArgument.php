<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Exception;

use InvalidArgumentException;
use JetBrains\PhpStorm\Pure;
use function gettype;
use function sprintf;

final class InvalidArgument extends InvalidArgumentException
{
    /**
     * @param mixed $argument
     */
    #[Pure] public static function fromExpectedTypeAndArgument(string $expectedType, mixed $argument): self
    {
        return new self(sprintf('Expected type "%s", got "%s"', $expectedType, gettype($argument)));
    }
}
