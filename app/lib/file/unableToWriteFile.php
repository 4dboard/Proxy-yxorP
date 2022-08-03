<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use Throwable;

final class unableToWriteFile extends RuntimeException implements filesystemOperationFailedInterface
{
    private $location = '';
    private $reason;

    #[Pure] public static function atLocation(string $location, string $reason = '', Throwable $previous = null): unableToWriteFile
    {
        $e = new unableToWriteFile(rtrim("Unable to write file at location: {$location}. {$reason}"), 0, $previous);
        $e->location = $location;
        $e->reason = $reason;
        return $e;
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_WRITE;
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
