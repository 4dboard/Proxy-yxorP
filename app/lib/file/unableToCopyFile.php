<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;
use Throwable;

final class unableToCopyFile extends RuntimeException implements filesystemOperationFailedInterface
{
    private $source;
    private $destination;

    public static function fromLocationTo(string $sourcePath, string $destinationPath, Throwable $previous = null): unableToCopyFile
    {
        $e = new static("Unable to copy file from $sourcePath to $destinationPath", 0, $previous);
        $e->source = $sourcePath;
        $e->destination = $destinationPath;
        return $e;
    }

    public function source(): string
    {
        return $this->source;
    }

    public function destination(): string
    {
        return $this->destination;
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_COPY;
    }
}
