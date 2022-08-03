<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;

class unableToResolveFilesystemMount extends RuntimeException implements filesystemExceptionInterface
{
    #[Pure] public static function becauseTheSeparatorIsMissing(string $path): unableToResolveFilesystemMount
    {
        return new unableToResolveFilesystemMount("Unable to resolve the filesystem mount because the path ($path) is missing a separator (://).");
    }

    #[Pure] public static function becauseTheMountWasNotRegistered(string $mountIdentifier): unableToResolveFilesystemMount
    {
        return new unableToResolveFilesystemMount("Unable to resolve the filesystem mount because the mount ($mountIdentifier) was not registered.");
    }
}
