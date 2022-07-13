<?php

declare(strict_types=1);

namespace League\MimeTypeDetection;

use finfo;
use JetBrains\PhpStorm\Pure;
use const FILEINFO_MIME_TYPE;
use const PATHINFO_EXTENSION;

class FinfoMimeTypeDetector implements MimeTypeDetector
{
    private const INCONCLUSIVE_MIME_TYPES = [
        'application/x-empty',
        'text/plain',
        'text/x-asm',
        'application/octet-stream',
        'inode/x-empty',
    ];

    /**
     * @var finfo
     */
    private finfo $finfo;

    /**
     * @var ExtensionToMimeTypeMap
     */
    private GeneratedExtensionToMimeTypeMap|ExtensionToMimeTypeMap $extensionMap;

    /**
     * @var int|null
     */
    private ?int $bufferSampleSize;

    /**
     * @var array<string>
     */
    private array $inconclusiveMimetypes;

    public function __construct(
        string                 $magicFile = '',
        ExtensionToMimeTypeMap $extensionMap = null,
        ?int                   $bufferSampleSize = null,
        array                  $inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES
    )
    {
        $this->finfo = new finfo(FILEINFO_MIME_TYPE, $magicFile);
        $this->extensionMap = $extensionMap ?: new GeneratedExtensionToMimeTypeMap();
        $this->bufferSampleSize = $bufferSampleSize;
        $this->inconclusiveMimetypes = $inconclusiveMimetypes;
    }

    public function detectMimeType(string $path, $contents): ?string
    {
        $mimeType = is_string($contents)
            ? (@$this->finfo->buffer($this->takeSample($contents)) ?: null)
            : null;

        if ($mimeType !== null && !in_array($mimeType, $this->inconclusiveMimetypes)) {
            return $mimeType;
        }

        return $this->detectMimeTypeFromPath($path);
    }

    private function takeSample(string $contents): string
    {
        if ($this->bufferSampleSize === null) {
            return $contents;
        }

        return substr($contents, 0, $this->bufferSampleSize);
    }

    public function detectMimeTypeFromPath(string $path): ?string
    {
        $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        return $this->extensionMap->lookupMimeType($extension);
    }

    #[Pure] public function detectMimeTypeFromFile(string $path): ?string
    {
        return @$this->finfo->file($path) ?: null;
    }

    #[Pure] public function detectMimeTypeFromBuffer(string $contents): ?string
    {
        return @$this->finfo->buffer($this->takeSample($contents)) ?: null;
    }
}
