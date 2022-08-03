<?php

declare(strict_types=1);

namespace yxorP\app\lib\data\graphQL\Error;

use JetBrains\PhpStorm\Pure;
use LogicException;

/**
 * Note:
 * This exception should not inherit base Error exception as it is raised when there is an error somewhere in
 * user-land code
 */
class InvariantViolation extends LogicException
{
    #[Pure] public static function shouldNotHappen(): self
    {
        return new self('This should not have happened');
    }
}
