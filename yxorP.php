<?php

namespace yxorP;

/* Importing the Constants class from the inc folder. */

use yxorP\inc\Constants;

/* Loading the required files. */
require './inc/Constants.php';
require './cockpit/bootstrap.php';
require './cache/State.php';
require './cache/Cache.php';
require './inc/guzzle.phar';
require './inc/bugsnag.phar';

/**
 * It's a proxy for the yxorp plugin
 */
class yxorP
{
    /* It's a singleton. */
    private static yxorP $yxorP;
    /* It's an array of events that will be triggered. */
    private static array $events = [];
    /* It's an array of events that will be triggered. */
    private array $listeners = [];

    /**
     * It's a constructor that sets up the plugin
     *
     * @param _req The request URI
     */
    private function __construct($_req)
    {
        /* It's setting the constants that are used in the plugin. */
        Constants::localise($_req);
        /* It's checking if the request URI contains the cockpit directory, and if it does, it requires the cockpit index
        file. */
        if (str_contains(CACHE_SERVER[TOKEN_REQUEST_URI], DIRECTORY_SEPARATOR . DIR_COCKPIT)) require PATH_COCKPIT_INDEX;
        /* It's checking if the `http` and `minify` directories exist in the plugin directory, and if they don't, it
        creates them. */
        foreach (array(DIR_HTTP, DIR_MINIFY) as $_asset) yxorp::fileCheck(DIR_PLUGIN . $_asset, true);
        /* It's looping through all the files in the `action` directory, and if the file name is longer than 3 characters,
        it's calling the `subscribe()` function. */
        foreach (scandir(DIR_PLUGIN . DIR_ACTION) as $action) if (strlen($action) > 3) $this->subscribe($action);
        /* It's setting the `TOKEN_REWRITE_SEARCH` constant to the value of the `PATH_REWRITE_SEARCH` constant. */
        Constants::set(TOKEN_REWRITE_SEARCH, GeneralHelper::CSV(PATH_REWRITE_SEARCH));
        /* It's setting the `TOKEN_REWRITE_REPLACE` constant to the value of the `PATH_REWRITE_REPLACE` constant. */
        Constants::set(TOKEN_REWRITE_REPLACE, GeneralHelper::CSV(PATH_REWRITE_REPLACE));
    }

    /**
     * It checks if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks if the
     * class exists in the yxorP namespace, if it does, it creates an instance of it
     *
     * @param action The name of the action to be executed.
     */
    private function subscribe($action): void
    {
        /* It's checking if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks
        if the class exists in the yxorP namespace, if it does, it creates an instance of it */
        if (file_exists(DIR_PLUGIN . DIR_ACTION . $action)) require(DIR_PLUGIN . DIR_ACTION . $action); elseif ('\\yxorP\\' . $action) $plugin = '\\yxorP\\' . $action;
        /* It's creating an instance of the class that's in the `$action` variable, and passing it to the `addSubscriber()`
        function. */
        $this->addSubscriber(new $action());
    }

    /**
     * > If the subscriber has a subscribe method, call it and pass the event manager to it
     *
     * @param subscriber The subscriber to add to the event dispatcher.
     */
    private function addSubscriber($subscriber): void
    {
        /* It's checking if the `subscribe()` method exists in the `$subscriber` object, and if it does, it's calling it,
        and
        passing the `$this` object to it. */
        if (method_exists($subscriber, SUBSCRIBE_METHOD)) $subscriber->subscribe($this);
    }

    /**
     * > It loops through all the events in the `init()` function and dispatches them to the `yxorP()` function
     *
     * @param _req The request object
     */
    public static function proxy($_req): void
    {
        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (self::init() as $_event) self::yxorP($_req)->dispatch($_event);
    }

    /**
     * It creates the plugin's directory if it doesn't exist, and installs the plugin if it's not already installed.
     *
     * @return array An array of events.
     */
    private static function init(): array
    {
        /* It's checking if the `$events` variable is set, and if it is, it returns it. */
        if (self::$events) return self::$events;
        /* It's creating the constants that are used in the plugin. */
        Constants::create(__DIR__);

        /* It's checking if the plugin directory exists, and if it doesn't, it creates it. */
        if (!is_dir(DIR_PLUGIN)) if (!mkdir($concurrentDirectory = DIR_PLUGIN) && !is_dir($concurrentDirectory))
            throw new RuntimeException(sprintf(RUNTIME_EXCEPTION, $concurrentDirectory));

        /* It's checking if there are any users in the `cockpit_accounts` collection, and if there aren't, it's calling the
        `install()` function. */
        if (!COCKPIT_APP->storage->getCollection(COCKPIT_ACCOUNTS)->count()) self::install();
        /* It's returning an array of events. */
        return self::$events = [EVENT_BUILD_CACHED, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND,
            EVENT_SEND, EVENT_SENT, EVENT_COMPLETE, EVENT_FINAL];
    }

    /**
     * It creates a new user with the credentials defined in the `.env` file
     */
    private static function install(): void
    {
        /* It's defining the `TOKEN_COCKPIT_INSTALL` constant as `true`. */
        define(TOKEN_COCKPIT_INSTALL, true);
        /* It's copying all the files from the `local` directory to the `cockpit` directory. */
        self::migrate(PATH_COCKPIT_LOCAL, PATH_DIR_COCKPIT);

        /* It's inserting a new user into the `cockpit_accounts` collection. */
        COCKPIT_APP->storage->insert(COCKPIT_ACCOUNTS, [VAR_USER => Constants::get(TOKEN_ADMIN_USER . EXT_ENV), VAR_NAME => Constants::get(TOKEN_ADMIN_NAME . EXT_ENV), VAR_EMAIL =>
            Constants::get(TOKEN_ADMIN_EMAIL . EXT_ENV), VAR_ACTIVE => true, VAR_GROUP => VAR_ADMIN, VAR_PASSWORD => COCKPIT_APP->hash(Constants::get(TOKEN_ADMIN_PASSWORD . EXT_ENV)),
            VAR_I18N => COCKPIT_APP->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()]);
    }

    /**
     * It takes a source directory, a destination directory, and a file extension, and copies all files with that extension
     * from the source directory to the destination directory
     *
     * @param from The directory to migrate from.
     * @param to The destination directory.
     * @param ext The extension of the files to be migrated.
     */
    private static function migrate($from, $to, $ext = CHAR_ASTRIX): void
    {
        /* It's checking if there are any files in the `$from` directory, and if there are, it's looping through them and
        calling the `base()` function. */
        if (count($all = glob("$from$ext", GLOB_MARK)) > 0) foreach ($all as $a) self::base($from, $to, $a);
    }

    /**
     * It takes a source and destination directory, and copies all files and subdirectories from the source to the
     * destination
     *
     * @param from The source directory
     * @param to The destination directory
     * @param a the file or directory to be copied
     */
    private static function base($from, $to, $a): void
    {
        /* It's getting the base name of the file or directory. */
        $ff = basename($a);
        /* It's checking if the `$a` variable is a directory, and if it is, it's calling the `migrate()` function. */
        if (is_dir($a)) self::migrate("$from$ff/", "$to$ff/");
    }

    /**
     * "If there are any listeners for the event, call them."
     *
     * The first thing the function does is check if there are any listeners for the event. If there are, it loops through
     * them and calls them
     *
     * @param event_name The name of the event to dispatch.
     */
    private function dispatch($event_name): void
    {
        /* It's checking if there are any listeners for the event, and if there are, it's looping through them and calling
        them. */
        if (isset($this->listeners[$event_name])) foreach ((array)$this->listeners[$event_name] as $priority => $listeners) foreach ((array)$listeners as $listener)
            if (is_callable($listener)) $listener();
    }

    /**
     * > `yxorP` is a function that returns a `yxorP` object
     *
     * @param _req The request object.
     *
     * @return yxorP The yxorP object.
     */
    public static function yxorP($_req = null): yxorP
    {
        /* It's checking if the `$yxorP` variable is set, and if it is, it returns it, if it isn't, it creates a new
        instance of the `yxorP` class and sets the `$yxorP` variable to it. */
        return self::$yxorP ?: self::$yxorP = new yxorP($_req ?: $_SERVER);
    }

    /**
     * > This function adds a listener to the listeners array
     *
     * @param event The name of the event to listen for.
     * @param callback The callback function to be executed when the event is triggered.
     * @param priority The priority of the listener. Higher priority listeners are called before lower priority listeners.
     */
    private function addListener($event, $callback, $priority = 0): void
    {
        /* It's adding a listener to the listeners array. */
        $this->listeners[$event][$priority][] = $callback;
    }
}