<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use Throwable;
use function rtrim;

final class unableToSetVisibility extends RuntimeException implements filesystemOperationFailedInterface
{
    private $location;
    private $reason;

    #[Pure] public static function atLocation(string $filename, string $extraMessage = '', Throwable $previous = null): self
    {
        $message = "Unable to set visibility for file {$filename}. $extraMessage";
        $e = new unableToSetVisibility(rtrim($message), 0, $previous);
        $e->reason = $extraMessage;
        $e->location = $filename;
        return $e;
    }

    public function reason(): string
    {
        return $this->reason;
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_SET_VISIBILITY;
    }

    public function location(): string
    {
        return $this->location;
    }
}
