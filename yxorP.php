<?php

namespace yxorP;

/* Importing the Constants class from the inc folder. */

use MongoDB\Driver\Monitoring\Subscriber;
use yxorP\inc\genralHelper;

/* Loading the required files. */
require './cockpit/bootstrap.php';
require './inc/generalHelper.php';

/**
 * It's a proxy for the yxorp plugin
 */
class yxorP
{
    /* It's a singleton. */
    /**
     * @var yxorP|null
     */
    public static ?yxorP $yxorP = null;
    /* It's an array of events that will be triggered. */
    /**
     * @var array
     */
    private static array $events = [];
    /* It's an array of events that will be triggered. */
    /**
     * @var array
     */
    private array $listeners = [];

    /**
     * It's a constructor that sets up the plugin
     *
     * @param _req The request URI
     */
    public function __construct($_req)
    {
        /* It's setting the constants that are used in the plugin. */
        Constants::localise($_req);
        /* It's checking if the request URI contains the cockpit directory, and if it does, it requires the cockpit index
        file. */
        if (str_contains(Constants::get(TOKEN_SERVER)[TOKEN_REQUEST_URI], DIRECTORY_SEPARATOR . DIR_COCKPIT)) require PATH_COCKPIT_INDEX;
        /* It's looping through all the files in the `action` directory, and if the file name is longer than 3 characters,
        it's calling the `subscribe()` function. */
        foreach (scandir(DIR_ROOT . DIR_ACTION) as $action) $this->subscribe(DIR_ACTION, $action);
        /* Getting the `plugins` key from the `TARGET` array. If it is not set, it will set it to an empty array. */
        $_plugins = Constants::get('TARGET')['plugins'] ?: [];
        /* Adding the default plugins to the `$_plugins` array. */
        array_push($_plugins, 'blockListPluginAction', 'cookiePluginAction', 'dailyMotionPluginAction', 'headerRewritePluginAction', 'logPluginAction', 'overridePluginAction', 'proxifyPluginAction', 'streamPluginAction', 'twitterPluginAction', 'youtubePluginAction');
        /* It's looping through all the plugins in the `$_plugins` array, and calling the `subscribe()` function. */
        foreach ($_plugins as $action) $this->subscribe(DIR_PLUGIN, $action); //foreach (Constants::get('TARGET')['plugins'] ?: [] as $action) $this->subscribe(DIR_PLUGIN, $action);
    }

    /**
     * It checks if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks if the
     * class exists in the yxorP namespace, if it does, it creates an instance of it
     *
     * @param action The name of the action to be executed.
     */
    private function subscribe($dir, $action): void
    {
        /* It's removing the `.php` extension from the `$action` variable. */
        $action = str_replace(EXT_PHP, '', $action);
        /* It's checking if the length of the `$action` variable is less than 3, and if it is, it returns. */
        if (strlen($action) < 3) return;
        /* It's checking if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks
        if the class exists in the yxorP namespace, if it does, it creates an instance of it */
        if (file_exists(DIR_ROOT . $dir . $action . EXT_PHP)) require(DIR_ROOT . $dir . $action . EXT_PHP); elseif ('\\yxorP\\' . $action) $plugin = '\\yxorP\\' . $action;
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
     * It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function
     * @param $_req
     * @return void
     */
    public static function proxy($_req = null): void
    {
        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (self::init() as $_event) self::yxorP($_req ?: $_SERVER)->dispatch($_event);
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

        /* It's checking if the `http` and `minify` directories exist in the plugin directory, and if they don't, it
        creates them. */
        foreach (array(DIR_HTTP, DIR_MINIFY) as $_asset) GeneralHelper::fileCheck(DIR_ROOT . $_asset, true);

        /* It's checking if the plugin directory exists, and if it doesn't, it creates it. */
        if (!is_dir(DIR_ROOT)) if (!mkdir($concurrentDirectory = DIR_ROOT) && !is_dir($concurrentDirectory))
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

        $_account = [VAR_USER => Constants::get(ENV_ADMIN_USER), VAR_NAME => Constants::get(ENV_ADMIN_NAME), VAR_EMAIL => Constants::get(ENV_ADMIN_EMAIL), VAR_ACTIVE => true, VAR_GROUP => VAR_ADMIN, VAR_PASSWORD => COCKPIT_APP->hash(Constants::get(ENV_ADMIN_PASSWORD)), VAR_I18N => COCKPIT_APP->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()];

        /* It's inserting a new user into the `cockpit_accounts` collection. */
        COCKPIT_APP->storage->insert(COCKPIT_ACCOUNTS, $_account);
    }

    /**
     * It takes a source directory, a destination directory, and a file extension, and copies all files with that extension
     * from the source directory to the destination directory
     *
     * @param from The directory to migrate from.
     * @param to The destination directory.
     * @param ext The extension of the files to be migrated.
     */
    private static function migrate($from, $to): void
    {/* It's checking if there are any files in the `$from` directory, and if there are, it's looping through them and
        calling the `base()` function. */
        if (count($all = glob("$from" . (CHAR_ASTRIX), GLOB_MARK)) > 0) foreach ($all as $a) self::base($from, $to, $a);
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
        return (self::$yxorP) ?: self::$yxorP = new self($_req ?: $_SERVER);
    }

    /**
     * > This function adds a listener to the listeners array
     *
     * @param event The name of the event to listen for.
     * @param callback The callback function to be executed when the event is triggered.
     * @param priority The priority of the listener. Higher priority listeners are called before lower priority listeners.
     */
    public function addListener($event, $callback): void
    {/* It's adding a listener to the listeners array. */
        $this->listeners[$event][0][] = $callback;
    }
}