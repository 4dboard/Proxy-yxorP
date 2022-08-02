<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;

class unableToResolveFilesystemMount extends RuntimeException implements filesystemExceptionInterface
{
    public static function becauseTheSeparatorIsMissing(string $path): unableToResolveFilesystemMount
    {
        return new unableToResolveFilesystemMount("Unable to resolve the filesystem mount because the path ($path) is missing a separator (://).");
    }

    public static function becauseTheMountWasNotRegistered(string $mountIdentifier): unableToResolveFilesystemMount
    {
        return new unableToResolveFilesystemMount("Unable to resolve the filesystem mount because the mount ($mountIdentifier) was not registered.");
    }
}
