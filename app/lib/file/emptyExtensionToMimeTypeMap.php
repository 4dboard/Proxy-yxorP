<?php declare(strict_types=1);

namespace yxorP\app\lib\file\MimeTypeDetection;
class emptyExtensionToMimeTypeMap implements extensionToMimeTypeMapInterface
{
    public function lookupMimeType(string $extension): ?string
    {
        return null;
    }
}
