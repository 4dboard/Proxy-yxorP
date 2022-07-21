<?php namespace yxorP\app\lib\http;
/* Importing the namespace `yxorP` into the current namespace. */

use JetBrains\PhpStorm\ArrayShape;
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

    /* Used to get the data from the cache file. */

    public static function fetch(?string $key = null): array
    {
        $GLOB = [];
        /* Checking if the cache file is valid and if it is, it is getting the data from the cache file. */
        include self::gen($key)['path'];
        return $GLOB;
    }


    public static function mime(): void
    {
        /* Checking if the request URI contains the string "bundle.js" and if it does, it sets the mime type to
        "application/wasm". */
        if (str_contains(YXORP_REQUEST_URI, 'bundle.js')) $mime = 'application' . CHAR_SLASH . 'wasm'; else if (str_contains(YXORP_REQUEST_URI, 'sitemap')) $mime = 'application' . CHAR_SLASH . 'xml'; else if (str_contains(YXORP_REQUEST_URI, 'crop')) $mime = 'image' . CHAR_SLASH . 'png'; else if (str_contains(YXORP_REQUEST_URI, 'format')) $mime = 'image' . CHAR_SLASH . 'png'; else if (yP::get(VAR_RESPONSE)) $mime = yP::get(VAR_RESPONSE)->getHeaderLine('Content-Type'); else {
            /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
            $mimeTypes = json_decode(file_get_contents(DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . VAR_MIME . EXT_JSON), true);
            /* Getting the file extension of the requested file. */
            $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);
            /* Checking if the file extension is in the array of mime types. If it is, it sets the mime type to the value
            of the array key. If it is not, it sets the mime type to text/html. */
            if (array_key_exists($_ext, $mimeTypes)) $mime = $mimeTypes[$_ext]; else $mime = 'text' . CHAR_SLASH . 'html';
        }

        /* Defining the MIME constant as the $mime variable. */
        define('MIME', $mime);
        /* Setting the content type of the response. */
        header('Content-Type: ' . $mime . ';charset=UTF-8');
    }

    public static function set($mime, $content, ?string $key = null): void
    {
        self::store($GLOBALS[YXORP_HTTP_HOST], CACHE_KEY_CONTEXT);

        file_put_contents(self::gen($key)['path'], '<?php header("Content-type: ' . $mime . '");' . str_replace([' ', "\n"], '', <<<'EOF'
$f = fopen(__FILE__, 'r');fseek($f, __COMPILER_HALT_OFFSET__);$t = tmpfile();$u = stream_get_meta_data($t)['uri'];fwrite($t, gzinflate(stream_get_contents($f)));include($u);fclose($t); __halt_compiler(); 
EOF
            ) . gzdeflate((new minify())->process($content)) . ';exit(die());');
        exit(die($content));
    }

    public static function store($val, ?string $key = null): void
    {
        /* Used to write the data to the cache file. */
        file_put_contents(self::gen($key)['path'], '<?php $GLOB=' . str_replace(CACHE_FIX, '(object)', var_export($val, true)) . '?>');
    }
}