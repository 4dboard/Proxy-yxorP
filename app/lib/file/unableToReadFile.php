<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use Throwable;

final class unableToReadFile extends RuntimeException implements filesystemOperationFailedInterface
{
    private string $location = '';
    private string $reason = '';

    #[Pure] public static function fromLocation(string $location, string $reason = '', Throwable $previous = null): unableToReadFile
    {
        $e = new unableToReadFile(rtrim("Unable to read file from location: {$location}. {$reason}"), 0, $previous);
        $e->location = $location;
        $e->reason = $reason;
        return $e;
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_READ;
    }

    public function reason(): string
    {
        return $this->reason;
    }

    public function location(): string
    {
        return $this->location;
    }
}
