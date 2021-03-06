<?php namespace yxorP\app\lib\http;

use JetBrains\PhpStorm\ArrayShape;
use JetBrains\PhpStorm\NoReturn;
use RuntimeException;
use yxorP;

class cache
{
    public static function get(?string $key = null): void
    {
        if (self::isValid(self::gen($key)['path'])) @include self::gen($key)['path'];
    }

    public static function isValid(?string $key = null): bool
    {
        return file_exists(self::gen($key)['path']);
    }

    #[ArrayShape(['key' => "null|\yxorP\app\lib\http\string", 'path' => "string"])] private static function gen(?string $key): array
    {
        if (!is_dir(PATH_CACHE_DIR)) if (!mkdir($concurrentDirectory = PATH_CACHE_DIR, 0777, true) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        return ['key' => $key ?: CACHE_KEY, 'path' => ($key) ? PATH_CACHE_DIR . $key . FILE_CACHE : PATH_CACHE_FILE];
    }

    #[NoReturn] public static function set($content, ?string $key = null): void
    {
        file_put_contents(self::gen($key)['path'], sprintf("<?php header('Content-type: %s'); exit(die(%s)); ?>", helpers::MIME(), var_export($content, true)));
    }
}
