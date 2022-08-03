<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use RuntimeException;

final class unreadableFileEncountered extends RuntimeException implements filesystemExceptionInterface
{
    private $location;

    #[Pure] public static function atLocation(string $location): unreadableFileEncountered
    {
        $e = new unreadableFileEncountered("Unreadable file encountered at location {$location}.");
        $e->location = $location;
        return $e;
    }

    public function location(): string
    {
        return $this->location;
    }
}
