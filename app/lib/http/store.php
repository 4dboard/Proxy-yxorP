<?php namespace yxorP\app\lib\http;

use JetBrains\PhpStorm\Pure;

class store
{
    final public static function handler(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        if (!$GLOBALS[CACHE_KEY]) $GLOBALS[CACHE_KEY] = ['init'];
        return self::check($name, $value, $func, $varibles);
    }

    private static function check(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        if (self::get($name)) return self::get($name);
        return self::set($name, $value, $func, $varibles);
    }

    #[Pure] private static function get(string $name): mixed
    {
        return $GLOBALS[CACHE_KEY][$name];
    }

    private static function set(string $name, mixed $value, ?string $func = null, array $varibles = []): mixed
    {
        if (!$value && $func) $value = call_user_func_array($func, $varibles);
        return $GLOBALS[CACHE_KEY][$name] = $value;
    }
}
