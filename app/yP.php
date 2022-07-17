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
use RuntimeException;
use yxorP\app\lib\http\cache;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\parser\RulesParser;

/**
 * It's a class that's used to dispatch events.
 */
class yP
{
    /**
     * @var $instance
     */
    private static $instance = null;
    /**
     * @var array
     */
    private array $listeners = [];

    /* It's a private function that's used to dispatch events. */
    final private function __construct()
    {
        // The expensive process (e.g.,db connection) goes here.
    }

    /**
     * It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function
     * @param string $root
     * @param array|null $request
     * @return void
     */
    final public static function proxy(string $root, array|null $request = null): void
    {

        /* It's checking if the `$instance` variable is null, and if it is, it's setting it to a new instance of the `yP`
        class. */
        self::$instance = self::$instance ?: new yP();

        /* It's checking if the request URI contains the COCKPIT directory, and if it does, it requires the COCKPIT index
        file. */
        self::init($request, $root);

        // EVENTS
        /* It's setting the `YXORP_EVENT_LIST` constant to an array of events. */
        if (!CACHED_CONTEXT) yP::set(YXORP_EVENT_LIST, [EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL]);

        /* Requiring the COCKPIT library. */
        require PATH_COCKPIT_BOOTSTRAP;

        /* It's setting the `YXORP_COCKPIT_APP` constant to the `COCKPIT()` function. */
        self::set(YXORP_COCKPIT_APP, cockpit());

        /* Reading the file and then calling the env function on each line. */
        if (!CACHED_CONTEXT) foreach (file(DIR_ROOT . EXT_ENV) as $line) helpers::env($line);

        /* Setting the localisation of the server to the request. */
        helpers::localise($request ?: $_SERVER);

        /* It's setting the `YXORP_ACTIONS` constant to an array of files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION`
        directory. */
        if (!CACHED_CONTEXT) self::set('YXORP_ACTIONS', scandir(DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION));

        /* It's looping through all the files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION` directory, and if the file is a
        directory, it's calling the `autoLoader()` function on it. If the file is an interface, it's requiring it. If
        the file is a class, it's requiring it. */
        foreach ([DIR_APP . DIR_LIB . DIR_ACTION => self::get('YXORP_ACTIONS'), DIR_PLUGIN => self::get(YXORP_TARGET_PLUGINS) ?: []] as $key => $value) foreach ($value as $action) if (str_contains($action, EXT_PHP)) self::$instance->subscribe($key, $action);

        /* It's checking if the `tmp` directory exists, and if it doesn't, it's creating it. */
        if (!CACHED_CONTEXT) if (!is_dir(PATH_TMP_DIR)) if (!mkdir($concurrentDirectory = PATH_TMP_DIR, 0777, true) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));

        /* It's requiring the Guzzle library. */
        require PATH_GUZZLE;

        /* It's requiring the Bugsnag library. */
        require PATH_BUGSNAG;

        /* It's setting the token to the snag key. */
        self::tmp(VAR_BUGSNAG, Client::make(self::get(ENV_BUGSNAG_KEY)));


        $cookieFile = 'cookie_jar.txt';

        /* Setting the token GUZZLE to a new instance of the \yxorP\app\lib\proxy class. */
        self::tmp(VAR_GUZZLE, new \GuzzleHttp\Client([VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));

        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (self::get(YXORP_EVENT_LIST) as $event) self::$instance->dispatch($event);
    }

    /**
     * @param ?array $request
     * @param string $root
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    public static function init(?array $request, string $root): void
    {
        /* It's defining a constant called `DIR_ROOT` and setting it to the value of `$root` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ROOT', $root . DIRECTORY_SEPARATOR);

        foreach (['PATH_DIR_COCKPIT' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT, 'PATH_COCKPIT_LOCAL' => DIR_ROOT . DIR_INSTALL . DIR_COCKPIT, 'PATH_COCKPIT_INDEX' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_INDEX, 'PATH_REWRITE' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_REWRITE, 'PATH_COCKPIT_BOOTSTRAP' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_COCKPIT_BOOTSTRAP, 'PATH_INC_WRAPPER' => DIR_ROOT . DIR_APP . DIR_LIB . FILE_WRAPPER, 'PATH_TLDS_ALPHA_BY_DOMAIN' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_TLDS_ALPHA_BY_DOMAIN, 'PATH_PUBLIC_SUFFIX_LIST' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_PUBLIC_SUFFIX_LIST, 'PATH_FILE_MIME_TYPES' => DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_MIME_TYPES, 'PATH_GUZZLE' => DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_GUZZLE, 'PATH_BUGSNAG' => DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_BUGSNAG] as $key => $value) define($key, $value);

        /* Checking if the files exist in the directory. */
        foreach (array('http', 'minify', 'parser') as $_asset) self::autoLoader(DIR_ROOT . DIR_APP . DIR_LIB . $_asset . DIRECTORY_SEPARATOR);        // Reporting

        /* Loading the global variables from the cache. */
        foreach ($cached = cache::fetch(CACHE_KEY_CONTEXT) as $key => $value) if ($key !== YXORP_COCKPIT_APP) yP::override($key, $value);

        /* Defining a constant called CACHED_CONTEXT and setting it to the value of the $cached variable if it is set,
        otherwise it is set to true. */
        define('CACHED_CONTEXT', $cached ? 1 : 0);
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
     * It's setting the value of the variable $_name to the value of the variable $_value.
     * @param string $_name
     * @param string|array|object|null $_value
     * @return string|array|object|null
     */
    final public static function override(string $_name, string|array|object|null $_value): string|array|object|null
    {
        /* Checking if the argument already exists in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return $GLOBALS[$_SERVER['HTTP_HOST']][$_name] = $_value;
    }

    /**
     * It's setting the value of the variable $_name to the value of the variable $_value.
     * @param string $_name
     * @param string|array|object|null $_value
     * @return string|array|object|null
     */
    final public static function set(string $_name, string|array|object|null $_value): string|array|object|null
    {
        /* Checking if the argument already exists in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return (array_key_exists($_name, $GLOBALS[$_SERVER['HTTP_HOST']])) ? throw new RuntimeException(ACCESS_ALREADY_DEFINED) : $GLOBALS[$_SERVER['HTTP_HOST']][$_name] = $_value;
    }

    /**
     * It's checking if the key exists in the global array. If it does, it returns the value of the key. If it doesn't, it
     * returns false.
     * @param string $_name
     * @return string|array|object|null
     */
    final public static function get(string $_name): string|array|object|null
    {
        /* Checking if the key exists in the global array. If it does, it returns the value of the key. If it doesn't, it
        returns false . */
        return $GLOBALS[$_SERVER['HTTP_HOST']][$_name] ?: $GLOBALS[VAR_TMP_STORE][$_name];
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
     * It's setting the value of the variable $_name to the value of the variable $_value.
     * tmp is a temporary variable that's used to store the value of the variable $_name.
     * Temporary variables are stored in the `$GLOBALS[VAR_TMP_STORE]` array.
     * Temporary variables are not stored in the persisted storage.
     * @param string $_name
     * @param string|array|object|null $_value
     * @return string|array|object|null
     */
    final public static function tmp(string $_name, string|array|object|null $_value): string|array|object|null
    {
        /* Checking if the argument already exists in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return (array_key_exists($_name, $GLOBALS[VAR_TMP_STORE])) ? throw new RuntimeException(ACCESS_ALREADY_DEFINED) : $GLOBALS[VAR_TMP_STORE][$_name] = $_value;
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
     *  It's looping through all the files in the `$root` directory, and if the file is a directory, it's calling the
     * `assetLoader()` function on it. If the file is an interface, it's requiring it. If the file is a class, it's
     * requiring it.
     * @param string $root
     * @return void
     */

    final public static function assetLoader(string $root): void
    {
        /* Loading all the files in the root directory and subdirectories. */
        foreach (glob($root . "*") as $path) if (is_dir($path)) self::assetLoader($path); else if (str_contains($_SERVER['REQUEST_URI'], basename($path))) {
            cache::set($content = file_get_contents($path));
        }
    }


    /* It's setting the value of the variable `$key` to the value of the variable `$value`. */

    /**
     * > This function adds a listener to the listeners array
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

}