<?php namespace yxorP\app\lib\http;
/**
 * Importing the namespace `yxorP` into the current namespace.
 */

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use RuntimeException;
use yxorP;

/**
 * A class that is used to cache data.
 * @property $cache
 */
class cache
{

    /**
     * Checking if the cache file is valid and if it is, it is including the cache file.
     *
     */
    public static function get(?string $key = null): void
    {
        /**
         * Checking if the cache file is valid and if it is, it is including the cache file.
         */
        if (self::isValid(self::gen($key)['path'])) @include self::gen($key)['path'];
    }

    /**
     * Used to check if the cache file exists.
     */
    public static function isValid(?string $key = null): bool
    {
        /**
         * Used to check if the cache file exists.
         */
        return file_exists(self::gen($key)['path']);
    }

    /**
     * A PHPDoc annotation that is used to tell the IDE that the function returns an array with the keys `key` and `path`.
     */

    #[ArrayShape(['key' => "null|\yxorP\app\lib\http\string", 'path' => "string"])] private static function gen(?string $key): array
    {
        /**
         * It's checking if the `cache` directory exists, and if it doesn't, it's creating it.
         */
        if (!is_dir(PATH_CACHE_DIR)) if (!mkdir($concurrentDirectory = PATH_CACHE_DIR, 0777, true) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        /**
         * Returning an array with the keys `key` and `path`.
         */
        return ['key' => $key ?: CACHE_KEY, 'path' => ($key) ? PATH_CACHE_DIR . $key . FILE_CACHE : PATH_CACHE_FILE];
    }

    /**
     * It's writing the content to the cache file.
     */

    #[NoReturn] public static function set($content, ?string $key = null): void
    {
        file_put_contents(self::gen($key)['path'], sprintf("<?php header('Content-type: %s'); exit(die(%s)); ?>", helpers::MIME(), var_export($content, true)));
    }


}
