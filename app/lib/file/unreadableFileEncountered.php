<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use RuntimeException;

final class unreadableFileEncountered extends RuntimeException implements filesystemExceptionInterface
{
    private $location;

    public static function atLocation(string $location): unreadableFileEncountered
    {
        $e = new static("Unreadable file encountered at location {$location}.");
        $e->location = $location;
        return $e;
    }

    public function location(): string
    {
        return $this->location;
    }
}
