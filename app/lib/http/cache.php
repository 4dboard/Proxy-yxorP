<?php namespace yxorP\app\lib\http;
/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use JetBrains\PhpStorm\Pure;
use yxorP;

/* A class that is used to cache data. */

class cache
{
    /* Checking if the cache file is valid and if it is, it is including the cache file. */
    public static function get(?string $key = null): void
    {
        /* Checking if the cache file is valid and if it is, it is including the cache file. */
        if (self::isValid(self::gen($key)['path'])) @include self::gen($key)['path'];
    }

    /* Used to check if the cache file exists. */
    #[Pure] public static function isValid(?string $key = null): bool
    {
        /* Used to check if the cache file exists. */
        return file_exists(self::gen($key)['path']);
    }

    /* A PHPDoc annotation that is used to tell the IDE that the function returns an array with the keys `key` and `path`. */

    #[ArrayShape(['key' => "null|\yxorP\app\lib\http\string", 'path' => "string"])] private static function gen(?string $key): array
    {

        /* Returning an array with the keys `key` and `path`. */
        return ['key' => $key ?: CACHE_KEY, 'path' => ($key) ? PATH_TMP_DIR . $key . FILE_TMP : PATH_TMP_FILE];
    }

    /* Used to get the data from the cache file. */

    public static function fetch(?string $key = null): array
    {
        session_start();
        return [];//(array)$_SESSION[self::gen($key)['key']];
    }

    #[NoReturn] public static function set($content, ?string $key = null): void
    {
        self::store($_SESSION[YXORP_HTTP_HOST], CACHE_KEY_CONTEXT);
        echo $content;
        exit;
        /*exit(die(file_put_contents(self::gen($key)['path'], '<?php header("Content-type: ' . MIME . '"); exit(die(' . str_replace(CACHE_FIX, '(object)', var_export((minify::createDefault())->process((MIME === VAR_TEXT_HTML ? helpers::replace($content) : $content)), true)) . '));')));*/
    }

    public static function store($content, ?string $key = null): void
    {
        session_start();

        $_SESSION[self::gen($key)['key']] = var_export($content, true);
    }
}