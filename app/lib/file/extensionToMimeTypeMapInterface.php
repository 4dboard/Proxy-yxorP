<?php declare(strict_types=1);

namespace yxorP\app\lib\file\MimeTypeDetection;
interface extensionToMimeTypeMapInterface
{
    public function lookupMimeType(string $extension): ?string;
}
