<?php namespace yxorP\app\lib\http;
/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use JetBrains\PhpStorm\Pure;
use yxorP;
use yxorP\app\lib\minify\minify;

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


    #[NoReturn] public static function set($content, ?string $key = null): void
    {
        echo $content;
        /* Writing the content to the cache file. */
        exit(die(file_put_contents(self::gen($key)['path'], '<?php header("Content-type: ' . MIME . '"); ' . var_export((minify::createDefault())->process((MIME === VAR_TEXT_HTML ? helpers::replace($content) : $content)), true)) . ';'));
    }
}