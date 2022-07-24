<?php

namespace yxorP\app;
/* Setting the memory limit to unlimited. */
/* Turning off error reporting. */
ini_set('memory_limit', '-1');
error_reporting(1);
/**
 * Importing the constants class from the inc folder.
 */
include 'constants.php';

/**
 * It's importing the `Client` class from the `Bugsnag` namespace.
 * It's importing the `RuntimeException` class from the `RuntimeException` namespace.
 * It's importing the `cache` class from the `http` namespace.
 * It's importing the `helpers` class from the `http` namespace.
 * It's importing the `RulesParser` class from the `parser` namespace.
 */

use Bugsnag\Client;
use GuzzleHttp\FileCookieJar;
use RuntimeException;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\parser\RulesParser;
use function session_start;

/**
 * It's a class that's used to dispatch events.
 */
class yP
{
    /**
     * @var $instance
     */
    private static ?yP $instance = null;
    /**
     * @var array
     */
    private array $listeners = [];


    /**
     * It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function
     * @param string $root
     * @param array|null $request
     */
    public function __construct(string $root, array|null $request = null)
    {

        /* Defining the root directory of the website. */
        define('DIR_ROOT', $root . DIRECTORY_SEPARATOR);

        /* It's checking if the `$instance` variable is null, and if it is, it's setting it to a new instance of the `self`
        class. */
        if (!self::$instance) (self::$instance = $this)->init($request, $root);
    }

    /**
     * @param ?array $request
     * @param string $root
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    private function init(?array $request, string $root): void
    {
        /* It's defining a constant called `DIR_ROOT` and setting it to the value of `$root` with a `DIRECTORY_SEPARATOR`
        appended to it. */

        define('PATH_COCKPIT_BOOTSTRAP', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_COCKPIT_BOOTSTRAP);
        define('PATH_GUZZLE', DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_GUZZLE);
        define('PATH_BUGSNAG', DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_BUGSNAG);
        define('PATH_COOKIE_JAR', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_COOKIE_JAR);
        define('PATH_DIR_COCKPIT', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT);
        define('PATH_COCKPIT_LOCAL', DIR_ROOT . DIR_INSTALL . DIR_COCKPIT);
        define('PATH_COCKPIT_INDEX', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_INDEX);
        define('PATH_REWRITE', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_REWRITE);
        define('PATH_INC_WRAPPER', DIR_ROOT . DIR_APP . DIR_LIB . FILE_WRAPPER);
        define('PATH_TLDS_ALPHA_BY_DOMAIN', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_TLDS_ALPHA_BY_DOMAIN);
        define('PATH_PUBLIC_SUFFIX_LIST', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_PUBLIC_SUFFIX_LIST);
        define('PATH_FILE_MIME_TYPES', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_MIME_TYPES);

        /* Checking if the files exist in the directory. */
        foreach (array('http', 'minify', 'parser') as $_asset) self::autoLoader(DIR_ROOT . DIR_APP . DIR_LIB . $_asset);        // Reporting

        /* It's setting the `YXORP_EVENT_LIST` constant to an array of events. */
        self::store(YXORP_EVENT_LIST, [EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL]);

        /* Loading the cockpit.php file. */
        self::loadCockpit();

        /* Reading the file and then calling the env function on each line. */

        foreach (file(DIR_ROOT . EXT_ENV) as $line) helpers::env($line);
        echo self::store(ENV_DEFAULT_TARGET);
        /* Setting the localisation of the server to the request. */
        helpers::localise($request);

        /* Loading the actions. */
        self::loadActions();

        /* It's checking if the `tmp` directory exists, and if it doesn't, it's creating it. */
        if (!is_dir(PATH_TMP_DIR)) if (!mkdir($concurrentDirectory = PATH_TMP_DIR, 0777, true) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));

        /* Loading the Guzzle Snag class. */
        self::loadGuzzleSnag();

        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (self::store(YXORP_EVENT_LIST) as $event) self::$instance->dispatch($event);
    }

    /**
     * It's looping through all the files in the `$root` directory, and if the file is a directory, it's calling the
     * `autoLoader()` function on it. If the file is an interface, it's requiring it. If the file is a class, it's
     * requiring it.
     * @param string $root
     * @return void
     */
    final protected static function autoLoader(string $root): void
    {
        $classes = [];
        foreach (glob("$root/*") as $path) if (is_dir($path)) self::autoLoader($path); else if (str_contains($path, 'Interface') && str_contains($path, EXT_PHP)) require_once $path; else $classes[] = $path;
        foreach ($classes as $class) if (str_contains($path, EXT_PHP)) require_once $class;
    }

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
        if ($session = self::session($name, $value, $func, $varibles)) return $session;
        elseif ($tmp = self::tmp($name)) return $tmp;
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
    private static function session(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        /* Checking if the session has started. If it has not, it will start the session. */
        if (session_status() === PHP_SESSION_NONE) session_start();
        /* A function that is used to set and get session variables. */
        return self::get($_SESSION, $name) ?: ($value ? self::set($_SESSION, $name, $value) : ($func ? self::set($_SESSION, $name, call_user_func_array($func, $varibles)) : null));
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param mixed $type
     * @param string $name
     * @return mixed
     */
    private static function get(mixed $type, string $name): mixed
    {
        /* Checking if the argument already isset in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return $type[$name];
    }

    /**
     * It's setting the value of the variable $name to the value of the variable $_value.
     * @param mixed $type
     * @param string $name
     * @param mixed $value
     * @return mixed
     */
    public static function set(mixed $type, string $name, mixed $value): mixed
    {
        /* Setting the value of the variable $name to the value of the variable $value. */
        return $type[$name] ?: $type[$name] = $value;
    }

    /**
     * Try get session else store value or execute function, set session and return values
     * @param string $name
     * @param mixed $value
     * @param string|null $func
     * @param array $varibles
     * @return mixed
     */
    final public static function tmp(string $name, mixed $value = null, ?string $func = null, array $varibles = []): mixed
    {
        /* Starting a session and then setting a value if it is passed in. */
        return self::get($GLOBALS, $name) ?: ($value ? self::set($GLOBALS, $name, $value) : ($func ? self::set($GLOBALS, $name, (call_user_func_array($func, $varibles))) : null));
    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    public static function loadCockpit(): void
    {
        /* Requiring the COCKPIT library. */
        require PATH_COCKPIT_BOOTSTRAP;
        $GLOBALS[YXORP_COCKPIT_APP] = cockpit();
    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    final public static function loadActions()
    {

        /* It's setting the `YXORP_ACTIONS` constant to an array of files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION`
        directory, then looping through all the files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION` directory, and if the file is a
        directory, it's calling the `autoLoader()` function on it. If the file is an interface, it's requiring it. If
        the file is a class, it's requiring it. */
        foreach ([DIR_APP . DIR_LIB . DIR_ACTION => self::store(YXORP_ACTIONS, null, 'scandir', [DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION]), DIR_PLUGIN => self::store(YXORP_TARGET_PLUGINS) ?: []] as $key => $value) foreach ($value as $action) if (str_contains($action, EXT_PHP)) self::$instance->subscribe($key, $action);

    }

    /**
     * It checks if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks if the
     * class exists in the yxorP namespace, if it does, it creates an instance of it
     * @param string $root
     * @param string $action
     * @return void
     */
    private function subscribe(string $root, string $action): void
    {
        /* It's checking if the length of the `$action` variable is less than 3, and if it is, it returns. */
        if (strlen($action) < 3) return;
        /* It's removing the `.php` extension from the `$action` variable. */
        $action = str_replace(EXT_PHP, CHAR_EMPTY_STRING, $action);
        /* It's checking if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks
        if the class exists in the yxorP namespace, if it does, it creates an instance of it */
        require(DIR_ROOT . $root . $action . EXT_PHP);
        /* It's creating an instance of the class that's in the `$action` variable, and passing it to the `addSubscriber()`
        function. */
        self::$instance->addSubscriber(new $action());
    }

    /**
     * It's checking if the `subscribe()` method exists in the `$subscriber` object, and if it does, it's calling it, and
     * passing the `self::$instance` object to it
     * @param object $subscriber
     * @return void
     */
    private function addSubscriber(object $subscriber): void
    {
        /* It's checking if the `subscribe()` method exists in the `$subscriber` object, and if it does, it's calling it,
        and  passing the `self::$instance` object to it. */
        if (method_exists($subscriber, SUBSCRIBE_METHOD)) $subscriber->subscribe(self::$instance);
    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    public static function loadGuzzleSnag(): void
    {

        /* It's requiring the Guzzle library. */
        require PATH_GUZZLE;

        /* It's requiring the Bugsnag library. */
        require PATH_BUGSNAG;

        /* It's setting the token to the snag key. */
        self::store(VAR_BUGSNAG, Client::make(self::store(ENV_BUGSNAG_KEY)));

        /* Setting the token GUZZLE to a new instance of the \yxorP\app\lib\proxy class. */
        self::store(VAR_GUZZLE, new \GuzzleHttp\Client([VAR_COOKIES => new \GuzzleHttp\Cookie\FileCookieJar(PATH_COOKIE_JAR, TRUE), VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => 0, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));

    }

    /**
     *  The function is checking if there are any listeners for the event, and if there are, it's looping through them and calling
     * them.
     * @return void
     * @var string $event_name
     */
    private function dispatch(string $event_name): void
    {
        /* It's checking if there are any listeners for the event, and if there are, it's looping through them and calling
        them. */
        if (isset(self::$instance->listeners[$event_name])) foreach ((array)self::$instance->listeners[$event_name] as $priority => $listeners) foreach ((array)$listeners as $listener) if (is_callable($listener)) $listener();
    }

    /**
     * This function adds a listener to the listeners array
     *
     * @param string event The name of the event to listen for.
     * @param object callback The callback function to be executed when the event is triggered.
     * @return void The priority of the listener. Higher priority listeners are called before lower priority listeners.
     */
    final public function addListener(string $event, object $callback): void
    {
        /* It's adding a listener to the listeners array. */
        self::$instance->listeners[$event][0][] = $callback;
    }

}