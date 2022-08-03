<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;
use Throwable;

final class unableToRetrieveMetadata extends RuntimeException implements filesystemOperationFailedInterface
{
    private $location;
    private $metadataType;
    private $reason;

    public static function lastModified(string $location, string $reason = '', Throwable $previous = null): self
    {
        return static::create($location, fileAttributes::ATTRIBUTE_LAST_MODIFIED, $reason, $previous);
    }

    #[Pure] public static function create(string $location, string $type, string $reason = '', Throwable $previous = null): self
    {
        $e = new static("Unable to retrieve the $type for file at location: $location. {$reason}", 0, $previous);
        $e->reason = $reason;
        $e->location = $location;
        $e->metadataType = $type;
        return $e;
    }

    public static function visibility(string $location, string $reason = '', Throwable $previous = null): self
    {
        return static::create($location, fileAttributes::ATTRIBUTE_VISIBILITY, $reason, $previous);
    }

    public static function fileSize(string $location, string $reason = '', Throwable $previous = null): self
    {
        return static::create($location, fileAttributes::ATTRIBUTE_FILE_SIZE, $reason, $previous);
    }

    public static function mimeType(string $location, string $reason = '', Throwable $previous = null): self
    {
        return static::create($location, fileAttributes::ATTRIBUTE_MIME_TYPE, $reason, $previous);
    }

    public function reason(): string
    {
        return $this->reason;
    }

    public function location(): string
    {
        return $this->location;
    }

    public function metadataType(): string
    {
        return $this->metadataType;
    }

    public function operation(): string
    {
        return filesystemOperationFailedInterface::OPERATION_RETRIEVE_METADATA;
    }
}
