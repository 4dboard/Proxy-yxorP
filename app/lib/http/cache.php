<?php namespace yxorP\app\lib\http;
/**
 * Importing the namespace `yxorP` into the current namespace.
 */

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use JetBrains\PhpStorm\Pure;
use yxorP;
use yxorP\app\lib\minify\minify;

/**
 * A class that is used to cache data.
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
    #[Pure] public static function isValid(?string $key = null): bool
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
         * Returning an array with the keys `key` and `path`.
         */
        return ['key' => $key ?: CACHE_KEY, 'path' => ($key) ? PATH_TMP_DIR . $key . FILE_TMP : PATH_TMP_FILE];
    }

    /**
     * It's writing the content to the cache file.
     */

    #[NoReturn] public static function set($content, ?string $key = null): void
    {
        /**
         * It's printing the content to the screen.
         */
        echo $content;
        /**
         * It's checking if the `tmp` directory exists, and if it doesn't, it's creating it.
         */
        self::folder();
        /**
         * Writing the content to the cache file.
         */
        exit(die(file_put_contents(self::gen($key)['path'], '<?php header("Content-type: ' . helpers::MIME() . '"); exit(die( ' . var_export((minify::createDefault())->process(helpers::MIME() === VAR_TEXT_HTML ? helpers::replace($content) : $content), true) . '));')));
        exit(die());
    }

    /**
     * It's checking if the `tmp` directory exists, and if it doesn't, it's creating it.
     */

    #[NoReturn] private static function folder(): void
    {
        /**
         * It's checking if the `tmp` directory exists, and if it doesn't, it's creating it.
         */
        if (!is_dir(PATH_TMP_DIR)) if (!mkdir($concurrentDirectory = PATH_TMP_DIR, 0777, true) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
    }
}