<?php declare(strict_types=1);

namespace yxorP\app\lib\file\MimeTypeDetection;

use const PATHINFO_EXTENSION;

class extensionMimeTypeDetector implements mimeTypeDetectorInterface
{
    private $extensions;

    public function __construct(extensionToMimeTypeMapInterface $extensions = null)
    {
        $this->extensions = $extensions ?: new generatedExtensionToMimeTypeMap();
    }

    public function detectMimeType(string $path, $contents): ?string
    {
        return $this->detectMimeTypeFromPath($path);
    }

    public function detectMimeTypeFromPath(string $path): ?string
    {
        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
        return $this->extensions->lookupMimeType($extension);
    }

    public function detectMimeTypeFromFile(string $path): ?string
    {
        return $this->detectMimeTypeFromPath($path);
    }

    public function detectMimeTypeFromBuffer(string $contents): ?string
    {
        return null;
    }
}
