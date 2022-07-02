<?php

namespace yxorP\inc;

/* It defines constants and sets the value of the constants to the value of the arguments passed to the class.  Defining constants. Creating a class called constants. */

use Guzzle\Client;
use const;

class constants
{
    /* Defining constants.Creating a new directory.  */
    /**
     * @param $_dir
     * @return void
     */
    public static function create($_dir)
    {

        /* Defining a constant called `DIR_ROOT` and setting it to the value of `$_dir` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_ROOT', $_dir . CHAR_SLASH);


        // SPECIAL
        /* Defining a constant called `CHAR_PERIOD` and setting it to the value of `.`. */
        define('CHAR_PERIOD', '.');
        /* Defining a constant called `CHAR_HASH` and setting it to the value of `#`. */
        define('CHAR_HASH', '#');
        /* Defining a constant called `CHAR_EQUALS` and setting it to the value of `=`. */
        define('CHAR_EQUALS', '=');
        /* Defining a constant called `CHAR_ASTRIX` and setting it to the value of `*`. */
        define('CHAR_ASTRIX', '*');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('CHAR_EMPTY_STRING', '');
        /* Defining a constant called `CHAR_DASH` and setting it to the value of `-`. */
        define('CHAR_DASH', '-');
        /* Defining a constant called `CHAR_UNDER` and setting it to the value of `_`. */
        define('CHAR_UNDER', '_');
        /* Defining a constant called `CHAR_PLUS` and setting it to the value of `+`. */
        define('CHAR_PLUS', '+');
        /* Defining a constant called `CHAR_SLASH` and setting it to the value of `/`. */
        define('CHAR_SLASH', '/');
        /* Defining a constant called `CHAR_SLASH_BACK` and setting it to the value of `\`. */
        define('CHAR_SLASH_BACK', '\\');
        /* Defining a constant called `CHAR_QUESTION` and setting it to the value of `?`. */
        define('CHAR_QUESTION', '?');


        // NUMBERS
        /* Defining a constant called `NUM_ENV_LIMIT` and setting it to the value of `2`. */
        define('NUM_ENV_LIMIT', 2);

        // DIRECTORIES
        /* Defining a constant called `DIR_ACTION` and setting it to the value of `action` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_ACTION', 'action' . CHAR_SLASH);
        /* Defining a constant called `DIR_PLUGIN` and setting it to the value of `plugin` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_PLUGIN', 'plugin' . CHAR_SLASH);
        /* Defining a constant called `DIR_OVERRIDE` and setting it to the value of `override` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_OVERRIDE', 'override' . CHAR_SLASH);
        /* Defining a constant called `DIR_GLOBAL` and setting it to the value of `global` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_GLOBAL', 'global' . CHAR_SLASH);
        /* Defining a constant called `DIR_INCLUDES` and setting it to the value of `includes` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_INCLUDES', 'includes' . CHAR_SLASH);
        /* Defining a constant called `DIR_COCKPIT` and setting it to the value of `cockpit` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_COCKPIT', 'cockpit' . CHAR_SLASH);
        /* Defining a constant called `DIR_ACCOUNTS` and setting it to the value of `accounts` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_ACCOUNTS', 'accounts' . CHAR_SLASH);
        /* Defining a constant called `DIR_INC` and setting it to the value of `inc` with a `CHAR_SLASH` appended
        to it. */
        define('DIR_INC', 'inc' . CHAR_SLASH);
        /* Defining a constant called `DIR_STORAGE` and setting it to the value of `storage` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_STORAGE', 'storage' . CHAR_SLASH);
        /* Defining a constant called `DIR_TMP` and setting it to the value of `tmp` with a `CHAR_SLASH` appended
        to it. */
        define('DIR_TMP', 'tmp' . CHAR_SLASH);
        /* Defining a constant called `DIR_HTTP` and setting it to the value of `http` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_HTTP', 'http' . CHAR_SLASH);
        /* Defining a constant called `DIR_MINIFY` and setting it to the value of `minify` with a `CHAR_SLASH`
        appended to it. */
        define('DIR_MINIFY', 'minify' . CHAR_SLASH);


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
        define('PATH_REWRITE_REPLACE', DIR_ROOT . DIR_OVERRIDE . DIR_GLOBAL . CHAR_SLASH . DIR_INCLUDES . FILE_REWRITE_REPLACE . EXT_CSV);
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
        /* Defining a constant called `VAR_USER_IP` and setting it to the value of `user_ip`. */
        define('VAR_USER_IP', 'user_ip');
        /* Defining a constant called `VAR_USER_IP_LONG` and setting it to the value of `user_ip_long`. */
        define('VAR_USER_IP_LONG', 'user_ip_long');
        /* Defining a constant called `VAR_URL` and setting it to the value of `url`. */
        define('VAR_URL', 'url');
        /* Defining a constant called `VAR_URL_HOST` and setting it to the value of `url_host`. */
        define('VAR_URL_HOST', 'url_host');
        /* Defining a constant called `VAR_HTTPS` and setting it to the value of `https`. */
        define('VAR_HTTPS', 'https:');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of CHAR_PLUS . CHAR_SLASH. */
        define('VAR_PLUS_SLASH', CHAR_PLUS . CHAR_SLASH);
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_DASH_LOWER', CHAR_DASH . CHAR_UNDER);
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_ALLOW_REDIRECTS', 'allow_redirects');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_HTTP_ERRORS', 'http_errors');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_DECODE_CONTENT', 'decode_content');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_VERIFY', 'verify');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_COOKIES', 'cookies');
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_IDN_CONVERSION', 'idn_conversion');
        'user-ip'
        'ucfirst'
        "getUrl"
        'tmp_name'
        'error'
        'type'
        'content-length'
        'content-type'
        'application/x-www-form-urlencoded'
        '?'

        'https'
        'http'

        // YXORPS
        /* Defining a constant called `YXORP_SERVER` and setting it to the value of `SERVER`. */
        define('YXORP_SERVER', 'SERVER');
        /* Defining a constant called YXORP_BUGSNAG and setting it to the string BUGSNAG. */
        define('YXORP_BUGSNAG', 'BUGSNAG');
        /* Defining a constant called YXORP_GUZZLE and setting it to the string 'GUZZLE'. */
        define('YXORP_GUZZLE', 'GUZZLE');
        /* Defining a constant called YXORP_RESPONSE and setting it to the string YXORP_RESPONSE. */
        define('YXORP_RESPONSE', 'RESPONSE');
        /* Defining a constant called YXORP_REQUEST and setting it to the string YXORP_REQUEST. */
        define('YXORP_REQUEST', 'REQUEST');
        /* Defining a constant called YXORP_COCKPIT_ACCOUNTS and setting it to the string accounts. */
        define('YXORP_COCKPIT_ACCOUNTS', 'accounts');
        /* Defining a constant called YXORP_PLUGINS and setting it to the string plugins. */
        define('YXORP_PLUGINS', 'plugins');
        /* Defining a constant called YXORP_TARGET and setting it to the string TARGET. */
        define('YXORP_TARGET', 'TARGET');
        /* Defining a constant called YXORP_SITE and setting it to the string SITE. */
        define('YXORP_SITE', 'SITE');
        /* Defining a constant called YXORP_HOST and setting it to the string HOST. */
        define('YXORP_HOST', 'HOST');
        /* Defining a constant called URI and setting it to the string URI. */
        define('YXORP_URI', 'URI');

        /* Defining a constant. */
        define('YXORP_REWRITE_SEARCH', 'INC_REWRITE_SEARCH');
        /* Defining a constant. */
        define('YXORP_REWRITE_REPLACE', 'INC_REWRITE_REPLACE');
        /* Defining a constant. */
        define('YXORP_COCKPIT_INSTALL', 'COCKPIT_INSTALL');
        /* Defining a constant called `YXORP_REQUEST_URI` and setting it to the value of `REQUEST_URI`. */
        define('YXORP_REQUEST_URI', YXORP_REQUEST . YXORP_URI);
        /* Defining a constant called YXORP_HTTP_HOST and setting it equal to the string 'HTTP_HOST'. */
        define('YXORP_HTTP_HOST', 'HTTP_HOST');
        /* Defining a constant called YXORP_COCKPIT_APP and setting it to the string COCKPIT_APP. */
        define('YXORP_COCKPIT_APP', 'COCKPIT_APP');
        /* Defining a constant called YXORP_PROXY_URL and setting it to the string PROXY_URL. */
        define('YXORP_PROXY_URL', 'PROXY_URL');
        /* Defining a constant called YXORP_SERVER_NAME and setting it to the string SERVER_NAME. */
        define('YXORP_SERVER_NAME', 'SERVER_NAME');
        /* Defining a constant called YXORP_SITE_URL and setting it to the string SITE_URL. */
        define('YXORP_SITE_URL', 'SITE_URL');
        /* Defining a constant called YXORP_SITE_DOMAIN and setting it to the string SITE_DOMAIN. */
        define('YXORP_SITE_DOMAIN', 'SITE_DOMAIN');
        /* Defining a constant called YXORP_SITE_SUB_DOMAIN and setting it to the string SITE_SUB_DOMAIN. */
        define('YXORP_SITE_SUB_DOMAIN', 'SITE_SUB_DOMAIN');
        /* Defining a constant called YXORP_TARGET_URL and setting it to the string TARGET_URL. */
        define('YXORP_TARGET_URL', 'TARGET_URL');
        /* Defining a constant called YXORP_TARGET_SUB_DOMAIN and setting it to the string TARGET_SUB_DOMAIN. */
        define('YXORP_TARGET_SUB_DOMAIN', 'TARGET_SUB_DOMAIN');
        /* Defining a constant called YXORP_TARGET_DOMAIN and setting it to the string TARGET_DOMAIN. */
        define('YXORP_TARGET_DOMAIN', 'TARGET_DOMAIN');
        /* Defining a constant called YXORP_FETCH and setting it to the string FETCH. */
        define('YXORP_FETCH', 'FETCH');
        /* Defining a constant called YXORP_DIR_FULL and setting it to the string DIR_FULL. */
        define('YXORP_DIR_FULL', 'DIR_FULL');
        /* Defining a constant called YXORP_FILES and setting it to the string files. */
        define('YXORP_FILES', 'files');
        /* Defining a constant called YXORP_SITE_HOST and setting it to the string SITE_HOST. */
        define('YXORP_SITE_HOST', 'SITE_HOST');
        /* Defining a constant called YXORP_PHP and setting it to the string PHP. */
        define('YXORP_PHP', 'PHP');
        /* Defining a constant called YXORP_SELF and setting it to the string SELF. */
        define('YXORP_SELF', 'SELF');
        /* Defining a constant called YXORP_PHP_SELF and setting it to the string PHP_SELF. */
        define('YXORP_PHP_SELF', YXORP_PHP . CHAR_UNDER . YXORP_SELF);

        /* Defining a constant called YXORP_HTTPS and setting it to the string HTTPS. */
        define('YXORP_HTTPS', 'HTTPS');
        /* Defining a constant called YXORP_HTTP and setting it to the string HTTP. */
        define('YXORP_HTTP', 'HTTP');
        /* Defining a constant called YXORP_REQUEST_METHOD and setting it to the string REQUEST_METHOD. */
        define('YXORP_REQUEST_METHOD', 'REQUEST_METHOD');
        /* Defining a constant called YXORP_HTTP_ and setting it to the string HTTP_. */
        define('YXORP_HTTP_', YXORP_HTTPS . CHAR_UNDER);
        /* Defining a constant called YXORP_REMOTE_ADDR and setting it to the string REMOTE_ADDR. */
        define('YXORP_REMOTE_ADDR', 'REMOTE_ADDR');
        
        
        //REGEX
        /* Defining a constant called ENV_ADMIN_USER and setting it to the value of ADMIN_USER. */
        define('REG_ONE', CHAR_SLASH . CHAR_SLASH_BACK . CHAR_QUESTION . CHAR_PERIOD . CHAR_ASTRIX . CHAR_SLASH);
        define('REG_TWO', CHAR_HASH . CHAR_PERIOD . CHAR_ASTRIX . CHAR_SLASH);
        
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
        define('COCKPIT_COLLECTIONS', 'collections');
        define('COCKPIT_SITES', 'sites');
        define('COCKPIT_HOST', 'host');

        //EXCEPTIONS
        /* Defining a constant called RUNTIME_EXCEPTION. */
        define('RUNTIME_EXCEPTION', 'Directory "%s" was not created');
        define('ACCESS_DENIED_EXCEPTION', 'Error: Access denied!');
        define('ACCESS_ALREADY_DEFINED', 'Argument already exists and cannot be redefined!');

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
        self::set(YXORP_GUZZLE, new \GuzzleHttp\Client([VAR_ALLOW_REDIRECTS => true, VAR_HTTP_ERRORS => true, VAR_DECODE_CONTENT => true, VAR_VERIFY => false, VAR_COOKIES => true, VAR_IDN_CONVERSION => true]));
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
        self::set($name . EXT_ENV, str_replace("\r\n", CHAR_EMPTY_STRING, $value));
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
        return (array_key_exists($_name, $GLOBALS)) ? throw new RuntimeException(ACCESS_ALREADY_DEFINED) : $GLOBALS[$_name] = $_value;
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
        define('CACHE_KEY', generalHelper::base64_url_encode($_req[YXORP_HTTP_HOST] . $_req[YXORP_REQUEST_URI]) . EXT_TMP);

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