<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;

class pathTraversalDetected extends RuntimeException implements filesystemExceptionInterface
{
    private $path;

    public static function forPath(string $path): pathTraversalDetected
    {
        $e = new pathTraversalDetected("Path traversal detected: {$path}");
        $e->path = $path;
        return $e;
    }

    public function path(): string
    {
        return $this->path;
    }
}
