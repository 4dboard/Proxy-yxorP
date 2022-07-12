<?php

namespace yxorP\inc;

/* It defines constants and sets the value of the constants to the value of the arguments passed to the class.  Defining constants. Creating a class called constants. */

/* Defining a constant named `CHAR_SLASH` with the value `/`. */

use Memcache;
use RuntimeException;

define('CHAR_SLASH', '/');
/* Defining a constant. */
define('CHAR_PERIOD', '.');
/* Defining a constant. */
/* Defining a constant. */
define('FILE_TMP', 'tmp');
define('VAR_COCKPIT', 'cockpit');
/* Defining a constant called PATH_DIR_TMP. The value of the constant is the current directory (__DIR__) plus the
directory separator (CHAR_SLASH) plus the value of the DIR_TMP constant. */
define('DIR_TMP', FILE_TMP . CHAR_SLASH);
/* Creating a unique key for the cache file. */
define('CACHE_KEY', rtrim(strtr(base64_encode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']), '+/=', '._-')));
/* Defining a constant called PATH_DIR_TMP. The value of the constant is the current directory (__DIR__) plus the
directory separator (CHAR_SLASH) plus the value of the constant DIR_TMP. */
define('PATH_DIR_TMP', __DIR__ . DIRECTORY_SEPARATOR . DIR_TMP);
/* Defining a constant called PATH_DIR_TMP_FULL. The value of the constant is the current directory, a directory
separator, the value of the constant DIR_TMP, the value of the constant CACHE_KEY, and the value of the constant
FILE_TMP. */
define('PATH_DIR_TMP_FULL', __DIR__ . DIRECTORY_SEPARATOR . DIR_TMP . CACHE_KEY . CHAR_PERIOD . FILE_TMP);
/* Checking if the request URI contains the string "cockpit" and if it does, it will call the cockpit() method. */
if (isset($_GET["CLECHE"])) constants::flush();
/*  Try catch */
try {
    constants::mimeType();
} catch (Exception $e) { /*swollow*/
}


class constants
{
    /* Defining constants.Creating a new directory.  */
    /**
     * @param string $yxorp_root
     * @return void
     */

    /* Checking if the requested URI contains the string `$t`. */
    /* A function that checks if the current request URI contains the given string. */
    public static function mimeType(): void
    {

        /* Reading the mime types from the file `./data/mime.types` and storing it in the array `$mimeTypes`. */
        $mimeTypes = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'mime' . CHAR_PERIOD . 'json'), true);
        /* Getting the file extension of the requested file. */
        $_ext = pathinfo(strtok($_SERVER['REQUEST_URI'], ' ? '), PATHINFO_EXTENSION);

        /* Setting the content type of the response. */
        if (self::checkUri('bundle.js')) define('MIME', 'application' . CHAR_SLASH . 'wasm');
        /* Checking if the current request URI contains the string `sitemap`. */
        else if (self::checkUri('sitemap'))
            /* Checking if the current request URI contains the string `crop`. */
            define('MIME', 'application' . CHAR_SLASH . 'xml');
        else if (self::checkUri('crop'))
            /* Setting the content type of the response to `image/png`. */
            define('MIME', 'image' . CHAR_SLASH . 'png');
        else if (self::checkUri('format'))
            /* Checking if the current request URI contains the string `.mp4`. */
            define('MIME', 'image' . CHAR_SLASH . 'png');
        else if (self::checkUri('.mp4'))
            define('MIME', 'video' . CHAR_SLASH . 'mp4');
        /* Checking if the current request URI contains the string `.js.br`. */
        else if (self::checkUri('.js.br'))
            /* Checking if the file extension of the requested file is in the array `$mimeTypes`. */
            define('MIME', 'br');
        /* Checking if the file extension of the requested file is in the array `$mimeTypes`. */
        else if (array_key_exists($_ext, $mimeTypes))
            define('MIME', $mimeTypes[$_ext]);
        else
            define('MIME', 'text' . CHAR_SLASH . 'html');

        /* Setting the content type of the response. */
        header('Content-Type: ' . MIME . ';charset=UTF-8');

        /* Including the file `../tmp` + `base64_encode($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])` + `.tmp`. */
        include PATH_DIR_TMP_FULL;
    }


    public static function checkUri($t)
    {
        /* Checking if the current request URI contains the given string. */
        return str_contains($_SERVER['REQUEST_URI'], $t);
    }

    /**
     * @param string $yxorp_root
     * @return void
     */
    public static function create(string $yxorp_root)
    {
        if (in_array(CHAR_PERIOD, $GLOBALS)) return;
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
        /* Defining a constant called `CHAR_SLASH_BACK` and setting it to the value of `\`. */
        define('CHAR_SLASH_BACK', '\\');
        /* Defining a constant called `CHAR_QUESTION` and setting it to the value of `?`. */
        define('CHAR_QUESTION', '?');
        /* Defining a constant called `CHAR_AT` and setting it to the value of `@`. */
        define('CHAR_AT', '@');
        /* Defining a constant called `CHAR_CURVE` and setting it to the value of `{?}`. */
        define('CHAR_CURVE', '{');
        /* Defining a constant called `CHAR_CURVE_CLOSE` and setting it to the value of `\}`. */
        define('CHAR_CURVE_CLOSE', '}');
        /* Defining a constant called `CHAR_BRACKET` and setting it to the value of `\(`. */
        define('CHAR_BRACKET', '(');
        /* Defining a constant called `CHAR_BRACKET_CLOSE` and setting it to the value of `\)`. */
        define('CHAR_BRACKET_CLOSE', ')');
        /* Defining a constant called `CHAR_S` and setting it to the value of `s`. */
        define('CHAR_S', 's');
        /* Defining a constant called `CHAR_SQUARE` and setting it to the value of `[?]`. */
        define('CHAR_SQUARE', '[');
        /* Defining a constant called `CHAR_SQUARE_CLOSE` and setting it to the value of `\]`. */
        define('CHAR_SQUARE_CLOSE', ']');
        /* Defining a constant called `CHAR_A` and setting it to the value of `A`. */
        define('CHAR_A', 'a');
        /* Defining a constant called `CHAR_Z` and setting it to the value of `z`. */
        define('CHAR_Z', 'z');
        /* Defining a constant called `CHAR_0` and setting it to the value of `0`. */
        define('CHAR_0', '0');
        /* Defining a constant called `CHAR_9` and setting it to the value of `9`. */
        define('CHAR_9', '9');
        /* Defining a constant called `CHAR_UP` and setting it to the value of `^`. */
        define('CHAR_UP', '^');
        /* Defining a constant called `CHAR_USD` and setting it to the value of `$`. */
        define('CHAR_USD', '$');
        /* Defining a constant called `CHAR_I` and setting it to the value of `i`. */
        define('CHAR_I', 'i');
        /* Defining a constant called `CHAR_COLON` and setting it to the value of `:`. */
        define('CHAR_COLON', ':');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `!`. */
        define('CHAR_EXCLAMATION', '!');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `!`. */
        define('CHAR_CAP_P', 'P');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `<`. */
        define('CHAR_ARROW', '<');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `>`. */
        define('CHAR_ARROW_CLOSE', '>');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `,`. */
        define('CHAR_COMMA', ',');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `2`. */
        define('CHAR_2', '2');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `1`. */
        define('CHAR_1', '1');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `6`. */
        define('CHAR_6', '6');
        /* Defining a constant called `CHAR_EXCLAMATION` and setting it to the value of `3`. */
        define('CHAR_3', '3');
        /* Defining a constant called `CHAR_SLASH` and setting it to the value of `/`. */
        define('CHAR_SLASH', '/');


        // NUMBERS
        /* Defining a constant called `NUM_ENV_LIMIT` and setting it to the value of `2`. */
        define('NUM_ENV_LIMIT', 2);


        // EXTENSIONS
        /* Defining a constant called `EXT_JSON` and setting it to the value of `.csv`. */
        define('EXT_JSON', CHAR_PERIOD . 'json');
        /* Defining a constant called `EXT_PHP` and setting it to the value of `.php`. */
        define('EXT_PHP', CHAR_PERIOD . 'php');
        /* Defining a constant called `EXT_TMP` and setting it to the value of `.tmp`. */
        define('EXT_TMP', CHAR_PERIOD . 'cache');
        /* Defining a constant called `EXT_ENV` and setting it to the value of `.env`. */
        define('EXT_ENV', CHAR_PERIOD . 'env');
        /* Defining a constant called `EXT_ENV` and setting it to the value of `.env`. */
        define('EXT_PHAR', CHAR_PERIOD . 'phar');


        //VARIBLES SINGLE
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
        define('VAR_HTTPS', 'https:' . CHAR_SLASH . CHAR_SLASH);
        define('VAR_HTTPS_ONLY', 'https');
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
        /* Defining a constant called `VAR_APPLICATION_URLENCODED` and setting it to the value of `application/x-www-form-urlencoded`. */
        define('VAR_APPLICATION_URLENCODED', 'application/x-www-form-urlencoded');
        /* Defining a constant called `VAR_CONTENT_TYPE` and setting it to the value of `content-type`. */
        define('VAR_CONTENT_TYPE', 'content-type');
        /* Defining a constant called `VAR_CONTENT_LENGTH` and setting it to the value of `content-length`. */
        define('VAR_CONTENT_LENGTH', 'content-length');
        /* Defining a constant called `VAR_TYPE` and setting it to the value of `type`. */
        define('VAR_TYPE', 'type');
        /* Defining a constant called `VAR_ERROR` and setting it to the value of `error`. */
        define('VAR_ERROR', 'error');
        /* Defining a constant called `VAR_TMP_NAME` and setting it to the value of `tmp_name`. */
        define('VAR_TMP_NAME', 'tmp_name');
        /* Defining a constant called `VAR_GET_URL` and setting it to the value of `getUrl`. */
        define('VAR_GET_URL', 'getUrl');
        /* Defining a constant called `VAR_UCFIRST` and setting it to the value of `ucfirst`. */
        define('VAR_UCFIRST', 'ucfirst');
        /* Defining a constant called `VAR_STRTOLOWER` and setting it to the value of `strtolower`. */
        define('VAR_STRTOLOWER', 'strtolower');
        /* Defining a constant called `VAR_HTML` and setting it to the value of `html`. */
        define('VAR_HTML', 'html');
        /* Defining a constant called `VAR_TEXT` and setting it to the value of `text`. */
        define('VAR_TEXT', 'text');
        /* Defining a constant called `VAR_VAR` and setting it to the value of `var`. */
        define('VAR_VAR', 'VAR');
        /* Defining a constant called `VAR_HTTP` and setting it to the value of `var`. */
        define('VAR_HTTP', 'http:');
        /* Defining a constant called `VAR_INTERFACE` and setting it to the value of `interface`. */
        define('VAR_INTERFACE', 'Interface');
        /* Defining a constant called `VAR_GETCSV` and setting it to the value of `str_getcsv`. */
        define('VAR_GETCSV', 'str_getcsv');
        /* Defining a constant called `VAR_DOMAIN` and setting it to the value of `domain`. */
        define('VAR_DOMAIN', 'domain');
        /* Defining a constant called `VAR_PATTERN` and setting it to the value of `pattern`. */
        define('VAR_PATTERN', 'pattern');
        /* Defining a constant called `VAR_PATTERN_UP` and setting it to the value of `pattern`. */
        define('VAR_PATTERN_UP', 'PATTERN');
        /* Defining a constant called `VAR_REPLACE` and setting it to the value of `replace`. */
        define('VAR_REPLACE', 'replace');
        /* Defining a constant called `VAR_SERVER` and setting it to the value of `SERVER`. */
        define('VAR_SERVER', 'SERVER');
        /* Defining a constant called VAR_SNAG and setting it to the string SNAG. */
        define('VAR_SNAG', 'SNAG');
        /* Defining a constant called VAR_PROXY and setting it to the string 'PROXY'. */
        define('VAR_PROXY', 'PROXY');
        /* Defining a constant called VAR_RESPONSE and setting it to the string VAR_RESPONSE. */
        define('VAR_RESPONSE', 'RESPONSE');
        /* Defining a constant called VAR_REQUEST and setting it to the string VAR_REQUEST. */
        define('VAR_REQUEST', 'REQUEST');
        /* Defining a constant called VAR_COCKPIT_ACCOUNTS and setting it to the string accounts. */
        define('VAR_COCKPIT_ACCOUNTS', 'accounts');
        /* Defining a constant called VAR_PLUGINS and setting it to the string plugins. */
        define('VAR_PLUGINS', 'plugins');
        /* Defining a constant called VAR_TARGET and setting it to the string TARGET. */
        define('VAR_TARGET', 'TARGET');
        /* Defining a constant called VAR_TARGET_PATTERN and setting it to the string TARGET. */
        define('VAR_TARGET_PATTERN', 'TARGET_PATTERN');
        /* Defining a constant called VAR_TARGET_REPLACE and setting it to the string TARGET_REPLACE. */
        define('VAR_TARGET_REPLACE', 'TARGET_REPLACE');
        /* Defining a constant called VAR_SITE and setting it to the string SITE. */
        define('VAR_SITE', 'SITE');
        /* Defining a constant called VAR_HOST and setting it to the string HOST. */
        define('VAR_HOST', 'HOST');
        /* Defining a constant called COCKPIT and setting it to the string COCKPIT. */
        define('VAR_COCKPIT', 'COCKPIT');
        /* Defining a constant called VAR_INSTALL and setting it to the string INSTALL. */
        define('VAR_INSTALL', 'INSTALL');
        /* Defining a constant called VAR_INC and setting it to the string INC. */
        define('VAR_INC', 'INC');
        /* Defining a constant called VAR_REPLACE and setting it to the string REPLACE. */
        define('VAR_REPLACE_UP', 'REPLACE');
        /* Defining a constant called VAR_REWRITE and setting it to the string REWRITE. */
        define('VAR_REWRITE', 'REWRITE');
        /* Defining a constant called VAR_SEARCH and setting it to the string SEARCH. */
        define('VAR_SEARCH', 'SEARCH');
        /* Defining a constant called VAR_FILES and setting it to the string files. */
        define('VAR_FILES', 'files');
        /* Defining a constant called VAR_PHP and setting it to the string PHP. */
        define('VAR_PHP', 'PHP');
        /* Defining a constant called VAR_SELF and setting it to the string SELF. */
        define('VAR_SELF', 'SELF');
        /* Defining a constant called VAR_APP and setting it to the string APP. */
        define('VAR_APP', 'APP');
        /* Defining a constant called VAR_PROXY and setting it to the string PROXY. */
        /* Defining a constant called VAR_NAME and setting it to the string NAME. */
        define('VAR_NAME_UP', 'NAME');
        /* Defining a constant called VAR_URL and setting it to the string URL. */
        define('VAR_URL_UP', 'URL');
        /* Defining a constant called VAR_PARSE_UP and setting it to the string PARSE. */
        define('VAR_PARSE_UP', 'PARSE');
        /* Defining a constant called VAR_URI and setting it to the string URI. */
        define('VAR_URI', 'URI');
        /* Defining a constant called VAR_SUB and setting it to the string SUB. */
        define('VAR_SUB', 'SUB');
        /* Defining a constant called VAR_DOMAIN and setting it to the string DOMAIN. */
        define('VAR_DOMAIN_UP', 'DOMAIN');
        /* Defining a constant called VAR_DIR and setting it to the string DIR. */
        define('VAR_DIR', 'DIR');
        /* Defining a constant called VAR_FULL and setting it to the string FULL. */
        define('VAR_FULL', 'FULL');
        /* Defining a constant called VAR_HTTPS and setting it to the string HTTPS. */
        define('VAR_HTTPS_UP', 'HTTPS');
        /* Defining a constant called VAR_HTTP and setting it to the string HTTP. */
        define('VAR_HTTP_UP', 'HTTP');
        /* Defining a constant called VAR_HTTP and setting it to the string http. */
        /* Defining a constant called VAR_METHOD and setting it to the string METHOD. */
        define('VAR_METHOD', 'METHOD');
        /* Defining a constant called VAR_REMOTE and setting it to the string REMOTE. */
        define('VAR_REMOTE', 'REMOTE');
        /* Defining a constant called VAR_ADDR and setting it to the string ADDR. */
        define('VAR_ADDR', 'ADDR');
        /* Defining a constant called VAR_EVENT and setting it to the string 'EVENT'. */
        define('VAR_EVENT', 'EVENT');
        /* Defining a constant named VAR_MIME with the value of MIME. */
        define('VAR_MIME', 'mime');
        /* Defining a constant called VAR_TYPES with the value of TYPES. */
        define('VAR_TYPES', 'TYPES');
        /* Defining a constant called VAR_LIST and assigning it the value of LIST. */
        define('VAR_LIST', 'LIST');
        /* Defining a constant called VAR_GLOBAL_UP and setting it to the string GLOBAL. */
        define('VAR_GLOBAL_UP', 'GLOBAL');
        /* Defining a constant called VAR_GLOBAL and setting it to the string global. */
        define('VAR_GLOBAL', 'global');
        /* Defining a constant called VAR_VALUE and setting it to the string value. */
        define('VAR_VALUE', 'value');


        //VARIBLES MULTIPLE
        /* Defining a constant called `CHAR_EMPTY_STRING` and setting it to the value of ``. */
        define('VAR_DASH_LOWER', CHAR_DASH . CHAR_UNDER);
        /* Defining a constant called `VAR_TEXT_HTML` and setting it to the value of `text/html`. */
        define('VAR_TEXT_HTML', VAR_TEXT . CHAR_SLASH . VAR_HTML);
        /* Defining a constant called `VAR_VAR_UNDER` and setting it to the value of `CHAR_UNDER . VAR_VAR`. */
        define('VAR_VAR_UNDER', CHAR_UNDER . VAR_VAR);
        /* Defining a constant called `VAR_VAR_UNDER_END` and setting it to the value of `CHAR_UNDER . VAR_VAR . CHAR_UNDER`. */
        define('VAR_VAR_UNDER_END', CHAR_UNDER . VAR_VAR . CHAR_UNDER);
        /* Defining a constant called `VAR_REQUEST_URI` and setting it to the value of `REQUEST_URL_FULL`. */
        define('VAR_REQUEST_URI', VAR_REQUEST . CHAR_UNDER . VAR_URI);


        // COCKPIT
        /* Defining a constant. */
        define('COCKPIT_COCKPIT', 'cockpit');
        define('COCKPIT_ACCOUNTS', COCKPIT_COCKPIT . CHAR_SLASH . VAR_COCKPIT_ACCOUNTS);
        define('COCKPIT_COLLECTIONS', 'collections');
        define('COCKPIT_SITES', 'sites');
        define('COCKPIT_HOST', 'host');
        define('COCKPIT_TARGET', 'target');


        // DIRECTORIES
        /* Defining a constant called `DIR_ROOT` and setting it to the value of `$dir` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ROOT', $yxorp_root . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_ACTION` and setting it to the value of `action` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ACTION', 'action' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_PLUGIN` and setting it to the value of `plugin` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_PARSER', 'parser' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_PLUGIN` and setting it to the value of `plugin` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_PLUGIN', 'plugin' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_OVERRIDE` and setting it to the value of `override` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_OVERRIDE', 'override' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_GLOBAL` and setting it to the value of `global` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_GLOBAL', VAR_GLOBAL . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_INCLUDES` and setting it to the value of `includes` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_INCLUDES', 'includes' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_COCKPIT` and setting it to the value of `cockpit` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_COCKPIT', COCKPIT_COCKPIT . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_ACCOUNTS` and setting it to the value of `accounts` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_ACCOUNTS', VAR_COCKPIT_ACCOUNTS . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_INC` and setting it to the value of `inc` with a `DIRECTORY_SEPARATOR` appended
        to it. */
        define('DIR_INC', 'inc' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_DATA` and setting it to the value of `storage` with a `DIRECTORY_SEPARATOR`
        to it. */
        define('DIR_DATA', 'data' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_STORAGE` and setting it to the value of `storage` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_STORAGE', 'storage' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_TMP` and setting it to the value of `tmp` with a `DIRECTORY_SEPARATOR` appended
        to it. */
        define('DIR_TMP', CHAR_PERIOD . 'cache' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_HTTP` and setting it to the value of `http` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_HTTP', 'http' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_MINIFY` and setting it to the value of `minify` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_MINIFY', 'minify' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_HTTP` and setting it to the value of `http` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_SNAG', 'snag' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_HTTP` and setting it to the value of `http` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_PROXY', 'proxy' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_HTTP` and setting it to the value of `http` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_PSR', 'psr' . DIRECTORY_SEPARATOR);
        /* Defining a constant called `DIR_DEBUG` and setting it to the value of `debug` with a `DIRECTORY_SEPARATOR`
        appended to it. */
        define('DIR_DEBUG', 'debug' . DIRECTORY_SEPARATOR);


        // EVENTS
        /* Defining a constant called `EVENT_BUILD_TMP` and setting it to the value of `request.build_cached`. */
        define('EVENT_BUILD_TMP', 'request' . CHAR_PERIOD . 'build_cached');
        /* Defining a constant called `EVENT_BUILD_CONTEXT` and setting it to the value of `request.build_context`. */
        define('EVENT_BUILD_CONTEXT', 'request' . CHAR_PERIOD . 'build_context');
        /* Defining a constant called `EVENT_BUILD_INCLUDES` and setting it to the value of `request.build_includes`. */
        define('EVENT_BUILD_INCLUDES', 'request' . CHAR_PERIOD . 'build_includes');
        /* Defining a constant called `EVENT_BUILD_HEADERS` and setting it to the value of `request.build_headers`. */
        define('EVENT_BUILD_HEADERS', 'request' . CHAR_PERIOD . 'build_headers');
        /* Defining a constant called `EVENT_BUILD_REQUEST` and setting it to the value of `request.build_request`. */
        define('EVENT_BUILD_REQUEST', 'request' . CHAR_PERIOD . 'build_request');
        /* Defining a constant called `EVENT_BEFORE_SEND` and setting it to the value of `request.before_send`. */
        define('EVENT_BEFORE_SEND', 'request' . CHAR_PERIOD . 'before_send');
        /* Defining a constant called `EVENT_SEND` and setting it to the value of `request.send`. */
        define('EVENT_SEND', 'request' . CHAR_PERIOD . 'send');
        /* Defining a constant called `EVENT_SENT` and setting it to the value of `request.sent`. */
        define('EVENT_SENT', 'request' . CHAR_PERIOD . 'sent');
        /* Defining a constant called `EVENT_COMPLETE` and setting it to the value of `request.complete`. */
        define('EVENT_COMPLETE', 'request' . CHAR_PERIOD . 'complete');
        /* Defining a constant called `EVENT_FINAL` and setting it to the value of `request.final`. */
        define('EVENT_FINAL', 'request' . CHAR_PERIOD . 'final');
        /* Defining a constant called `EVENT_EXCEPTION` and setting it to the value of `request.build_exception`. */
        define('EVENT_EXCEPTION', 'request' . CHAR_PERIOD . 'build_exception');
        /* Defining a constant called `EVENT_WRITE` and setting it to the value of `curl.callback.write`. */
        define('EVENT_WRITE', 'curl' . CHAR_PERIOD . 'callback' . CHAR_PERIOD . 'write');

        // FILES
        /* Defining a constant called `FILE_REWRITE` and setting it to the value of `REWRITE`. */
        define('FILE_REWRITE', 'rewrite' . EXT_JSON);
        /* Defining a constant called `FILE_INDEX` and setting it to the value of `index`. */
        define('FILE_INDEX', 'index' . EXT_PHP);
        /* Defining a constant called `FILE_WRAPPER` and setting it to the value of `wrapper`. */
        define('FILE_WRAPPER', 'wrapper' . EXT_PHP);
        /* Defining a constant called `FILE_WRAPPER` and setting it to the value of `wrapper`. */
        define('FILE_COCKPIT_BOOTSTRAP', 'bootstrap' . EXT_PHP);
        /* Defining a constant. */
        define('FILE_MIME_TYPES', VAR_MIME . EXT_JSON);


        /* Defining the PATH_PDP_PSL_TEXT path to the action public-suffix-list file. */
        define('FILE_TLDS_ALPHA_BY_DOMAIN', 'tlds-alpha-by-domain.txt');
        /* Defining the PATH_ICANN_PSL_PHP path to the action icann-public-suffix-list file. */
        define('FILE_PUBLIC_SUFFIX_LIST', 'public_suffix_list.dat');


        //METHODS
        /* Defining a constant called `SUBSCRIBE_METHOD` and setting it to the value of `subscribe`. */
        define('SUBSCRIBE_METHOD', 'subscribe');


        // YXORP
        define('YXORP_EVENT_LIST', VAR_EVENT . CHAR_UNDER . VAR_LIST);
        define('YXORP_MIME_TYPES', VAR_MIME . CHAR_UNDER . VAR_TYPES);
        /* Defining a constant. */
        define('YXORP_REWRITE', VAR_INC . CHAR_UNDER . VAR_REWRITE);
        /* Defining a constant. */
        define('YXORP_COCKPIT_INSTALL', VAR_COCKPIT . CHAR_UNDER . VAR_INSTALL);
        /* Defining a constant called YXORP_HTTP_HOST and setting it equal to the string 'HTTP_HOST'. */
        define('YXORP_HTTP_HOST', VAR_HTTP_UP . CHAR_UNDER . VAR_HOST);
        /* Defining a constant called YXORP_COCKPIT_APP and setting it to the string COCKPIT_APP. */
        define('YXORP_COCKPIT_APP', VAR_COCKPIT . CHAR_UNDER . VAR_APP);
        /* Defining a constant called YXORP_PHP_SELF and setting it to the string PHP_SELF. */
        define('YXORP_PHP_SELF', VAR_PHP . CHAR_UNDER . VAR_SELF);
        /* Defining a constant called YXORP_REQUEST_METHOD and setting it to the string REQUEST_METHOD. */
        define('YXORP_REQUEST_METHOD', VAR_REQUEST . CHAR_UNDER . VAR_METHOD);
        /* Defining a constant called YXORP_HTTP_ and setting it to the string HTTP_. */
        define('YXORP_HTTP_', VAR_HTTPS_UP . CHAR_UNDER);
        /* Defining a constant called YXORP_REMOTE_ADDR and setting it to the string REMOTE_ADDR. */
        define('YXORP_REMOTE_ADDR', VAR_REMOTE . CHAR_UNDER . VAR_ADDR);
        /* Defining a constant called YXORP_TARGET_PLUGINS and setting it to the string TARGET_PLUGINS. */
        define('YXORP_TARGET_PLUGINS', 'TARGET_PLUGINS');
        /* Defining a constant called YXORP_GLOBAL_REPLACE and setting it to the string VAR_REPLACE. */
        define('YXORP_GLOBAL_REPLACE', VAR_GLOBAL_UP . CHAR_UNDER . VAR_REPLACE);
        /* Defining a constant called YXORP_GLOBAL_PATTERN and setting it to the string VAR_PATTERN. */
        define('YXORP_GLOBAL_PATTERN', VAR_GLOBAL_UP . CHAR_UNDER . VAR_PATTERN);


        // PATHS
        /* Defining a constant called `PATH_DIR_COCKPIT` and setting it to the value of `DIR_ROOT` with a `DIR_COCKPIT`
        and `DIR_STORAGE` appended to it. */
        define('PATH_DIR_COCKPIT', DIR_ROOT . DIR_COCKPIT . DIR_STORAGE);
        /* Defining a constant called `PATH_COCKPIT_LOCAL` and setting it to the value of `DIR_ROOT` with a `DIR_INC` and
        `DIR_STORAGE` appended to it. */
        define('PATH_COCKPIT_LOCAL', DIR_ROOT . DIR_INC . DIR_STORAGE);
        /* Defining a constant called `PATH_COCKPIT_INDEX` and setting it to the value of `DIR_ROOT` with a `DIR_COCKPIT`
        and `FILE_INDEX` and `EXT_PHP` appended to it. */
        define('PATH_COCKPIT_INDEX', DIR_ROOT . DIR_COCKPIT . FILE_INDEX);
        /* Defining a constant called `PATH_REWRITE_SEARCH` and setting it to the value of `DIR_ROOT` with a
        `DIR_OVERRIDE` and `DIR_GLOBAL` and `DIR_INCLUDES` and `FILE_REWRITE` and `EXT_JSON` appended to it. */
        define('PATH_REWRITE', DIR_ROOT . DIR_INC . DIR_DATA . FILE_REWRITE);
        /* Defining the path to the snag.phar file. */
        /* Defining the path to the cockpit bootstrap file. */
        define('PATH_COCKPIT_BOOTSTRAP', DIR_ROOT . DIR_COCKPIT . FILE_COCKPIT_BOOTSTRAP);

        /* Defining the path to the action wrapper file. */
        define('PATH_INC_WRAPPER', DIR_ROOT . DIR_INC . FILE_WRAPPER);
        /* Defining a constant called `PATH_COCKPIT_BOOTSTRAP` and setting it to the value of `bootstrap`. */

        /* Defining the PATH_PDP_PSL_TEXT path to the action public-suffix-list file. */
        define('PATH_TLDS_ALPHA_BY_DOMAIN', DIR_ROOT . DIR_INC . DIR_DATA . FILE_TLDS_ALPHA_BY_DOMAIN);
        /* Defining the PATH_PDP_PSL_PHP path to the action public-suffix-list file. */
        define('PATH_PUBLIC_SUFFIX_LIST', DIR_ROOT . DIR_INC . DIR_DATA . FILE_PUBLIC_SUFFIX_LIST);
        /* Defining a constant called PATH_FILE_MIME_TYPES. The value of the constant is the directory root, the directory
        inc, the directory data, and the file mime types. */
        define('PATH_FILE_MIME_TYPES', DIR_ROOT . DIR_INC . DIR_DATA . FILE_MIME_TYPES);


        //REGEX
        /* Defining a constant called ENV_ADMIN_USER and setting it to the value of ADMIN_USER. */
        /* Defining a constant called REG_ONE. */
        define('REG_ONE', CHAR_SLASH . CHAR_SLASH_BACK . CHAR_QUESTION . CHAR_PERIOD . CHAR_ASTRIX . CHAR_SLASH);
        /* Defining a constant called REG_TWO. */
        define('REG_TWO', CHAR_HASH . CHAR_PERIOD . CHAR_ASTRIX . CHAR_SLASH);
        /* Defining a regular expression for PHP. */
        define('REG_THREE', CHAR_AT . CHAR_CURVE . CHAR_BRACKET . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_0 . CHAR_DASH . CHAR_9 . CHAR_UNDER . CHAR_SQUARE_CLOSE . CHAR_PLUS . CHAR_BRACKET_CLOSE . CHAR_CURVE_CLOSE . CHAR_AT . CHAR_S);
        /* Defining a constant named REG_FOUR. */
        define('REG_FOUR', CHAR_SLASH_BACK . CHAR_ASTRIX);
        /* Defining a constant named REG_FIVE. */
        define('REG_FIVE', CHAR_PERIOD . CHAR_ASTRIX);
        /* Defining a constant named REG_SIX. */
        define('REG_SIX', CHAR_SLASH_BACK . CHAR_QUESTION);
        /* Defining a constant named REG_SEVEN. */
        define('REG_SEVEN', CHAR_HASH . CHAR_UP);
        /* Defining a constant named REG_EIGHT. */

        define('REG_EIGHT', CHAR_HASH . CHAR_UP . VAR_HTTPS_ONLY . CHAR_QUESTION . CHAR_COLON . CHAR_HASH . CHAR_I);
        define('REG_NINE', CHAR_HASH . CHAR_SLASH . CHAR_SQUARE . CHAR_UP . CHAR_SLASH . CHAR_SQUARE_CLOSE . CHAR_ASTRIX . CHAR_USD . CHAR_HASH);
        define('REG_TEN', CHAR_HASH . CHAR_SLASH . CHAR_QUESTION . CHAR_EXCLAMATION . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_BRACKET_CLOSE . CHAR_SQUARE . CHAR_UP . CHAR_SLASH . CHAR_SQUARE_CLOSE . CHAR_PLUS . CHAR_SLASH . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SLASH . CHAR_HASH);
        define('REG_ELEVEN', CHAR_HASH . CHAR_BRACKET . CHAR_SLASH . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_QUESTION . CHAR_SLASH . CHAR_BRACKET_CLOSE . CHAR_HASH);
        define('REG_TWELVE', CHAR_SLASH . CHAR_BRACKET . CHAR_QUESTION . CHAR_CAP_P . CHAR_ARROW . VAR_DOMAIN . CHAR_ARROW_CLOSE . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_0 . CHAR_DASH . CHAR_9 . CHAR_SQUARE_CLOSE . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_0 . CHAR_DASH . CHAR_9 . CHAR_SLASH_BACK . CHAR_DASH . CHAR_SQUARE_CLOSE . CHAR_CURVE . CHAR_1 . CHAR_COMMA . CHAR_6 . CHAR_3 . CHAR_CURVE_CLOSE . CHAR_SLASH_BACK . CHAR_PERIOD . CHAR_SQUARE . CHAR_A . CHAR_DASH . CHAR_Z . CHAR_PERIOD . CHAR_SQUARE_CLOSE . CHAR_CURVE . CHAR_2 . CHAR_COMMA . CHAR_6 . CHAR_CURVE_CLOSE . CHAR_BRACKET_CLOSE . CHAR_USD . CHAR_SLASH . CHAR_I);

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
        /* Defining a constant called ENV_DEBUG and setting it to the value of 'DEBUG' . EXT_ENV. */
        define('ENV_DEFAULT_SITE', 'DEFAULT_SITE' . EXT_ENV);
        /* Defining a constant called ENV_DEBUG and setting it to the value of 'DEBUG' . EXT_ENV. */
        define('ENV_DEFAULT_TARGET', 'DEFAULT_TARGET' . EXT_ENV);


        //EXCEPTIONS
        /* Defining a constant called RUNTIME_EXCEPTION. */
        define('RUNTIME_EXCEPTION', 'Directory "%s" was not created');
        define('ACCESS_DENIED_EXCEPTION', 'Error: Access denied!');
        define('ACCESS_ALREADY_DEFINED', 'Argument already exists and cannot be redefined!');

        define('CACHE_EXPIRATION', @time() + (60 * 60 * 24 * 31 * 365));


    }
    /* Defining constants.Creating a new directory.  */

    /**
     * @param string $_name
     * @param string|array|object|null $_value
     * @return string|array|object|null
     */
    public static function set(string $_name, string|array|object|null $_value): string|array|object|null
    {
        /* Checking if the argument already exists in the global scope and if it does, it throws an exception. If it
        doesn't, it adds the argument to the global scope . */
        return (array_key_exists($_name, $GLOBALS)) ? throw new RuntimeException(ACCESS_ALREADY_DEFINED) : $GLOBALS[$_name] = $_value;
    }

    /* A function that is being called to localise constants. */

    /**
     * @param string $_name
     * @return string|array|object|null
     */
    public static function get(string $_name): string|array|object|null
    {
        /* Checking if the key exists in the global array. If it does, it returns the value of the key. If it doesn't, it
        returns false . */
        return $GLOBALS[$_name];
    }

    /* A static method that returns the value of the $_name variable. */

    public static function flush()
    {
        if (Memcache::isConnected()) {
            Memcache::flush();
        } else {
            Memcache::connect('localhost', 11211);
            Memcache::flush();
        }
        foreach (glob(PATH_DIR_TMP . '*') as $file) unlink($file);
    }


}
