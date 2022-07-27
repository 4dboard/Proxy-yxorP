<?php namespace yxorP\app\lib\http;
/**
 * It's a class that's used to dispatch events.
 */
class store
{

    /**
     * Try get perm else store value or execute function, set perm and return values
     * @param string $name
     * @param mixed $value
     * @param string|null $func
     * @param array $varibles
     * @return mixed
     */
    final public static function handler(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        if (!$GLOBALS[CACHE_KEY]) $GLOBALS[CACHE_KEY] = ['init'];
        /**
         * It's returning null if the perm is not set.
         */
        return self::check($name, $value, $func, $varibles);
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @param mixed $value
     * @return mixed
     *
     */
    public static function set(string $name, mixed $value, ?string $func = null, array $varibles = []): mixed
    {
        /**
         * It's checking if the value is null and if the function is not null, if it is, it will execute the function and
         * set the value to the return value of the function.
         */
        if (!$value && $func) $value = call_user_func_array($func, $varibles);
        /**
         * Setting the value of the variable $name to the value of the variable $value.
         */
        return $GLOBALS[CACHE_KEY][$name] = $value;
    }

    /**
     * Try get perm else store value or execute function, set perm and return values
     * @param string $name
     * @param mixed $value
     * @param string|null $func
     * @param array $varibles
     * @return mixed
     */
    private static function check(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        /**
         * It's checking if the perm is set, if it is, it will return the perm.
         */
        if (self::get($name)) return self::get($name);
        /**
         * Starting a perm and then setting a value if it is passed in.
         */
        return self::set($name, $value, $func, $varibles);
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @return mixed
     */
    #[Pure] private static function get(string $name): mixed
    {
        /**
         * Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
         * doesn't, it adds the argument to the global scope .
         */
        return $GLOBALS[CACHE_KEY][$name];
    }

}