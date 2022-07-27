<?php

namespace yxorP\app;
/**
 * Setting the memory limit to unlimited.
 */
/**
 * Turning off error reporting.
 */
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
     *
     */
    public function __construct(string $root, array|null $request = null)
    {

        /**
         * Defining the root directory of the website.
         */
        define('DIR_ROOT', $root . DIRECTORY_SEPARATOR);

        /**
         * It's checking if the `$instance` variable is null, and if it is, it's setting it to a new instance of the `self`
         * class.
         */
        if (!self::$instance) (self::$instance = $this)->init($request, $root);
    }

    /**
     * @param ?array $request
     * @param string $root
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    private function init(?array $request): void
    {

        /**
         * Checking if the files exist in the directory.
         */
        foreach (array('http', 'minify', 'parser') as $_asset) self::autoLoader(DIR_ROOT . DIR_APP . DIR_LIB . $_asset);        // Reporting
        /**
         * It's defining a constant called `DIR_ROOT` and setting it to the value of `$root` with a `DIRECTORY_SEPARATOR`
         * appended to it.
         */
        helpers::define($request);

        /**
         * Loading the actions.
         */
        self::loadActions();

        /**
         * It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (store::store(YXORP_EVENT_LIST) as $event) self::$instance->dispatch($event);
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
        /**
         * Creating an empty array.
         */
        $classes = [];
        /**
         * Loading all the PHP files in the directory.
         */
        foreach (glob("$root/*") as $path) if (is_dir($path)) self::autoLoader($path); else if (str_contains($path, 'Interface') && str_contains($path, EXT_PHP)) require_once $path; else $classes[] = $path;
        /**
         * Loading all the classes in the classes folder.
         */
        foreach ($classes as $class) if (str_contains($path, EXT_PHP)) require_once $class;
    }

    /**
     * @return void
     * A method that takes an array as a parameter and returns nothing.
     */
    final public static function loadActions()
    {
        /**
         * It's setting the `YXORP_EVENT_LIST` constant to an array of events.
         */
        store::store(YXORP_EVENT_LIST, [EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL]);

        /**
         * It's setting the `YXORP_ACTIONS` constant to an array of files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION`
         * directory, then looping through all the files in the `DIR_ROOT . DIR_APP . DIR_LIB . DIR_ACTION` directory, and if the file is a
         * directory, it's calling the `autoLoader()` function on it. If the file is an interface, it's requiring it. If
         * the file is a class, it's requiring it.
         */
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
        /**
         * It's checking if the length of the `$action` variable is less than 3, and if it is, it returns.
         */
        if (strlen($action) < 3) return;
        /**
         * It's removing the `.php` extension from the `$action` variable.
         */
        $action = str_replace(EXT_PHP, CHAR_EMPTY_STRING, $action);
        /**
         * It's checking if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks
         * if the class exists in the yxorP namespace, if it does, it creates an instance of it */
        require(DIR_ROOT . $root . $action . EXT_PHP);
        /**
         * It's creating an instance of the class that's in the `$action` variable, and passing it to the `addSubscriber()`
         * function.
         */
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
        /**
         * It's checking if the `subscribe()` method exists in the `$subscriber` object, and if it does, it's calling it,
         * and  passing the `self::$instance` object to it.
         */
        if (method_exists($subscriber, SUBSCRIBE_METHOD)) $subscriber->subscribe(self::$instance);
    }


    /**
     *  The function is checking if there are any listeners for the event, and if there are, it's looping through them and calling
     * them.
     * @return void
     * @var string $event_name
     */
    private function dispatch(string $event_name): void
    {
        /**
         * It's checking if there are any listeners for the event, and if there are, it's looping through them and calling
         * them.
         */
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
        /**
         * It's adding a listener to the listeners array.
         */
        self::$instance->listeners[$event][0][] = $callback;
    }

}