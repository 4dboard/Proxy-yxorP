<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
class fileAttributes implements storageAttributesInterface
{
    use proxyArrayAccessToPropertiesTrait;

    private $type = storageAttributesInterface::TYPE_FILE;
    private $path;
    private $fileSize;
    private $visibility;
    private $lastModified;
    private $mimeType;
    private $extraMetadata;

    public function __construct(string $path, ?int $fileSize = null, ?string $visibility = null, ?int $lastModified = null, ?string $mimeType = null, array $extraMetadata = [])
    {
        $this->path = ltrim($path, '/');
        $this->fileSize = $fileSize;
        $this->visibility = $visibility;
        $this->lastModified = $lastModified;
        $this->mimeType = $mimeType;
        $this->extraMetadata = $extraMetadata;
    }

    public static function fromArray(array $attributes): storageAttributesInterface
    {
        return new fileAttributes($attributes[storageAttributesInterface::ATTRIBUTE_PATH], $attributes[storageAttributesInterface::ATTRIBUTE_FILE_SIZE] ?? null, $attributes[storageAttributesInterface::ATTRIBUTE_VISIBILITY] ?? null, $attributes[storageAttributesInterface::ATTRIBUTE_LAST_MODIFIED] ?? null, $attributes[storageAttributesInterface::ATTRIBUTE_MIME_TYPE] ?? null, $attributes[storageAttributesInterface::ATTRIBUTE_EXTRA_METADATA] ?? []);
    }

    public function type(): string
    {
        return $this->type;
    }

    public function path(): string
    {
        return $this->path;
    }

    public function fileSize(): ?int
    {
        return $this->fileSize;
    }

    public function visibility(): ?string
    {
        return $this->visibility;
    }

    public function lastModified(): ?int
    {
        return $this->lastModified;
    }

    public function mimeType(): ?string
    {
        return $this->mimeType;
    }

    public function extraMetadata(): array
    {
        return $this->extraMetadata;
    }

    public function isFile(): bool
    {
        return true;
    }

    public function isDir(): bool
    {
        return false;
    }

    public function withPath(string $path): storageAttributesInterface
    {
        $clone = clone $this;
        $clone->path = $path;
        return $clone;
    }

    public function jsonSerialize(): array
    {
        return [storageAttributesInterface::ATTRIBUTE_TYPE => self::TYPE_FILE, storageAttributesInterface::ATTRIBUTE_PATH => $this->path, storageAttributesInterface::ATTRIBUTE_FILE_SIZE => $this->fileSize, storageAttributesInterface::ATTRIBUTE_VISIBILITY => $this->visibility, storageAttributesInterface::ATTRIBUTE_LAST_MODIFIED => $this->lastModified, storageAttributesInterface::ATTRIBUTE_MIME_TYPE => $this->mimeType, storageAttributesInterface::ATTRIBUTE_EXTRA_METADATA => $this->extraMetadata,];
    }
}
