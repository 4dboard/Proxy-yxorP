<?php

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

namespace yxorP\app\plugin;

use yxorP\app\constants;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;
use function str_contains;
use const ACCESS_DENIED_EXCEPTION;
use const VAR_BUGSNAG;
use const VAR_REQUEST;
use const VAR_SERVER;
use const YXORP_REMOTE_ADDR;

/**
 * Extending the wrapper class.
 */
class blockListPluginAction extends wrapper
{
    /**
     * Checking if the `$fnc_custom` variable is callable and if it is, it calls the `callable` method.
     *
     */
    public static function callable($fnc_custom, $url)
    {
        /**
         * Checking if the `$fnc_custom` variable is callable and if it is, it calls the `callable` method.
         */
        if (!$fnc_custom(compact(VAR_USER_IP, VAR_USER_IP_LONG, VAR_URL, VAR_URL_HOST))) store::handler(VAR_BUGSNAG)->notifyException(new RuntimeException("Error: Access Denied!"));
        /**
         * Checking if the `$url` variable contains any of the values of the `BLOCKLIST` constant. If it does, it throws an
         * exception.
         */
        foreach ((array)store::handler('BLOCKLIST') as $ub) if (str_contains($url, $ub)) store::handler(VAR_BUGSNAG)->notifyException(new RuntimeException("Error: Access to $url has been blocked!"));
    }

    /**
     * A method that is called before the request is processed.
     *
     */
    public function onBeforeSend(): void
    {
        /**
         * Getting the user's IP address.
         */
        $user_ip = (store::handler(VAR_SERVER))[YXORP_REMOTE_ADDR];
        /**
         * It converts the IP address to an unsigned integer.
         */
        $user_ip_long = sprintf('%u', ip2long($user_ip));
        /**
         * Getting the URL of the request.
         */
        $url = store::handler(VAR_REQUEST)->getUrl();
        /**
         * Getting the value of the `BLOCKLIST` constant.
         */
        $fnc_custom = store::handler('BLOCKLIST');
        /**
         * Checking if the `$fnc_custom` variable is callable and if it is, it calls the `callable` method.
         */
        if (is_callable($fnc_custom, $url)) self::callable($fnc_custom);
        /**
         * Setting the `$ip_match` variable to `0`.
         */
        $ip_match = 0;
        /**
         * Checking if the `BLOCKLIST` constant is set and if it is, it sets the `$ip_match` variable to the value of the
         * `BLOCKLIST` constant.
         */
        if (store::handler('BLOCKLIST')) $ip_match = store::handler('BLOCKLIST');
        /**
         * Checking if the `$ip_match` variable is set and if it is, it checks if the `$user_ip` variable matches the
         * `$ip_match` variable. If it does not match, it throws an exception.
         */
        if ($ip_match) if ((!helpers::re_match($ip_match, $user_ip))) store::handler(VAR_BUGSNAG)->notifyException(new RuntimeException(ACCESS_DENIED_EXCEPTION));
    }
}

