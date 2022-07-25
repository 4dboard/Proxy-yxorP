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
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\parser\RulesParser;

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
        self::define();
        /* Setting the localisation of the server to the request. */
        helpers::localise($request);

        /* Loading the actions. */
        self::loadActions();

        /* Loading the Guzzle Snag class. */
        self::loadGuzzleSnag();

        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (store::store(YXORP_EVENT_LIST) as $event) self::$instance->dispatch($event);
    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    private function define(): void
    {
        /* It's defining a constant called `DIR_ROOT` and setting it to the value of `$root` with a `DIRECTORY_SEPARATOR`
        appended to it. */

        /* It's defining a constant called `PATH_COCKPIT_BOOTSTRAP` and setting it to the value of `DIR_ROOT` with a
        `DIR_APP` and `DIR_LIB` and `DIR_COCKPIT` and `FILE_COCKPIT_BOOTSTRAP` appended to it. */
        define('PATH_COCKPIT_BOOTSTRAP', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_COCKPIT_BOOTSTRAP);
        /* It's defining a constant called `PATH_GUZZLE` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
        `DIR_VENDOR` and `FILE_GUZZLE` appended to it. */
        define('PATH_GUZZLE', DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_GUZZLE);
        /* It's defining a constant called `PATH_BUGSNAG` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
        `DIR_VENDOR` and `FILE_BUGSNAG` appended to it. */
        define('PATH_BUGSNAG', DIR_ROOT . DIR_APP . DIR_VENDOR . FILE_BUGSNAG);
        /* It's defining a constant called `PATH_COOKIE_JAR` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
        `DIR_LIB` and `DIR_DATA` and `FILE_COOKIE_JAR` appended to it. */
        define('PATH_COOKIE_JAR', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_COOKIE_JAR);
        /* It's defining a constant called `PATH_DIR_COCKPIT` and setting it to the value of `DIR_ROOT` with a `DIR_APP`
        and `DIR_LIB` and `DIR_COCKPIT` appended to it. */
        define('PATH_DIR_COCKPIT', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT);
        /* It's defining a constant called `PATH_COCKPIT_LOCAL` and setting it to the value of `DIR_ROOT` with a
        `DIR_INSTALL` and `DIR_COCKPIT` appended to it. */
        define('PATH_COCKPIT_LOCAL', DIR_ROOT . DIR_INSTALL . DIR_COCKPIT);
        /* It's defining a constant called `PATH_COCKPIT_INDEX` and setting it to the value of `DIR_ROOT` with a `DIR_APP`
        and `DIR_LIB` and `DIR_COCKPIT` and `FILE_INDEX` appended to it. */
        define('PATH_COCKPIT_INDEX', DIR_ROOT . DIR_APP . DIR_LIB . DIR_COCKPIT . FILE_INDEX);
        /* It's defining a constant called `PATH_REWRITE` and setting it to the value of `DIR_ROOT` with a `DIR_APP` and
        `DIR_LIB` and `DIR_DATA` and `FILE_REWRITE` appended to it. */
        define('PATH_REWRITE', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_REWRITE);
        /* It's defining a constant called `PATH_INC_WRAPPER` and setting it to the value of `DIR_ROOT` with a `DIR_APP`
        and  `DIR_LIB` and `FILE_WRAPPER` appended to it. */
        define('PATH_INC_WRAPPER', DIR_ROOT . DIR_APP . DIR_LIB . FILE_WRAPPER);
        /* Defining a constant. */
        define('PATH_TLDS_ALPHA_BY_DOMAIN', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_TLDS_ALPHA_BY_DOMAIN);
        /* Defining a constant called PATH_PUBLIC_SUFFIX_LIST. The value of the constant is the directory root, the
        application directory, the library directory, the data directory, and the public suffix list file. */
        define('PATH_PUBLIC_SUFFIX_LIST', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_PUBLIC_SUFFIX_LIST);
        /* Defining a constant called PATH_FILE_MIME_TYPES. The value of the constant is the directory root, the
        application directory, the library directory, the data directory, and the file mime types. */
        define('PATH_FILE_MIME_TYPES', DIR_ROOT . DIR_APP . DIR_LIB . DIR_DATA . FILE_MIME_TYPES);
    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    final public static function loadActions()
    {
        /* It's setting the `YXORP_EVENT_LIST` constant to an array of events. */
        store::store(YXORP_EVENT_LIST, [EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL]);

        /* It's setting the `YXORP_ACTIONS` constant to an array of files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION`
        directory, then looping through all the files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION` directory, and if the file is a
        directory, it's calling the `autoLoader()` function on it. If the file is an interface, it's requiring it. If
        the file is a class, it's requiring it. */
        foreach ([DIR_APP . DIR_LIB . DIR_ACTION => store::store(YXORP_ACTIONS, null, 'scandir', [DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION]), DIR_PLUGIN => store::store(YXORP_TARGET_PLUGINS) ?: []] as $key => $value) foreach ($value as $action) if (str_contains($action, EXT_PHP)) self::$instance->subscribe($key, $action);

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
        store::tmp(VAR_BUGSNAG, Client::make(store::store(ENV_BUGSNAG_KEY)));

        /* Setting the token GUZZLE to a new instance of the \yxorP\app\lib\proxy class. */
        store::tmp(VAR_GUZZLE, new \GuzzleHttp\Client([VAR_COOKIES => new \GuzzleHttp\Cookie\FileCookieJar(PATH_COOKIE_JAR, TRUE), VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));

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