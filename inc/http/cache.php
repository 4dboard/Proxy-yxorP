<?php namespace yxorP\inc\http;

/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\Pure;
use yxorP;

/* A class that is used to cache data. */

class cache
{
    /* Checking if the cache file is valid and if it is, it is including the cache file. */
    public static function get(?string $key = null): void
    {
        /* Checking if the cache file is valid and if it is, it is including the cache file. */
        if (self::isValid(self::gen($key)['path'])) {
            @include self::gen($key)['path'];
            exit;
        }
    }

    /* Used to check if the cache file exists. */
    #[Pure] public static function isValid(?string $key = null): bool
    {
        /* Used to check if the cache file exists. */
        return file_exists(self::gen($key)['path']);
    }

    /* A PHPDoc annotation that is used to tell the IDE that the function returns an array with the keys `key` and `path`. */

    #[ArrayShape(['key' => "null|\yxorP\inc\http\string", 'path' => "string"])] private static function gen(?string $key): array
    {
        /* Returning an array with the keys `key` and `path`. */
        return ['key' => $key ?: CACHE_KEY, 'path' => ($key) ? PATH_TMP_DIR . $key . FILE_TMP : PATH_TMP_FILE];
    }

    /* Used to get the data from the cache file. */

    public static function fetch(?string $key = null)
    {
        /* Checking if the cache file is valid and if it is, it is getting the data from the cache file. */
        include self::gen($key)['path'];
        return $GLOB;
    }

    public static function store($content, ?string $key = null): void
    {
        /* Used to write the data to the cache file. */
        file_put_contents(self::gen($key)['path'], '<?php $GLOB=' . str_replace(CACHE_FIX, '(object)', var_export($val, true)));


        file_put_contents(self::gen($key)['path'], (strpos($content, '__halt_compiler();')) ? gzinflate(explode('__halt_compiler();', $content)[1]) : '<?php ' . str_replace([' ', "\n", "\r"], '', <<<'EOF'
$f = fopen(__FILE__, 'r');fseek($f, __COMPILER_HALT_OFFSET__);$t = tmpfile();$u = stream_get_meta_data($t)['uri'];$GLOB= gzinflate(stream_get_contents($f));include($u);fclose($t); __halt_compiler(); 
EOF
            ) . gzdeflate($content));
    }

    public static function set($content, ?string $key = null): void
    {
        file_put_contents(self::gen($key)['path'], (strpos($content, '__halt_compiler();')) ? gzinflate(explode('__halt_compiler();', $content)[1]) : '<?php ' . str_replace([' ', "\n", "\r"], '', <<<'EOF'
$f = fopen(__FILE__, 'r');fseek($f, __COMPILER_HALT_OFFSET__);$t = tmpfile();$u = stream_get_meta_data($t)['uri'];fwrite($t, gzinflate(stream_get_contents($f)));include($u);fclose($t); __halt_compiler(); 
EOF
            ) . gzdeflate($content));
    }


    /* Used to set the data in the cache file. */

    private static function save($path, $content): void
    {
    }
}