<?php declare(strict_types=1);

namespace yxorP\app\lib\file\Flysystem;

use JetBrains\PhpStorm\Pure;
use function rtrim;
use function strlen;
use function substr;

final class pathPrefixer
{
    private string $prefix = '';
    private string $separator = '/';

    public function __construct(string $prefix, string $separator = '/')
    {
        $this->prefix = rtrim($prefix, '\\/');
        if ($this->prefix !== '' || $prefix === $separator) {
            $this->prefix .= $separator;
        }
        $this->separator = $separator;
    }

    #[Pure] public function stripDirectoryPrefix(string $path): string
    {
        return rtrim($this->stripPrefix($path), '\\/');
    }

    public function stripPrefix(string $path): string
    {
        return substr($path, strlen($this->prefix));
    }

    #[Pure] public function prefixDirectoryPath(string $path): string
    {
        $prefixedPath = $this->prefixPath(rtrim($path, '\\/'));
        if ($prefixedPath === '' || substr($prefixedPath, -1) === $this->separator) {
            return $prefixedPath;
        }
        return $prefixedPath . $this->separator;
    }

    public function prefixPath(string $path): string
    {
        return $this->prefix . ltrim($path, '\\/');
    }
}
