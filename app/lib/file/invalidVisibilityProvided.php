<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use InvalidArgumentException;
use function var_export;

class invalidVisibilityProvided extends InvalidArgumentException implements filesystemExceptionInterface
{
    public static function withVisibility(string $visibility, string $expectedMessage): invalidVisibilityProvided
    {
        $provided = var_export($visibility, true);
        $message = "Invalid visibility provided. Expected {$expectedMessage}, received {$provided}";
        throw new invalidVisibilityProvided($message);
    }
}
