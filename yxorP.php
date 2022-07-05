<?php

namespace yxorP;

/* Importing the constants class from the inc folder. */

use RuntimeException;
use yxorP\inc\constants;
use yxorP\inc\generalHelper;

/* Loading the required files. */
require './inc/generalHelper.php';
require './inc/constants.php';

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
     * @param array $request The request URI
     */
    public function __construct(array $request)
    {
        /* It's setting the constants that are used in the plugin. */
        constants::localise($request);
        /* It's looping through all the files in the `action` directory, and if the file name is longer than 3 characters,
        it's calling the `subscribe()` function. */
        $this->subscribers(DIR_ACTION, scandir(DIR_ROOT . DIR_ACTION));

        /* It's checking if the request URI contains the cockpit directory, and if it does, it requires the cockpit index
        file. */
        if ((constants::get(VAR_SERVER))[YXORP_REQUEST_URI])
            if (str_contains((constants::get(VAR_SERVER))[YXORP_REQUEST_URI], CHAR_SLASH . DIR_COCKPIT)) {
                require PATH_COCKPIT_INDEX;
                exit;
            }

        /* Getting the `plugins` key from the `TARGET` array. If it is not set, it will set it to an empty array. */
        $YXORP_TARGET_PLUGINS = constants::get(YXORP_TARGET_PLUGINS);
        /* Adding the default plugins to the `$_plugins` array. */
        array_push($YXORP_TARGET_PLUGINS, 'blockListPluginAction', 'cookiePluginAction', 'headerRewritePluginAction', 'logPluginAction', 'overridePluginAction', 'proxifyPluginAction');
        /* It's looping through all the plugins in the `$_plugins` array, and calling the `subscribe()` function. */
        $this->subscribers(DIR_PLUGIN, $YXORP_TARGET_PLUGINS); //$this->subscribe(DIR_PLUGIN,(constants::get(YXORP_TARGET))[YXORP_PLUGINS] ?: []);
    }

    /**
     * It checks if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks if the
     * class exists in the yxorP namespace, if it does, it creates an instance of it
     * @param string $dir
     * @param array $actions
     */
    private function subscribers(string $dir, array $actions): void
    {
        foreach ($actions as $action) $this->subscribe($dir, $action);
    }

    /**
     * It checks if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks if the
     * class exists in the yxorP namespace, if it does, it creates an instance of it
     *
     * @param string dir
     * @param string action
     */
    private function subscribe(string $dir, string $action): void
    {
        /* It's removing the `.php` extension from the `$action` variable. */
        $action = str_replace(EXT_PHP, CHAR_EMPTY_STRING, $action);
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
     * @param object subscriber The subscriber to add to the event dispatcher.
     */
    private function addSubscriber(object $subscriber): void
    {
        /* It's checking if the `subscribe()` method exists in the `$subscriber` object, and if it does, it's calling it,
        and
        passing the `$this` object to it. */
        if (method_exists($subscriber, SUBSCRIBE_METHOD)) $subscriber->subscribe($this);
    }

    /**
     * It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function
     * @param $request
     * @return void
     */
    public static function proxy($request = null): void
    {
        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (self::init() as $event) self::yxorP($request ?: $_SERVER)->dispatch($event);
    }

    /**
     * It creates the plugin's directory if it doesn't exist, and installs the plugin if it's not already installed.
     * * @return array
     */
    private static function init(): array
    {
        /* It's creating the constants that are used in the plugin. */
        constants::create(__DIR__);
        /* It's checking if the `http` and `minify` directories exist in the plugin directory, and if they don't, it
        creates them. */
        foreach (array(DIR_HTTP, DIR_MINIFY) as $_asset) generalHelper::fileCheck(DIR_ROOT . $_asset, true);
        /* It's checking if the plugin directory exists, and if it doesn't, it creates it. */
        foreach ([DIR_PLUGIN, PATH_DIR_TMP] as $_dir)
            if (!is_dir($_dir)) if (!mkdir($_dir) && !is_dir($_dir))
                throw new RuntimeException(sprintf(RUNTIME_EXCEPTION, $_dir));
        /* It's checking if there are any users in the `cockpit_accounts` collection, and if there aren't, it's calling the
        `install()` function. */
        if (!constants::get(YXORP_COCKPIT_APP)->storage->getCollection(COCKPIT_ACCOUNTS)->count())
            self::install();
        return constants::get(YXORP_EVENT_LIST);
    }

    /**
     * It creates a new user with the credentials defined in the `.env` file
     */
    private static function install(): void
    {
        /* It's defining the `YXORP_COCKPIT_INSTALL` constant as `true`. */
        define(YXORP_COCKPIT_INSTALL, true);

        /* It's copying the files from the `local` directory to the `cockpit` directory. */
        self::migrate(PATH_COCKPIT_LOCAL, PATH_DIR_COCKPIT);

        /* It's creating an array of user data. */
        $_account = [VAR_USER => constants::get(ENV_ADMIN_USER), VAR_NAME => constants::get(ENV_ADMIN_NAME), VAR_EMAIL => constants::get(ENV_ADMIN_EMAIL), VAR_ACTIVE => true, VAR_GROUP => VAR_ADMIN, VAR_PASSWORD => constants::get(YXORP_COCKPIT_APP)->hash(constants::get(ENV_ADMIN_PASSWORD)), VAR_I18N => constants::get(YXORP_COCKPIT_APP)->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()];
        /* It's inserting a new user into the `cockpit_accounts` collection. */
        constants::get(YXORP_COCKPIT_APP)->storage->insert(COCKPIT_ACCOUNTS, $_account);
    }

    public static function migrate($src, $dst)
    {
        $dir = opendir($src);
        @mkdir($dst);
        foreach (scandir($src) as $file) if (($file != CHAR_PERIOD) && ($file != CHAR_PERIOD . CHAR_PERIOD)) if (is_dir($src . DIRECTORY_SEPARATOR . $file)) self::migrate($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file); else  copy($src . DIRECTORY_SEPARATOR . $file, $dst . DIRECTORY_SEPARATOR . $file);
        closedir($dir);
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
     * @param  $request The request object.
     *
     * @return yxorP The yxorP object.
     */
    public static function yxorP($request = null): yxorP
    {
        /* It's checking if the `$yxorP` variable is set, and if it is, it returns it, if it isn't, it creates a new
        instance of the `yxorP` class and sets the `$yxorP` variable to it. */
        return (self::$yxorP) ?: self::$yxorP = new self($request ?: $_SERVER);
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