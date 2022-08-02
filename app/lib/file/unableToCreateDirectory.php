<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;
use Throwable;

final class unableToCreateDirectory extends RuntimeException implements filesystemOperationFailedInterface
{
    private $location;

    public static function atLocation(string $dirname, string $errorMessage = ''): unableToCreateDirectory
    {
        $message = "Unable to create a directory at {$dirname}. {$errorMessage}";
        $e = new static(rtrim($message));
        $e->location = $dirname;
        return $e;
    }

    public static function dueToFailure(string $dirname, Throwable $previous): unableToCreateDirectory
    {
        $message = "Unable to create a directory at {$dirname}";
        $e = new static($message, 0, $previous);
        $e->location = $dirname;
        return $e;
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_CREATE_DIRECTORY;
    }

    public function location(): string
    {
        return $this->location;
    }
}
