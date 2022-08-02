<?php

declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem\Local;

use yxorP\app\lib\file\MimeTypeDetection\mimeTypeDetectorInterface;
use function in_array;

class fallbackMimeTypeDetector implements mimeTypeDetectorInterface
{
    private const INCONCLUSIVE_MIME_TYPES = [
        'application/x-empty',
        'text/plain',
        'text/x-asm',
        'application/octet-stream',
        'inode/x-empty',
    ];

    public function __construct(
        private mimeTypeDetectorInterface $detector,
        private array                     $inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES
    )
    {
    }

    public function detectMimeType(string $path, $contents): ?string
    {
        return $this->detector->detectMimeType($path, $contents);
    }

    public function detectMimeTypeFromBuffer(string $contents): ?string
    {
        return $this->detector->detectMimeTypeFromBuffer($contents);
    }

    public function detectMimeTypeFromFile(string $path): ?string
    {
        $mimeType = $this->detector->detectMimeTypeFromFile($path);

        if ($mimeType !== null && !in_array($mimeType, $this->inconclusiveMimetypes)) {
            return $mimeType;
        }

        return $this->detector->detectMimeTypeFromPath($path);
    }

    public function detectMimeTypeFromPath(string $path): ?string
    {
        return $this->detector->detectMimeTypeFromPath($path);
    }
}
