<?php namespace yxorP\protocols\Http;

use Exception;
use JetBrains\PhpStorm\ArrayShape;
use RuntimeException;
use yxorP\protocols\Http\Session\fileSessionHandler;
use function array_key_exists;
use function ini_get;
use function is_array;
use function is_scalar;
use function preg_match;
use function random_int;
use function serialize;
use function session_get_cookie_params;
use function unserialize;

/* It's a class that handles sessions. */

class Session
{
    /* It's a class variable. */
    public static string $name = 'PHPSID';
    /* It's a class variable. */
    public static bool $autoUpdateTimestamp = false;
    /* It's a class variable. */
    /* It's a class variable. */
    public static int $lifetime = 1440;
    public static int $cookieLifetime = 1440;
    /* It's a class variable. */
    public static string $cookiePath = '/';
    /* It's a class variable. */
    public static string $domain = '';
    /* It's a class variable. */
    public static bool $secure = false;
    /* It's a class variable. */
    public static bool $httpOnly = true;
    public static string $sameSite = '';
    /* It's a class variable. */
    public static array $gcProbability = [1, 1000];
    /* It's a class variable. */
    private static string $_handlerClass = fileSessionHandler::class;
    /* It's a class variable. */
    private static $_handlerConfig = null;
    /* It's a class variable. */
    private static $_handler = null;
    private mixed $_data = [];
    /* It's a class variable. */
    private bool $_needSave = false;
    /* It's a class variable. */
    private $_sessionId = null;

    /* It's a constructor. */
    public function __construct($session_id)
    {
        static::checkSessionId($session_id);
        if (static::$_handler === null) static::initHandler();
        $this->_sessionId = $session_id;
        if ($data = static::$_handler->read($session_id)) $this->_data = unserialize($data);
    }

    /* It's checking if the session id is valid. */
    protected static function checkSessionId($session_id)
    {
        if (!preg_match('/^[a-zA-Z0-9]+$/', $session_id)) throw new SessionException("session_id $session_id is invalid");
    }

    /* It's initializing the session handler. */
    protected static function initHandler()
    {
        if (static::$_handlerConfig === null) static::$_handler = new static::$_handlerClass(); else   static::$_handler = new static::$_handlerClass(static::$_handlerConfig);
    }

    /* It's initializing the session handler. */
    public static function init()
    {
        if ($gc_probability = (int)ini_get('session.gc_probability') && $gc_divisor = (int)ini_get('session.gc_divisor')) static::$gcProbability = [true, $gc_divisor];
        if ($gc_max_life_time = ini_get('session.gc_maxlifetime')) self::$lifetime = (int)$gc_max_life_time;
        $session_cookie_params = session_get_cookie_params();
        static::$cookieLifetime = $session_cookie_params['lifetime'];
        static::$cookiePath = $session_cookie_params['path'];
        static::$domain = $session_cookie_params['domain'];
        static::$secure = $session_cookie_params['secure'];
        static::$httpOnly = $session_cookie_params['httponly'];
    }

    /* It's setting the session handler class. */
    public static function handlerClass($class_name = null, $config = null): string
    {
        if ($class_name) static::$_handlerClass = $class_name;
        if ($config) static::$_handlerConfig = $config;
        return static::$_handlerClass;
    }

    #[ArrayShape(['lifetime' => "int", 'path' => "string", 'domain' => "string", 'secure' => "bool", 'httponly' => "bool", 'samesite' => "string"])] public static function getCookieParams(): array
    {
        return ['lifetime' => static::$cookieLifetime, 'path' => static::$cookiePath, 'domain' => static::$domain, 'secure' => static::$secure, 'httponly' => static::$httpOnly, 'samesite' => static::$sameSite,];
    }

    /* It's getting a value from the session and then deleting it. */
    public function pull($name, $default = null)
    {
        $value = $this->get($name, $default);
        $this->delete($name);
        return $value;
    }

    /* It's getting a value from the session and then deleting it. */
    public function get($name, $default = null)
    {
        return $this->_data[$name] ?? $default;
    }

    /* It's deleting a value from the session. */
    public function delete($name)
    {
        unset($this->_data[$name]);
        $this->_needSave = true;
    }

    /* It's setting a value in the session. */
    public function put($key, $value = null)
    {
        if (!is_array($key)) {
            $this->set($key, $value);
            return;
        }
        foreach ($key as $k => $v) $this->_data[$k] = $v;
        $this->_needSave = true;
    }

    /* It's setting a value in the session. */
    public function set($name, $value)
    {
        $this->_data[$name] = $value;
        $this->_needSave = true;
    }

    /* It's deleting a value from the session. */
    public function forget($name)
    {
        if (is_scalar($name)) {
            $this->delete($name);
            return;
        }
        if (is_array($name)) foreach ($name as $key) unset($this->_data[$key]);
        $this->_needSave = true;
    }

    /* It's returning the session data. */
    public function all()
    {
        return $this->_data;
    }

    /* It's setting the session data to an empty array. */
    public function flush()
    {
        $this->_needSave = true;
        $this->_data = [];
    }

    /* It's checking if a value exists in the session. */
    public function has($name): bool
    {
        return isset($this->_data[$name]);
    }

    /* It's checking if a value exists in the session. */
    public function exists($name): bool
    {
        return array_key_exists($name, $this->_data);
    }

    /**
     * @throws Exception
     */
    public function __destruct()
    {
        $this->save();
        if (random_int(1, static::$gcProbability[1]) <= static::$gcProbability[0]) $this->gc();
    }

    public function save()
    {
        if ($this->_needSave) if (empty($this->_data)) static::$_handler->destroy($this->_sessionId); else  static::$_handler->write($this->_sessionId, serialize($this->_data)); elseif (static::$autoUpdateTimestamp) static::refresh();
        $this->_needSave = false;
    }

    public function refresh()
    {
        static::$_handler->updateTimestamp($this->getId());
    }

    public function getId()
    {
        return $this->_sessionId;
    }

    public function gc()
    {
        static::$_handler->gc(static::$lifetime);
    }
}

class SessionException extends RuntimeException
{
}

Session::init();