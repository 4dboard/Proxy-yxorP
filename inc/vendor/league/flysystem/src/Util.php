<?php

namespace League\Flysystem;

use JetBrains\PhpStorm\Pure;
use League\Flysystem\Util\MimeType;
use LogicException;

class Util
{
    /**
     * Map result arrays.
     *
     * @param array $object
     * @param array $map
     *
     * @return array mapped result
     */
    public static function map(array $object, array $map): array
    {
        $result = [];

        foreach ($map as $from => $to) {
            if (!isset($object[$from])) {
                continue;
            }

            $result[$to] = $object[$from];
        }

        return $result;
    }

    /**
     * Normalize path.
     *
     * @param string $path
     *
     * @return string
     * @throws LogicException
     *
     */
    public static function normalizePath(string $path): string
    {
        return static::normalizeRelativePath($path);
    }

    /**
     * Normalize relative directories in a path.
     *
     * @param string $path
     *
     * @return string
     * @throws LogicException
     *
     */
    public static function normalizeRelativePath(string $path): string
    {
        $path = str_replace('\\', '/', $path);
        $path = static::removeFunkyWhiteSpace($path);
        $parts = [];

        foreach (explode('/', $path) as $part) {
            switch ($part) {
                case '':
                case '.':
                    break;

                case '..':
                    if (empty($parts)) {
                        throw new LogicException(
                            'Path is outside of the defined root, path: [' . $path . ']'
                        );
                    }
                    array_pop($parts);
                    break;

                default:
                    $parts[] = $part;
                    break;
            }
        }

        return implode('/', $parts);
    }

    /**
     * Rejects unprintable characters and invalid unicode characters.
     *
     * @param string $path
     *
     * @return string $path
     */
    protected static function removeFunkyWhiteSpace(string $path): string
    {
        if (preg_match('#\p{C}+#u', $path)) {
            throw CorruptedPathDetected::forPath($path);
        }

        return $path;
    }

    /**
     * Normalize prefix.
     *
     * @param string $prefix
     * @param string $separator
     *
     * @return string normalized path
     */
    public static function normalizePrefix(string $prefix, string $separator): string
    {
        return rtrim($prefix, $separator) . $separator;
    }

    /**
     * Get content size.
     *
     * @param string $contents
     *
     * @return int content size
     */
    public static function contentSize(string $contents): int
    {
        return defined('MB_OVERLOAD_STRING') ? mb_strlen($contents, '8bit') : strlen($contents);
    }

    /**
     * Guess MIME Type based on the path of the file and it's content.
     *
     * @param string $path
     * @param string $content
     *
     * @return string|null MIME Type or NULL if no extension detected
     */
    public static function guessMimeType(string $path, string $content): ?string
    {
        $mimeType = MimeType::detectByContent($content);

        if (!(empty($mimeType) || in_array($mimeType, ['application/x-empty', 'text/plain', 'text/x-asm']))) {
            return $mimeType;
        }

        return MimeType::detectByFilename($path);
    }

    /**
     * Emulate directories.
     *
     * @param array $listing
     *
     * @return array listing with emulated directories
     */
    public static function emulateDirectories(array $listing): array
    {
        $directories = [];
        $listedDirectories = [];

        foreach ($listing as $object) {
            [$directories, $listedDirectories] = static::emulateObjectDirectories($object, $directories, $listedDirectories);
        }

        $directories = array_diff(array_unique($directories), array_unique($listedDirectories));

        foreach ($directories as $directory) {
            $listing[] = static::pathinfo($directory) + ['type' => 'dir'];
        }

        return $listing;
    }

    /**
     * Emulate the directories of a single object.
     *
     * @param array $object
     * @param array $directories
     * @param array $listedDirectories
     *
     * @return array
     */
    protected static function emulateObjectDirectories(array $object, array $directories, array $listedDirectories): array
    {
        if ($object['type'] === 'dir') {
            $listedDirectories[] = $object['path'];
        }

        if (!isset($object['dirname']) || trim($object['dirname']) === '') {
            return [$directories, $listedDirectories];
        }

        $parent = $object['dirname'];

        while (isset($parent) && trim($parent) !== '' && !in_array($parent, $directories)) {
            $directories[] = $parent;
            $parent = static::dirname($parent);
        }

        if (isset($object['type']) && $object['type'] === 'dir') {
            $listedDirectories[] = $object['path'];

            return [$directories, $listedDirectories];
        }

        return [$directories, $listedDirectories];
    }

    /**
     * Get a normalized dirname from a path.
     *
     * @param string $path
     *
     * @return string dirname
     */
    #[Pure] public static function dirname(string $path): string
    {
        return static::normalizeDirname(dirname($path));
    }

    /**
     * Normalize a dirname return value.
     *
     * @param string $dirname
     *
     * @return string normalized dirname
     */
    public static function normalizeDirname(string $dirname): string
    {
        return $dirname === '.' ? '' : $dirname;
    }

    /**
     * Get normalized pathinfo.
     *
     * @param string $path
     *
     * @return array pathinfo
     */
    public static function pathinfo(string $path): array
    {
        $pathinfo = compact('path');

        if ('' !== $dirname = dirname($path)) {
            $pathinfo['dirname'] = static::normalizeDirname($dirname);
        }

        $pathinfo['basename'] = static::basename($path);

        $pathinfo += pathinfo($pathinfo['basename']);

        return $pathinfo + ['dirname' => ''];
    }

    /**
     * Returns the trailing name component of the path.
     *
     * @param string $path
     *
     * @return string
     */
    private static function basename(string $path): string
    {
        $separators = DIRECTORY_SEPARATOR === '/' ? '/' : '\/';

        $path = rtrim($path, $separators);

        $basename = preg_replace('#.*?([^' . preg_quote($separators, '#') . ']+$)#', '$1', $path);

        if (DIRECTORY_SEPARATOR === '/') {
            return $basename;
        }
        // @codeCoverageIgnoreStart
        // Extra Windows path munging. This is tested via AppVeyor, but code
        // coverage is not reported.

        // Handle relative paths with drive letters. c:file.txt.
        while (preg_match('#^[a-zA-Z]{1}:[^\\\/]#', $basename)) {
            $basename = substr($basename, 2);
        }

        // Remove colon for standalone drive letter names.
        if (preg_match('#^[a-zA-Z]{1}:$#', $basename)) {
            $basename = rtrim($basename, ':');
        }

        return $basename;
        // @codeCoverageIgnoreEnd
    }

    /**
     * Ensure a Config instance.
     *
     * @param array|Config|null $config
     *
     * @return Config config instance
     *
     * @throw  LogicException
     */
    public static function ensureConfig(Config|array|null $config): Config
    {
        if ($config === null) {
            return new Config();
        }

        if ($config instanceof Config) {
            return $config;
        }

        if (is_array($config)) {
            return new Config($config);
        }

        throw new LogicException('A config should either be an array or a Flysystem\Config object.');
    }

    /**
     * Rewind a stream.
     *
     * @param resource $resource
     */
    public static function rewindStream($resource)
    {
        if (ftell($resource) !== 0 && static::isSeekableStream($resource)) {
            rewind($resource);
        }
    }

    public static function isSeekableStream($resource)
    {
        $metadata = stream_get_meta_data($resource);

        return $metadata['seekable'];
    }

    /**
     * Get the size of a stream.
     *
     * @param resource $resource
     *
     * @return int|null stream size
     */
    public static function getStreamSize($resource): ?int
    {
        $stat = fstat($resource);

        if (!is_array($stat) || !isset($stat['size'])) {
            return null;
        }

        return $stat['size'];
    }
}
