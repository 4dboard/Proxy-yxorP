<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;
interface pathNormalizerInterface
{
    public function normalizePath(string $path): string;
}
