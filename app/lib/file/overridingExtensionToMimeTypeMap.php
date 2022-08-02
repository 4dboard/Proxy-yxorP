<?php namespace yxorP\app\lib\file\MimeTypeDetection;
class overridingExtensionToMimeTypeMap implements extensionToMimeTypeMapInterface
{
    private $innerMap;
    private $overrides;

    public function __construct(extensionToMimeTypeMapInterface $innerMap, array $overrides)
    {
        $this->innerMap = $innerMap;
        $this->overrides = $overrides;
    }

    public function lookupMimeType(string $extension): ?string
    {
        return $this->overrides[$extension] ?? $this->innerMap->lookupMimeType($extension);
    }
}
