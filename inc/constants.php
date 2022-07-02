<?php

namespace yxorP\inc;

/* It defines constants and sets the value of the constants to the value of the arguments passed to the class.  Defining constants. Creating a class called constants. */

use Guzzle\Client;

class constants
{
    /* Defining constants.Creating a new directory.  */
    /**
     * @param $_dir
     * @return void
     */
    public static function create($_dir)
    {

        /* Defining a constant called `DIR_ROOT` and setting it to the value of `$_dir` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ROOT', $_dir . DIRECTORY_SEPARATOR);


        // SPECIAL
        /* Defining a constant called `CHAR_PERIOD` and setting it to the value of `.`. */
        define('CHAR_PERIOD', '.');
        /* Defining a constant called `CHAR_HASH` and setting it to the value of `#`. */
        define('CHAR_HASH', '#');
        /* Defining a constant called `CHAR_EQUALS` and setting it to the value of `=`. */
        define('CHAR_EQUALS', '=');
        /* Defining a constant called `CHAR_ASTRIX` and setting it to the value of `*`. */
        define('CHAR_ASTRIX', '*');
        define('EMPTY_STRING', '');

        // NUMBERS
        /* Defining a constant called `NUM_ENV_LIMIT` and setting it to the value of `2`. */
        define('NUM_ENV_LIMIT', 2);

        // DIRECTORIES
        /* Defining a constant called `DIR_ACTION` and setting it to the value of `action` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ACTION', 'action' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_PLUGIN` and setting it to the value of `override` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_PLUGIN', 'plugin' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_OVERRIDE` and setting it to the value of `override` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_OVERRIDE', 'override' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_GLOBAL` and setting it to the value of `global` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_GLOBAL', 'global' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_INCLUDES` and setting it to the value of `includes` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_INCLUDES', 'includes' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_COCKPIT` and setting it to the value of `cockpit` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_COCKPIT', 'cockpit' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_ACCOUNTS` and setting it to the value of `accounts` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ACCOUNTS', 'accounts' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_INC` and setting it to the value of `inc` with a `DIRECTORY_SEPARATOR` appended
        to it. */
        define('DIR_INC', 'inc' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_STORAGE` and setting it to the value of `storage` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_STORAGE', 'storage' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_TMP` and setting it to the value of `tmp` with a `DIRECTORY_SEPARATOR` appended
        to it. */
        define('DIR_TMP', 'tmp' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_HTTP` and setting it to the value of `http` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_HTTP', 'http' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_MINIFY` and setting it to the value of `minify` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_MINIFY', 'minify' . DIRECTORY_SEPARATOR);


        // EXTENSIONS
        /* Defining a constant called `EXT_CSV` and setting it to the value of `.csv`. */
        define('EXT_CSV', CHAR_PERIOD . 'csv');
        /* Defining a constant called `EXT_PHP` and setting it to the value of `.php`. */
        define('EXT_PHP', CHAR_PERIOD . 'php');
        /* Defining a constant called `EXT_TMP` and setting it to the value of `.tmp`. */
        define('EXT_TMP', CHAR_PERIOD . 'tmp');
        /* Defining a constant called `EXT_ENV` and setting it to the value of `.env`. */
        define('EXT_ENV', CHAR_PERIOD . 'env');
        /* Defining a constant. */
        define('EXT_PHAR', CHAR_PERIOD . 'phar');

        // EVENTS
        /* Defining a constant called `EVENT_BUILD_CACHED` and setting it to the value of `request.build_cached`. */
        define('EVENT_BUILD_CACHED', 'request . build_cached');
        /* Defining a constant called `EVENT_BUILD_CONTEXT` and setting it to the value of `request.build_context`. */
        define('EVENT_BUILD_CONTEXT', 'request . build_context');
        /* Defining a constant called `EVENT_BUILD_INCLUDES` and setting it to the value of `request.build_includes`. */
        define('EVENT_BUILD_INCLUDES', 'request . build_includes');
        /* Defining a constant called `EVENT_BUILD_HEADERS` and setting it to the value of `request.build_headers`. */
        define('EVENT_BUILD_HEADERS', 'request . build_headers');
        /* Defining a constant called `EVENT_BUILD_REQUEST` and setting it to the value of `request.build_request`. */
        define('EVENT_BUILD_REQUEST', 'request . build_request');
        /* Defining a constant called `EVENT_BEFORE_SEND` and setting it to the value of `request.before_send`. */
        define('EVENT_BEFORE_SEND', 'request . before_send');
        /* Defining a constant called `EVENT_SEND` and setting it to the value of `request.send`. */
        define('EVENT_SEND', 'request . send');
        /* Defining a constant called `EVENT_SENT` and setting it to the value of `request.sent`. */
        define('EVENT_SENT', 'request . sent');
        /* Defining a constant called `EVENT_COMPLETE` and setting it to the value of `request.complete`. */
        define('EVENT_COMPLETE', 'request . complete');
        /* Defining a constant called `EVENT_FINAL` and setting it to the value of `request.final`. */
        define('EVENT_FINAL', 'request .final');
        /* Defining a constant called `EVENT_EXCEPTION` and setting it to the value of `request.build_exception`. */
        define('EVENT_EXCEPTION', 'request . build_exception');
        /* Defining a constant called `EVENT_WRITE` and setting it to the value of `curl.callback.write`. */
        define('EVENT_WRITE', 'curl . callback . write');


        // FILES
        /* Defining a constant called `FILE_REWRITE_SEARCH` and setting it to the value of `REWRITE_REPLACE`. */
        define('FILE_REWRITE_SEARCH', 'REWRITE_REPLACE');
        /* Defining a constant called `FILE_REWRITE_REPLACE` and setting it to the value of `REWRITE_SEARCH`. */
        define('FILE_REWRITE_REPLACE', 'REWRITE_SEARCH');
        /* Defining a constant called `FILE_INDEX` and setting it to the value of `index`. */
        define('FILE_INDEX', 'index');
        /* Defining a constant called FILE_BUGSNAG and setting it to the string 'bugsnag'. */
        define('FILE_BUGSNAG', 'bugsnag');
        /* Defining a constant called FILE_GUZZLE and setting it to the string 'guzzle'. */
        define('FILE_GUZZLE', 'guzzle');
        /* Defining a constant called FILE_BOOTSTRAP and setting it to the string 'bootstrap'. */
        define('FILE_BOOTSTRAP', 'bootstrap');
        /* Defining a constant. */
        define('FILE_ACTION_WRAPPER', 'wrapper');


        // PATHS
        /* Defining a constant called `PATH_DIR_TMP` and setting it to the value of `DIR_ROOT` with a `DIR_TMP` appended
        to it. */
        define('PATH_DIR_TMP', DIR_ROOT . DIR_TMP);
        /* Defining a constant called `PATH_DIR_COCKPIT` and setting it to the value of `DIR_ROOT` with a `DIR_COCKPIT`
        and `DIR_STORAGE` appended to it. */
        define('PATH_DIR_COCKPIT', DIR_ROOT . DIR_COCKPIT . DIR_STORAGE);
        /* Defining a constant called `PATH_COCKPIT_LOCAL` and setting it to the value of `DIR_ROOT` with a `DIR_INC` and
        `DIR_STORAGE` appended to it. */
        define('PATH_COCKPIT_LOCAL', DIR_ROOT . DIR_INC . DIR_STORAGE);
        /* Defining a constant called `PATH_COCKPIT_INDEX` and setting it to the value of `DIR_ROOT` with a `DIR_COCKPIT`
        and `FILE_INDEX` and `EXT_PHP` appended to it. */
        define('PATH_COCKPIT_INDEX', DIR_ROOT . DIR_COCKPIT . FILE_INDEX . EXT_PHP);
        /* Defining a constant called `PATH_COCKPIT_INDEX` and setting it to the value of `DIR_ROOT` with a `DIR_COCKPIT`
        and `FILE_INDEX` and `EXT_PHP` appended to it. */
        /* Defining a constant called `PATH_REWRITE_SEARCH` and setting it to the value of `DIR_ROOT` with a
        `DIR_OVERRIDE` and `DIR_GLOBAL` and `DIR_INCLUDES` and `FILE_REWRITE_SEARCH` and `EXT_CSV` appended to it. */
        define('PATH_REWRITE_SEARCH', DIR_ROOT . DIR_OVERRIDE . DIR_GLOBAL . DIR_INCLUDES . FILE_REWRITE_SEARCH . EXT_CSV);
        /* Defining a constant called `PATH_REWRITE_REPLACE` and setting it to the value of `DIR_ROOT` with a
        `DIR_OVERRIDE` and `DIR_GLOBAL` and `DIR_INCLUDES` and `FILE_REWRITE_REPLACE` and `EXT_CSV` appended to it. */
        define('PATH_REWRITE_REPLACE', DIR_ROOT . DIR_OVERRIDE . DIR_GLOBAL . DIRECTORY_SEPARATOR . DIR_INCLUDES . FILE_REWRITE_REPLACE . EXT_CSV);
        /* Defining the path to the bugsnag.phar file. */
        define('PATH_BUGSNAG_PHAR', DIR_ROOT . DIR_INC . FILE_BUGSNAG . EXT_PHAR);
        /* Defining the path to the guzzle phar file. */
        define('PATH_GUZZLE_PHAR', DIR_ROOT . DIR_INC . FILE_GUZZLE . EXT_PHAR);
        /* Defining the path to the action wrapper file. */
        define('PATH_ACTION_WRAPPER', DIR_ROOT . DIR_INC . FILE_ACTION_WRAPPER . EXT_PHP);
        /* Defining the path to the cockpit bootstrap file. */
        define('PATH_COCKPIT_BOOTSTRAP', DIR_ROOT . DIR_COCKPIT . FILE_BOOTSTRAP . EXT_PHP);


        //METHODS
        /* Defining a constant called `SUBSCRIBE_METHOD` and setting it to the value of `subscribe`. */
        define('SUBSCRIBE_METHOD', 'subscribe');


        //VARIBLES
        /* Defining a constant called `VAR_USER` and setting it to the value of `user`. */
        define('VAR_USER', 'user');
        /* Defining a constant called `VAR_NAME` and setting it to the value of `name`. */
        define('VAR_NAME', 'name');
        /* Defining a constant called `VAR_EMAIL` and setting it to the value of `email`. */
        define('VAR_EMAIL', 'email');
        /* Defining a constant called `VAR_PASSWORD` and setting it to the value of `password`. */
        define('VAR_PASSWORD', 'password');
        /* Defining a constant called `VAR_GROUP` and setting it to the value of `group`. */
        define('VAR_GROUP', 'group');
        /* Defining a constant called `VAR_ACTIVE` and setting it to the value of `active`. */
        define('VAR_ACTIVE', 'active');
        /* Defining a constant called `VAR_ADMIN` and setting it to the value of `admin`. */
        define('VAR_ADMIN', 'admin');
        /* Defining a constant called `VAR_I18N` and setting it to the value of `i18n`. */
        define('VAR_I18N', 'i18n');
        /* Defining a constant called `VAR_CREATED` and setting it to the value of `_created`. */
        define('VAR_CREATED', '_created');
        /* Defining a constant called `VAR_MODIFIED` and setting it to the value of `_modified`. */
        define('VAR_MODIFIED', '_modified');
        /* Defining a constant. */
        define('VAR_USER_IP', 'user_ip');
        /* Defining a constant. */
        define('VAR_USER_IP_LONG', 'user_ip_long');
        /* Defining a constant. */
        define('VAR_URL', 'url');
        /* Defining a constant. */
        define('VAR_URL_HOST', 'url_host');

        // YXORPS
        /* Defining a constant called `YXORP_SERVER` and setting it to the value of `SERVER`. */
        define('YXORP_SERVER', 'SERVER');
        /* Defining a constant called `YXORP_REQUEST_URI` and setting it to the value of `REQUEST_URI`. */
        define('YXORP_REQUEST_URI', 'REQUEST_URI');
        /* Defining a constant called YXORP_HTTP_HOST and setting it equal to the string 'HTTP_HOST'. */
        define('YXORP_HTTP_HOST', 'HTTP_HOST');
        /* Defining a constant. */
        define('YXORP_REWRITE_SEARCH', 'INC_REWRITE_SEARCH');
        /* Defining a constant. */
        define('YXORP_REWRITE_REPLACE', 'INC_REWRITE_REPLACE');
        /* Defining a constant. */
        define('YXORP_COCKPIT_INSTALL', 'COCKPIT_INSTALL');
        /* Defining a constant called YXORP_BUGSNAG and setting it to the string BUGSNAG. */
        define('YXORP_BUGSNAG', 'BUGSNAG');
        /* Defining a constant called YXORP_GUZZLE and setting it to the string 'GUZZLE'. */
        define('YXORP_GUZZLE', 'GUZZLE');
        /* Defining a constant called YXORP_RESPONSE and setting it to the string YXORP_RESPONSE. */
        define('YXORP_RESPONSE', 'RESPONSE');
        /* Defining a constant called YXORP_REQUEST and setting it to the string YXORP_REQUEST. */
        define('YXORP_REQUEST', 'REQUEST');
        /* Defining a constant called YXORP_COCKPIT_APP and setting it to the string COCKPIT_APP. */
        define('YXORP_COCKPIT_APP', 'COCKPIT_APP');
        /* Defining a constant called YXORP_COCKPIT_ACCOUNTS and setting it to the string accounts. */
        define('YXORP_COCKPIT_ACCOUNTS', 'accounts');
        /* Defining a constant called YXORP_PLUGINS and setting it to the string plugins. */
        define('YXORP_PLUGINS', 'plugins');
        /* Defining a constant called YXORP_TARGET and setting it to the string TARGET. */
        define('YXORP_TARGET', 'TARGET');
        /* Defining a constant called YXORP_TARGET and setting it to the string TARGET. */
        define('YXORP_TARGET', 'TARGET');


        //ENV
        /* Defining a constant called ENV_ADMIN_USER and setting it to the value of ADMIN_USER. */
        define('ENV_ADMIN_USER', 'ADMIN_USER' . EXT_ENV);
        /* Defining a constant called ENV_ADMIN_NAME and setting it equal to the string "ADMIN_NAME". */
        define('ENV_ADMIN_NAME', 'ADMIN_NAME' . EXT_ENV);
        /* Defining a constant called ENV_ADMIN_EMAIL and setting it equal to the string 'ADMIN_EMAIL'. */
        define('ENV_ADMIN_EMAIL', 'ADMIN_EMAIL' . EXT_ENV);
        /* Defining a constant called ENV_ADMIN_PASSWORD and setting it equal to the string 'ADMIN_PASSWORD'. */
        define('ENV_ADMIN_PASSWORD', 'ADMIN_PASSWORD' . EXT_ENV);
        /* Defining a constant called ENV_GA_UTM and setting it equal to the string 'GA_UTM'. */
        define('ENV_GA_UTM', 'GA_UTM' . EXT_ENV);
        /* Defining a constant called ENV_BUG_SNAG_KEY and setting it equal to the string 'BUG_SNAG_KEY'. */
        define('ENV_BUG_SNAG_KEY', 'BUG_SNAG_KEY' . EXT_ENV);
        /* Defining a constant called ENV_DEBUG and setting it to the value of 'DEBUG' . EXT_ENV. */
        define('ENV_DEBUG', 'DEBUG' . EXT_ENV);

        // COCKPIT
        /* Defining a constant. */
        define('COCKPIT_ACCOUNTS', DIR_COCKPIT . YXORP_COCKPIT_ACCOUNTS);

        //EXCEPTIONS
        /* Defining a constant called RUNTIME_EXCEPTION. */
        define('RUNTIME_EXCEPTION', 'Directory "%s" was not created');
        define('ACCESS_DENIED_EXCEPTION', 'Error: Access denied!');

        // REQUIRED
        /* Loading the Bugsnag PHP library. */
        require PATH_BUGSNAG_PHAR;
        /* Requiring the Guzzle library. */
        require PATH_GUZZLE_PHAR;
        /* Requiring the Cockpit library. */
        require PATH_COCKPIT_BOOTSTRAP;

        // ENV
        /* Reading the file and then calling the env function on each line. */
        foreach (file(DIR_ROOT . EXT_ENV) as $line) self::env($line);

        // Reporting
        /* Setting the token to the bugsnag key. */
        self::set(YXORP_BUGSNAG, \Bugsnag\Client::make(ENV_BUG_SNAG_KEY));
        /* Setting the token GUZZLE to a new instance of the GuzzleHttp\Client class. */
        self::set(YXORP_GUZZLE, new \GuzzleHttp\Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]));
        /* It's setting the `YXORP_COCKPIT_APP` constant to the `cockpit()` function. */
        constants::set(YXORP_COCKPIT_APP, cockpit());

        // CACHE
        /* Defining a constant called CACHE_EXPIRATION. The value of the constant is the current time plus the number of
        seconds in a year. */
        define('CACHE_EXPIRATION', @time() + (60 * 60 * 24 * 31 * 365));


    }
    /* A function that is being called to fetch .env values. */
    /**
     * @param $line
     * @return void
     */
    public static function env($line)
    {
        /* Checking if the line starts with a hash. If it does, it returns. */
        if (trim((string)str_starts_with(trim($line), CHAR_HASH))) return;
        /* Exploding the $line variable into an array of two elements. */
        [$name, $value] = explode(CHAR_EQUALS, $line, NUM_ENV_LIMIT);
        /* Replacing all the new lines with null. */
        self::set($name . EXT_ENV, str_replace("\r\n", EMPTY_STRING, $value));
    }

    /* Setting the value of the variable $_name to the value of the variable $_value. */
    /**
     * @param $_name
     * @param $_value
     * @return mixed
     */
    public static function set($_name, $_value): mixed
    {
        /* Checking if the argument already exists in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return (array_key_exists($_name, $GLOBALS)) ? throw new RuntimeException('Argument already exists and cannot be redefined!') : $GLOBALS[$_name] = $_value;
    }

    /* A function that is being called to localise constants. */
    /**
     * @param $_req
     * @return void
     */
    public static function localise($_req)
    {
        /* Defining a constant called self::get(YXORP_SERVER) and setting it to the value of $_req. */
        self::set(YXORP_SERVER, $_req);
        /* Creating a unique key for the cache file. */
        define('CACHE_KEY', base64_encode($_req[YXORP_HTTP_HOST] . $_req[YXORP_REQUEST_URI]) . EXT_TMP);

    }

    /* A static method that returns the value of the $_name variable. */
    /**
     * @param $_name
     * @return mixed
     */
    public static function get($_name): mixed
    {
        /* Checking if the key exists in the global array. If it does, it returns the value of the key. If it doesn't, it
        returns false. */
        return (array_key_exists($_name, $GLOBALS)) ? $GLOBALS[$_name] : false;
    }

}