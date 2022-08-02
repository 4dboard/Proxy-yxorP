<?php declare(strict_types=1);

namespace yxorP\app\lib\file\MimeTypeDetection;
interface mimeTypeDetectorInterface
{
    public function detectMimeType(string $path, $contents): ?string;

    public function detectMimeTypeFromBuffer(string $contents): ?string;

    public function detectMimeTypeFromPath(string $path): ?string;

    public function detectMimeTypeFromFile(string $path): ?string;
}
