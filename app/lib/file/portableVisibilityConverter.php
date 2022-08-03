<?php

declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem\UnixVisibility;

use JetBrains\PhpStorm\Pure;
use yxorP\app\lib\file\Flysystem\portableVisibilityGuard;
use yxorP\app\lib\file\Flysystem\visibility;

class portableVisibilityConverter implements visibilityConverterInterface
{
    /**
     * @var int
     */
    private $filePublic;

    /**
     * @var int
     */
    private $filePrivate;

    /**
     * @var int
     */
    private $directoryPublic;

    /**
     * @var int
     */
    private $directoryPrivate;

    /**
     * @var string
     */
    private $defaultForDirectories;

    public function __construct(
        int    $filePublic = 0644,
        int    $filePrivate = 0600,
        int    $directoryPublic = 0755,
        int    $directoryPrivate = 0700,
        string $defaultForDirectories = visibility::PRIVATE
    )
    {
        $this->filePublic = $filePublic;
        $this->filePrivate = $filePrivate;
        $this->directoryPublic = $directoryPublic;
        $this->directoryPrivate = $directoryPrivate;
        $this->defaultForDirectories = $defaultForDirectories;
    }

    /**
     * @param array $permissionMap
     */
    #[Pure] public static function fromArray(array $permissionMap, string $defaultForDirectories = visibility::PRIVATE): portableVisibilityConverter
    {
        return new portableVisibilityConverter(
            $permissionMap['file']['public'] ?? 0644,
            $permissionMap['file']['private'] ?? 0600,
            $permissionMap['dir']['public'] ?? 0755,
            $permissionMap['dir']['private'] ?? 0700,
            $defaultForDirectories
        );
    }

    public function forFile(string $visibility): int
    {
        portableVisibilityGuard::guardAgainstInvalidInput($visibility);

        return $visibility === visibility::PUBLIC
            ? $this->filePublic
            : $this->filePrivate;
    }

    public function forDirectory(string $visibility): int
    {
        portableVisibilityGuard::guardAgainstInvalidInput($visibility);

        return $visibility === visibility::PUBLIC
            ? $this->directoryPublic
            : $this->directoryPrivate;
    }

    public function inverseForFile(int $visibility): string
    {
        if ($visibility === $this->filePublic) {
            return visibility::PUBLIC;
        } elseif ($visibility === $this->filePrivate) {
            return visibility::PRIVATE;
        }

        return visibility::PUBLIC; // default
    }

    public function inverseForDirectory(int $visibility): string
    {
        if ($visibility === $this->directoryPublic) {
            return visibility::PUBLIC;
        } elseif ($visibility === $this->directoryPrivate) {
            return visibility::PRIVATE;
        }

        return visibility::PUBLIC; // default
    }

    public function defaultForDirectories(): int
    {
        return $this->defaultForDirectories === visibility::PUBLIC ? $this->directoryPublic : $this->directoryPrivate;
    }
}
