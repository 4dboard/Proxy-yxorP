<?php declare(strict_types=1);

namespace yxorP\app\lib\openapi;

use InvalidArgumentException;
use Symfony\Component\Finder\Finder;

class Util
{
    public static function finder($directory, $exclude = null, $pattern = null): Finder
    {
        if ($directory instanceof Finder) {
            return $directory->files()->followLinks();
        } else {
            $finder = new Finder();
            $finder->sortByName();
        }
        if ($pattern === null) {
            $pattern = '*.php';
        }
        $finder->files()->followLinks()->name($pattern);
        if (is_string($directory)) {
            if (is_file($directory)) {
                $finder->append([$directory]);
            } else {
                $finder->in($directory);
            }
        } elseif (is_array($directory)) {
            foreach ($directory as $path) {
                if (is_file($path)) {
                    $finder->append([$path]);
                } else {
                    $finder->in($path);
                }
            }
        } else {
            throw new InvalidArgumentException('Unexpected $directory value:' . gettype($directory));
        }
        if ($exclude !== null) {
            if (is_string($exclude)) {
                $finder->notPath(Util::getRelativePath($exclude, $directory));
            } elseif (is_array($exclude)) {
                foreach ($exclude as $path) {
                    $finder->notPath(Util::getRelativePath($path, $directory));
                }
            } else {
                throw new InvalidArgumentException('Unexpected $exclude value:' . gettype($exclude));
            }
        }
        return $finder;
    }

    public static function getRelativePath(string $fullPath, $basePaths): string
    {
        $relativePath = null;
        if (is_string($basePaths)) {
            $relativePath = self::removePrefix($fullPath, $basePaths);
        } else {
            foreach ($basePaths as $basePath) {
                $relativePath = self::removePrefix($fullPath, $basePath);
                if (!empty($relativePath)) {
                    break;
                }
            }
        }
        return !empty($relativePath) ? trim($relativePath, '/') : $fullPath;
    }

    public static function refEncode(string $raw): string
    {
        return str_replace('/', '~1', str_replace('~', '~0', $raw));
    }

    public static function refDecode(string $encoded): string
    {
        return str_replace('~1', '/', str_replace('~0', '~', $encoded));
    }

    public static function shorten($classes)
    {
        $short = [];
        foreach ((array)$classes as $class) {
            $short[] = '@' . str_replace('OpenApi\\Annotations\\', 'OA\\', $class);
        }
        return is_array($classes) ? $short : array_pop($short);
    }

    private static function removePrefix(string $str, string $prefix): ?string
    {
        if (substr($str, 0, strlen($prefix)) == $prefix) {
            return substr($str, strlen($prefix));
        }
        return null;
    }
}
