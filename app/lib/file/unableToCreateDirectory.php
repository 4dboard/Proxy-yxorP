<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use Throwable;

final class unableToCreateDirectory extends RuntimeException implements filesystemOperationFailedInterface
{
    private $location;

    #[Pure] public static function atLocation(string $dirname, string $errorMessage = ''): unableToCreateDirectory
    {
        $message = "Unable to create a directory at {$dirname}. {$errorMessage}";
        $e = new unableToCreateDirectory(rtrim($message));
        $e->location = $dirname;
        return $e;
    }

    #[Pure] public static function dueToFailure(string $dirname, Throwable $previous): unableToCreateDirectory
    {
        $message = "Unable to create a directory at {$dirname}";
        $e = new unableToCreateDirectory($message, 0, $previous);
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
