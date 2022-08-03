<?php namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;

final class corruptedPathDetected extends RuntimeException implements filesystemExceptionInterface
{
    #[Pure] public static function forPath(string $path): corruptedPathDetected
    {
        return new corruptedPathDetected("Corrupted path detected: " . $path);
    }
}
