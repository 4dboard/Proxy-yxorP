<?php namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;

final class corruptedPathDetected extends RuntimeException implements filesystemExceptionInterface
{
    public static function forPath(string $path): corruptedPathDetected
    {
        return new corruptedPathDetected("Corrupted path detected: " . $path);
    }
}
