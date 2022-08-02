<?php

declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem\UnixVisibility;

interface visibilityConverterInterface
{
    public function forFile(string $visibility): int;

    public function forDirectory(string $visibility): int;

    public function inverseForFile(int $visibility): string;

    public function inverseForDirectory(int $visibility): string;

    public function defaultForDirectories(): int;
}
