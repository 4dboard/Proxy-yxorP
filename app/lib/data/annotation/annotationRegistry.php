<?php namespace yxorP\app\lib\data\annotation;

use function array_key_exists;
use function array_merge;
use function class_exists;
use function in_array;
use function is_file;
use function str_replace;
use function stream_resolve_include_path;
use function strpos;
use const DIRECTORY_SEPARATOR;

final class annotationRegistry
{
    private static array $autoloadNamespaces = [];
    private static array $loaders = [];
    private static array $failedToAutoload = [];
    private static bool $registerFileUsed = false;

    public static function reset(): void
    {
        self::$autoloadNamespaces = [];
        self::$loaders = [];
        self::$failedToAutoload = [];
        self::$registerFileUsed = false;
    }

    public static function registerFile(string $file): void
    {
        self::$registerFileUsed = true;
        require_once $file;
    }

    public static function registerAutoloadNamespace(string $namespace, $dirs = null): void
    {
        self::$autoloadNamespaces[$namespace] = $dirs;
    }

    public static function registerAutoloadNamespaces(array $namespaces): void
    {
        self::$autoloadNamespaces = array_merge(self::$autoloadNamespaces, $namespaces);
    }

    public static function registerUniqueLoader(callable $callable): void
    {
        if (in_array($callable, self::$loaders, true)) {
            return;
        }
        self::registerLoader($callable);
    }

    public static function registerLoader(callable $callable): void
    {
        self::$failedToAutoload = [];
        self::$loaders[] = $callable;
    }

    public static function loadAnnotationClass(string $class): bool
    {
        if (class_exists($class, false)) {
            return true;
        }
        if (array_key_exists($class, self::$failedToAutoload)) {
            return false;
        }
        foreach (self::$autoloadNamespaces as $namespace => $dirs) {
            if (!str_starts_with($class, $namespace)) {
                continue;
            }
            $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
            if ($dirs === null) {
                $path = stream_resolve_include_path($file);
                if ($path) {
                    require $path;
                    return true;
                }
            } else {
                foreach ((array)$dirs as $dir) {
                    if (is_file($dir . DIRECTORY_SEPARATOR . $file)) {
                        require $dir . DIRECTORY_SEPARATOR . $file;
                        return true;
                    }
                }
            }
        }
        foreach (self::$loaders as $loader) {
            if ($loader($class) === true) {
                return true;
            }
        }
        if (self::$loaders === [] && self::$autoloadNamespaces === [] && self::$registerFileUsed === false && class_exists($class)) {
            return true;
        }
        self::$failedToAutoload[$class] = null;
        return false;
    }
}
