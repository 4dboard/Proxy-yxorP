<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;
use Throwable;

class unableToCheckExistence extends RuntimeException implements filesystemOperationFailedInterface
{
    public static function forLocation(string $path, Throwable $exception = null): static
    {
        return new static("Unable to check existence for: {$path}", 0, $exception);
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_EXISTENCE_CHECK;
    }
}
