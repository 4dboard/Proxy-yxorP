<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
final class portableVisibilityGuard
{
    public static function guardAgainstInvalidInput(string $visibility): void
    {
        if ($visibility !== visibility::PUBLIC && $visibility !== visibility::PRIVATE) {
            $className = visibility::class;
            throw invalidVisibilityProvided::withVisibility($visibility, "either {$className}::PUBLIC or {$className}::PRIVATE");
        }
    }
}
