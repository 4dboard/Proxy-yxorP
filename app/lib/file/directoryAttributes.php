<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;

class directoryAttributes implements storageAttributesInterface
{
    use proxyArrayAccessToPropertiesTrait;

    private $type = storageAttributesInterface::TYPE_DIRECTORY;
    private $path;
    private $visibility;
    private $lastModified;
    private $extraMetadata;

    public function __construct(string $path, ?string $visibility = null, ?int $lastModified = null, array $extraMetadata = [])
    {
        $this->path = trim($path, '/');
        $this->visibility = $visibility;
        $this->lastModified = $lastModified;
        $this->extraMetadata = $extraMetadata;
    }

    #[Pure] public static function fromArray(array $attributes): storageAttributesInterface
    {
        return new directoryAttributes($attributes[storageAttributesInterface::ATTRIBUTE_PATH], $attributes[storageAttributesInterface::ATTRIBUTE_VISIBILITY] ?? null, $attributes[storageAttributesInterface::ATTRIBUTE_LAST_MODIFIED] ?? null, $attributes[storageAttributesInterface::ATTRIBUTE_EXTRA_METADATA] ?? []);
    }

    public function path(): string
    {
        return $this->path;
    }

    public function type(): string
    {
        return storageAttributesInterface::TYPE_DIRECTORY;
    }

    public function visibility(): ?string
    {
        return $this->visibility;
    }

    public function lastModified(): ?int
    {
        return $this->lastModified;
    }

    public function extraMetadata(): array
    {
        return $this->extraMetadata;
    }

    public function isFile(): bool
    {
        return false;
    }

    public function isDir(): bool
    {
        return true;
    }

    public function withPath(string $path): storageAttributesInterface
    {
        $clone = clone $this;
        $clone->path = $path;
        return $clone;
    }

    #[ArrayShape([storageAttributesInterface::ATTRIBUTE_TYPE => "string", storageAttributesInterface::ATTRIBUTE_PATH => "string", storageAttributesInterface::ATTRIBUTE_VISIBILITY => "null|string", storageAttributesInterface::ATTRIBUTE_LAST_MODIFIED => "int|null", storageAttributesInterface::ATTRIBUTE_EXTRA_METADATA => "array"])] public function jsonSerialize(): array
    {
        return [storageAttributesInterface::ATTRIBUTE_TYPE => $this->type, storageAttributesInterface::ATTRIBUTE_PATH => $this->path, storageAttributesInterface::ATTRIBUTE_VISIBILITY => $this->visibility, storageAttributesInterface::ATTRIBUTE_LAST_MODIFIED => $this->lastModified, storageAttributesInterface::ATTRIBUTE_EXTRA_METADATA => $this->extraMetadata,];
    }
}
