<?php

namespace yxorP\inc;
/* Importing the constants class from the inc folder. */

try {
    /* Initialise minimum definable varibles */
    if (!defined('CHAR_SLASH')) {
        /* Defining a constant. */
        define('CHAR_SLASH', '/');
        /* Defining a constant. */
        define('CHAR_PERIOD', '.');
        define('VAR_TMP', 'tmp');
        /* Defining a constant. */
        define('FILE_TMP', CHAR_PERIOD . VAR_TMP);
        /* Defining a constant called PATH_TMP_DIR. The value of the constant is the current directory (__DIR__) plus the
        directory separator (CHAR_SLASH) plus the value of the DIR_TMP constant. */
        define('DIR_TMP', VAR_TMP . CHAR_SLASH);
        /* Creating a unique key for the cache file. */
        define('CACHE_KEY', rtrim(strtr(base64_encode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']), '+/=', '._-')));
        /* Defining a constant called PATH_TMP_DIR. The value of the constant is the current directory (__DIR__) plus the
        directory separator (CHAR_SLASH) plus the value of the constant DIR_TMP. */
        define('PATH_TMP_DIR', __DIR__ . DIRECTORY_SEPARATOR . DIR_TMP);
        /* Defining a constant called PATH_TMP_DIR_FULL. The value of the constant is the current directory, a directory
        separator, the value of the constant DIR_TMP, the value of the constant CACHE_KEY, and the value of the constant
        FILE_TMP. */
        define('PATH_TMP_FILE', __DIR__ . DIRECTORY_SEPARATOR . DIR_TMP . CACHE_KEY . FILE_TMP);
    }
    /* Checking if we must clear the cache */
    if (isset($_GET["CLECHE"])) foreach (glob(PATH_TMP_DIR . '*') as $file) unlink($file);
    /*  Set Header MimeType */

    if (!defined('MIME')) {
        /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
        $mimeTypes = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mime' . CHAR_PERIOD . 'json'), true);
        /* Getting the file extension of the requested file. */
        $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);

        /* Setting the content type of the response. */
        if (str_contains($_SERVER['REQUEST_URI'], 'bundle.js')) define('MIME', 'application' . CHAR_SLASH . 'wasm');
        /* Checking if the current request URI contains the string `sitemap`. */
        else if (str_contains($_SERVER['REQUEST_URI'], 'sitemap'))
            /* Checking if the current request URI contains the string `crop`. */
            define('MIME', 'application' . CHAR_SLASH . 'xml');
        else if (str_contains($_SERVER['REQUEST_URI'], 'crop'))
            /* Setting the content type of the response to `image/png`. */
            define('MIME', 'image' . CHAR_SLASH . 'png');
        else if (str_contains($_SERVER['REQUEST_URI'], 'format'))
            /* Checking if the current request URI contains the string `.mp4`. */
            define('MIME', 'image' . CHAR_SLASH . 'png');
        else if (str_contains($_SERVER['REQUEST_URI'], '.mp4'))
            define('MIME', 'video' . CHAR_SLASH . 'mp4');
        /* Checking if the current request URI contains the string `.js.br`. */
        else if (str_contains($_SERVER['REQUEST_URI'], '.js.br'))
            /* Checking if the file extension of the requested file is in the array `$mimeTypes`. */
            define('MIME', 'br');
        /* Checking if the file extension of the requested file is in the array `$mimeTypes`. */
        else if (array_key_exists($_ext, $mimeTypes))
            define('MIME', $mimeTypes[$_ext]);
        else
            define('MIME', 'text' . CHAR_SLASH . 'html');

        /* Setting the content type of the response. */
        header('Content-Type: ' . MIME . ';charset=UTF-8');
    }
    /* Render Cache if Exits: Including the file `/tmp` + `base64_encode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])` + `.tmp`. */
    if (file_exists(PATH_TMP_FILE)) include PATH_TMP_FILE;
} catch (Exception $e) { /* Catching an exception and swallowing it. */
}


use cacheHelper;
use RuntimeException;
use yxorP\inc\parser\domain;
use yxorP\inc\parser\Rules;
use yxorP\inc\parser\RulesParser;

/* Importing the RuntimeException class from the PHP namespace. */

// For security reasons, Tracy is visible only on localhost.
// You may force Tracy to run in development mode by passing the Debugger::DEVELOPMENT instead of Debugger::DETECT.

/**
 * It's a proxy for the yxorp plugin
 */
class yP
{
    /* It's a singleton. */
    /**
     * @var yP|null
     */
    public static ?yP $yxorP = null;
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
        self::localise($request);

        /* It's checking if the request URI contains the cockpit directory, and if it does, it requires the cockpit index
        file. */
        foreach ([DIR_INC . DIR_ACTION => scandir(DIR_ROOT . DIR_INC . DIR_ACTION), DIR_PLUGIN => constants::get(YXORP_TARGET_PLUGINS) ?: []] as $key => $value) foreach ($value as $action) $this->subscribe($key, $action);
    }

    /**
     * @param array $req
     * @return void
     */
    public static function localise(array $req): void
    {
        /* Defining a constant called self::get(YXORP_SERVER) and setting it to the value of $req. */
        constants::set(VAR_SERVER, $req);

        // SITE DOMAIN

        /* Setting the `SITE_URL` variable to the value of the `SERVER_NAME` key in the `YXORP_SERVER` array. */

        define('YXORP_SITE_URL', parse_url(constants::get(VAR_SERVER)[YXORP_HTTP_HOST])['host']);
        /* Setting the `YXORP_TARGET_PLUGINS` variable to the result of the `YXORP_PLUGINS` method. */
        define('YXORP_REQUEST_URI', constants::get(VAR_SERVER)[REQUEST_URI]);
        echo constants::get(VAR_SERVER)[REQUEST_URI];

        // SITE DOMAIN DETAILS

        /* Setting the `SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        $siteDomain = self::publicSuffix(YXORP_SITE_URL ?: constants::get(ENV_DEFAULT_SITE));
        /* Setting the `YXORP_SITE_DOMAIN` variable to the result of the `extractDomain` method. */
        define('YXORP_SITE_DOMAIN', $siteDomain->registrableDomain()->toString() ?: $siteDomain->domain()->toString());

        // --

        /* Setting the `TARGET` variable to the result of the `findOne` method. */
        $siteDetails = constants::get(YXORP_DASHBOARD_APP)->storage->findOne(DASHBOARD_COLLECTIONS . CHAR_SLASH . DASHBOARD_SITES, [DASHBOARD_HOST => YXORP_SITE_DOMAIN]);

        // TARGET DOMAIN

        /* Setting the `YXORP_TARGET_PATTERN` variable to the result of the `VAR_PATTERN` method. */
        constants::set(VAR_TARGET_PATTERN, $siteDetails[VAR_PATTERN]);
        /* Setting the `YXORP_TARGET_REPLACE` variable to the result of the `VAR_REPLACE` method. */
        constants::set(VAR_TARGET_REPLACE, $siteDetails[VAR_REPLACE]);
        /* Setting the `YXORP_TARGET_PLUGINS` variable to the result of the `YXORP_PLUGINS` method. */
        constants::set(YXORP_TARGET_PLUGINS, $siteDetails[VAR_PLUGINS]);
        /* Setting the `TARGET_URL` variable to the value of the `target` key in the `TARGET` array. */
        define('YXORP_TARGET_URL', ($siteDetails)[DASHBOARD_TARGET]);

        // TARGET DOMAIN DETAILS

        /* Setting the `TARGET_URL_PARSE` variable to the value of the `target` key in the `TARGET` array. */
        $targetDomain = self::publicSuffix(YXORP_TARGET_URL ?: constants::get(ENV_DEFAULT_TARGET));
        /* Checking if the subdomain is set, if it is, it will use that, if not, it will use the domain. */

        // --

        /* Setting the `TARGET_DOMAIN` variable to the result of the `extractDomain` method. */
        define('YXORP_TARGET_DOMAIN', $targetDomain->registrableDomain()->toString() ?: $targetDomain->domain()->toString());
        /* Setting the `$subDomain` variable to the value of the `YXORP_SITE_SUB_DOMAIN` variable, if it is not null and '.' */
        define('YXORP_SITE_SUB_DOMAIN', ($siteDomain->subDomain()->toString()) ? $siteDomain->subDomain()->toString() . CHAR_PERIOD : null);

        // PROXY DETAILS

        /* Setting the `FETCH` variable to the value of the `SITE_SUB_DOMAIN` variable, if it is not null, and the
        `TARGET_DOMAIN` variable, with the `https://` protocol. */
        define('VAR_FETCH', VAR_HTTPS . YXORP_SITE_SUB_DOMAIN . YXORP_TARGET_DOMAIN);
        /* Setting the value of the constant YXORP_REQUEST_URI_FULL to the value of the constant YXORP_SITE_URL plus the
        value of the constant YXORP_REQUEST_URI. */
        define('YXORP_REQUEST_URI_FULL', YXORP_SITE_URL . YXORP_REQUEST_URI);
        /* Setting the `PROXY_URL` variable to the value of the `FETCH` variable, with the value of the `YXORP_REQUEST_URI`
        variable appended to it. */
        define('YXORP_PROXY_URL', VAR_FETCH . YXORP_REQUEST_URI);
        /* Setting the `DIR_FULL` variable to the value of the `DIR_ROOT . DIR_INC` constant, with the `override` string appended
        to it, with the `CHAR_SLASH` constant appended to it, with the value of the `files` key in the `TARGET`
        array appended to it. */
        define('YXORP_DIR_FULL', DIR_ROOT . DIR_INC . DIR_OVERRIDE . $siteDetails[VAR_FILES]);

        // GLOBAL COLLECTIONS

        /* Setting the `REPLACE` context variable to the value of the `replace` type in the `global` collection. */
        constants::set(YXORP_GLOBAL_REPLACE, constants::get(YXORP_DASHBOARD_APP)->storage->findOne(DASHBOARD_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_REPLACE]) ?
            (constants::get(YXORP_DASHBOARD_APP)->storage->findOne(DASHBOARD_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_REPLACE]))[VAR_VALUE] : null);
        /* Setting the `PATTERN` context variable to the value of the `pattern` type in the `global` collection. */
        constants::set(YXORP_GLOBAL_PATTERN, constants::get(YXORP_DASHBOARD_APP)->storage->findOne(DASHBOARD_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_PATTERN]) ?
            (constants::get(YXORP_DASHBOARD_APP)->storage->findOne(DASHBOARD_COLLECTIONS . CHAR_SLASH . VAR_GLOBAL, [VAR_TYPE => VAR_PATTERN]))[VAR_VALUE] : null);

        /* Setting the `YXORP_REWRITE` context variable to the value of `PATH_REWRITE` collection. */
        constants::set(YXORP_REWRITE, generalHelper::JSON(PATH_REWRITE));


    }

    /**
     * @param string $domain
     * @return mixed
     */
    public static function publicSuffix(string $domain): mixed
    {

        $publicSuffixList = Rules::fromPath(PATH_PUBLIC_SUFFIX_LIST);
        $domain = domain::fromIDNA2008($domain);


        return $publicSuffixList->resolve($domain);
        /*
        echo $result->domain()->toString();            //display 'www.pref.okinawa.jp';
        echo $result->subDomain()->toString();         //display 'www';
        echo $result->secondLevelDomain()->toString(); //display 'pref';
        echo $result->registrableDomain()->toString(); //display 'pref.okinawa.jp';
        echo $result->suffix()->toString();            //display 'okinawa.jp';
        $result->suffix()->isICANN();                  //return true;
        */
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
        /* It's checking if the length of the `$action` variable is less than 3, and if it is, it returns. */
        if (strlen($action) < 3) return;
        /* It's removing the `.php` extension from the `$action` variable. */
        $action = str_replace(EXT_PHP, CHAR_EMPTY_STRING, $action);
        /* It's checking if the file exists in the plugin directory, if it does, it requires it, if it doesn't, it checks
        if the class exists in the yxorP namespace, if it does, it creates an instance of it */
        require(DIR_ROOT . $dir . $action . EXT_PHP);
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
     * @param string $yxorp_root
     * @param array|null $request
     * @return void
     */
    public static function proxy(string $yxorp_root, array|null $request = null): void
    {
        require __DIR__ . '/constants.php';
        /* Loading the required files. */
        require __DIR__ . '/generalHelper.php';

        /* It's checking if the `tmp` directory exists, and if it doesn't, it creates it. */
        constants::create($yxorp_root);

        // REQUIRED

        /* Requiring the Cockpit library. */
        require PATH_DASHBOARD_BOOTSTRAP;
        /* Requiring the Wrapper. */
        require PATH_INC_WRAPPER;
        // ENV
        /* Reading the file and then calling the env function on each line. */
        foreach (file(DIR_ROOT . EXT_ENV) as $line) self::env($line);
        /* It's checking if the `http` and `minify` directories exist in the plugin directory, and if they don't, it
        creates them. */

        foreach (array(DIR_PSR, DIR_PROXY, DIR_SNAG, DIR_HTTP, DIR_MINIFY, DIR_PARSER) as $_asset) generalHelper::fileCheck(DIR_ROOT . DIR_INC . $_asset, true);        // Reporting

        /* Setting the token to the snag key. */
        constants::set(VAR_SNAG, snag\Client::make(ENV_BUG_SNAG_KEY));
        /* Setting the token PROXY to a new instance of the \yxorP\inc\proxy class. */

        constants::set(VAR_PROXY, new proxy\Client([VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));

        /* It's setting the `YXORP_DASHBOARD_APP` constant to the `cockpit()` function. */
        constants::set(YXORP_DASHBOARD_APP, yxorp());

        // EVENTS
        constants::set(YXORP_EVENT_LIST, [EVENT_BUILD_CACHE, EVENT_BUILD_CONTEXT, EVENT_BUILD_INCLUDES, EVENT_BUILD_HEADERS, EVENT_BUILD_REQUEST, EVENT_BEFORE_SEND, EVENT_SEND, EVENT_SENT, EVENT_WRITE, EVENT_COMPLETE, EVENT_FINAL]);

        constants::set(YXORP_MIME_TYPES, generalHelper::JSON(PATH_FILE_MIME_TYPES));

        /* It's looping through all the events in the `init()` function and dispatching them to the `yxorP()` function */
        foreach (self::init($yxorp_root) as $event) self::yxorP($request ?: $_SERVER)->dispatch($event);
    }

    /**
     * @param string $line
     * @return void
     */
    public static function env(string $line): void
    {
        /* Checking if the line starts with a hash. If it does, it returns. */
        if (trim((string)str_starts_with(trim($line), CHAR_HASH))) return;
        /* Exploding the $line variable into an array of two elements. */
        [$name, $value] = explode(CHAR_EQUALS, $line, NUM_ENV_LIMIT);
        /* Replacing all the new lines with null. */
        constants::set($name . EXT_ENV, str_replace("\r\n", CHAR_EMPTY_STRING, $value));
    }


    /* Setting the value of the variable $_name to the value of the variable $_value. */

    /**
     * It creates the plugin's directory if it doesn't exist, and installs the plugin if it's not already installed.
     * * @param string $yxorp_root
     * * @return array
     */
    private static function init(string $yxorp_root): array
    {
        /* It's creating the constants that are used in the plugin. */
        constants::create($yxorp_root);
        /* It's checking if the plugin directory exists, and if it doesn't, it creates it. */

        if (!is_dir(PATH_TMP_DIR)) {
            /* It's creating the `tmp` directory. */
            if (!mkdir($concurrentDirectory = PATH_TMP_DIR, 0777, true) && !is_dir($concurrentDirectory)) throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
            /* It's setting the permissions of the `tmp` directory to `777`. */
            chmod(PATH_TMP_DIR, 0777);
        }
        /* It's checking if there are any users in the `cockpit_accounts` collection, and if there aren't, it's calling the
        `install()` function. */
        if (!constants::get(YXORP_DASHBOARD_APP)->storage->getCollection(DASHBOARD_ACCOUNTS)->count()) self::install();
        /* It's returning the `YXORP_EVENT_LIST` constant. */
        return constants::get(YXORP_EVENT_LIST);
    }

    /**
     * It creates a new user with the credentials defined in the `.env` file
     */
    private static function install(): void
    {
        /* It's defining the `YXORP_DASHBOARD_INSTALL` constant as `true`. */
        define(YXORP_DASHBOARD_INSTALL, true);

        /* It's copying the files from the `local` directory to the `cockpit` directory. */
        self::migrate(PATH_DASHBOARD_LOCAL, PATH_DIR_DASHBOARD);

        /* It's creating an array of user data. */
        $_account = [VAR_USER => constants::get(ENV_ADMIN_USER), VAR_NAME => constants::get(ENV_ADMIN_NAME), VAR_EMAIL => constants::get(ENV_ADMIN_EMAIL), VAR_ACTIVE => true, VAR_GROUP => VAR_ADMIN, VAR_PASSWORD => constants::get(YXORP_DASHBOARD_APP)->hash(constants::get(ENV_ADMIN_PASSWORD)), VAR_I18N => constants::get(YXORP_DASHBOARD_APP)->helper(VAR_I18N)->locale, VAR_CREATED => time(), VAR_MODIFIED => time()];
        /* It's inserting a new user into the `cockpit_accounts` collection. */
        constants::get(YXORP_DASHBOARD_APP)->storage->insert(DASHBOARD_ACCOUNTS, $_account);
    }

    /**
     * "It's copying the files from the `local` directory to the `cockpit` directory."
     * @param string $src
     * @param string $dst
     * @return void
     */
    public static function migrate(string $src, string $dst): void
    {
        $dir = opendir($src);
        @mkdir($dst);
        foreach (scandir($src) as $file) if (($file !== CHAR_PERIOD) && ($file !== CHAR_PERIOD . CHAR_PERIOD)) if (is_dir($src . CHAR_SLASH . $file)) self::migrate($src . CHAR_SLASH . $file, $dst . CHAR_SLASH . $file); else  copy($src . CHAR_SLASH . $file, $dst . CHAR_SLASH . $file);
        closedir($dir);
    }

    /**
     * "If there are any listeners for the event, call them."
     *
     * The first thing the function does is check if there are any listeners for the event. If there are, it loops through
     * them and calls them
     *
     * @param string event_name The name of the event to dispatch.
     * @return void
     */
    private function dispatch(string $event_name): void
    {
        /* It's checking if there are any listeners for the event, and if there are, it's looping through them and calling
        them. */
        if (isset($this->listeners[$event_name])) foreach ((array)$this->listeners[$event_name] as $priority => $listeners) foreach ((array)$listeners as $listener) if (is_callable($listener)) $listener();
    }

    /**
     * > `yxorP` is a function that returns a `yxorP` object
     *
     * @param array|null $request
     * @return self The yxorP object.
     */
    public static function yxorP(array|null $request = null): self
    {
        /* It's checking if the `$yxorP` variable is set, and if it is, it returns it, if it isn't, it creates a new
        instance of the `yxorP` class and sets the `$yxorP` variable to it. */
        return (self::$yxorP) ?: self::$yxorP = new self($request ?: $_SERVER);
    }

    /**
     * > This function adds a listener to the listeners array
     *
     * @param string event The name of the event to listen for.
     * @param object callback The callback function to be executed when the event is triggered.
     * @return void The priority of the listener. Higher priority listeners are called before lower priority listeners.
     */
    final public function addListener(string $event, object $callback): void
    {/* It's adding a listener to the listeners array. */
        $this->listeners[$event][0][] = $callback;
    }
}