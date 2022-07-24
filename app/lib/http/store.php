<?php namespace yxorP\app\lib\http;
/**
 * It's a class that's used to dispatch events.
 */
class store
{

    /**
     * Try get session else store value or execute function, set session and return values
     * @param string $name
     * @param mixed $value
     * @param string|null $func
     * @param array $varibles
     * @return mixed
     */
    final public static function store(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        if ($session = self::store_session($name, $value, $func, $varibles)) return $session;
        elseif ($tmp = self::store_tmp($name)) return $tmp;
        else return null;
    }

    /**
     * Try get session else store value or execute function, set session and return values
     * @param string $name
     * @param mixed $value
     * @param string|null $func
     * @param array $varibles
     * @return mixed
     */
    private static function store_session(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        if (self::store_check($name)) return self::store_check($name);
        /* Checking if the session is started, if not, it will start the session. */
        if (session_status() === PHP_SESSION_NONE) session_name(YXORP) . session_start();
        /* Starting a session and then setting a value if it is passed in. */
        return self::store_session_set($name, $value) ?: self::store_session_set($name, null, $func, $varibles);
    }


    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @return mixed
     */
    #[Pure] private static function store_check(string $name): mixed
    {
        /* Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return (self::store_session_check($name)) ?: ((self::store_tmp_check($name)) ?: null);
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @return mixed
     */
    #[Pure] private static function store_session_check(string $name): mixed
    {
        /* Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return self::store_session_get($name) ?: null;
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @return mixed
     */
    private static function store_session_get(string $name): mixed
    {
        /* Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return $_SESSION[$name];
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @return mixed
     */
    #[Pure] private static function store_tmp_check(string $name): mixed
    {
        /* Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return self::store_tmp_get($name) ?: null;
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @return mixed
     */
    private static function store_tmp_get(string $name): mixed
    {
        /* Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return $GLOBALS[$name];
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public static function store_session_set(string $name, mixed $value, ?string $func = null, array $varibles = []): mixed
    {
        if (!$value && $func) $value = call_user_func_array($func, $varibles);
        /* Setting the value of the variable $name to the value of the variable $value. */
        return $value ? $_SESSION[$name] = $value : null;
    }

    /**
     * Try get session else store value or execute function, set session and return values
     * @param string $name
     * @param mixed $value
     * @param string|null $func
     * @param array $varibles
     * @return mixed
     */
    final public static function store_tmp(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        if (self::store_check($name)) return self::store_check($name);
        /* Starting a session and then setting a value if it is passed in. */
        return self::store_tmp_set($name, $value) ?: self::store_tmp_set($name, null, $func, $varibles);
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public static function store_tmp_set(string $name, mixed $value, ?string $func = null, array $varibles = []): mixed
    {
        if (!$value && $func) $value = call_user_func_array($func, $varibles);
        /* Setting the value of the variable $name to the value of the variable $value. */
        return $value ? $GLOBALS[$name] = $value : null;
    }

}