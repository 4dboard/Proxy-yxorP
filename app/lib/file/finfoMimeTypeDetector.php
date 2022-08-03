<?php declare(strict_types=1);

namespace yxorP\app\lib\file\MimeTypeDetection;

use finfo;
use JetBrains\PhpStorm\Pure;
use const FILEINFO_MIME_TYPE;
use const PATHINFO_EXTENSION;

class finfoMimeTypeDetector implements mimeTypeDetectorInterface
{
    private const INCONCLUSIVE_MIME_TYPES = ['application/x-empty', 'text/plain', 'text/x-asm', 'application/octet-stream', 'inode/x-empty',];
    private $finfo;
    private $extensionMap;
    private $bufferSampleSize;
    private $inconclusiveMimetypes;

    public function __construct(string $magicFile = '', extensionToMimeTypeMapInterface $extensionMap = null, ?int $bufferSampleSize = null, array $inconclusiveMimetypes = self::INCONCLUSIVE_MIME_TYPES)
    {
        $this->finfo = new finfo(FILEINFO_MIME_TYPE, $magicFile);
        $this->extensionMap = $extensionMap ?: new generatedExtensionToMimeTypeMap();
        $this->bufferSampleSize = $bufferSampleSize;
        $this->inconclusiveMimetypes = $inconclusiveMimetypes;
    }

    public function detectMimeType(string $path, $contents): ?string
    {
        $mimeType = is_string($contents) ? (@$this->finfo->buffer($this->takeSample($contents)) ?: null) : null;
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
