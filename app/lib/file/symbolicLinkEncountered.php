<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;

final class symbolicLinkEncountered extends RuntimeException implements filesystemExceptionInterface
{
    private $location;

    #[Pure] public static function atLocation(string $pathName): symbolicLinkEncountered
    {
        $e = new symbolicLinkEncountered("Unsupported symbolic link encountered at location $pathName");
        $e->location = $pathName;
        return $e;
    }

    public function location(): string
    {
        return $this->location;
    }
}
