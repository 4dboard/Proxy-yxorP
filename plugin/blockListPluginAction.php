<?php

/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\generalHelper;
use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class blockListPluginAction extends wrapper
{
    /* A method that is called before the request is processed. */
    public function onBeforeSend(): void
    {
        /* Getting the user's IP address. */
        $user_ip = (constants::get(YXORP_SERVER))[YXORP_REMOTE_ADDR];
        /* It converts the IP address to an unsigned integer. */
        $user_ip_long = sprintf('%u', ip2long($user_ip));
        /* Getting the URL of the request. */
        $url = constants::get(YXORP_REQUEST)->getUrl();
        /* Getting the value of the `BLOCKLIST` constant. */
        $fnc_custom = constants::get('BLOCKLIST');
        /* Checking if the `$fnc_custom` variable is callable and if it is, it calls the `callable` method. */
        if (is_callable($fnc_custom, $url)) self::callable($fnc_custom);
        /* Setting the `$ip_match` variable to `false`. */
        $ip_match = false;
        /* Checking if the `BLOCKLIST` constant is set and if it is, it sets the `$ip_match` variable to the value of the
        `BLOCKLIST` constant. */
        if (constants::get('BLOCKLIST')) $ip_match = constants::get('BLOCKLIST');
        /* Checking if the `$ip_match` variable is set and if it is, it checks if the `$user_ip` variable matches the
        `$ip_match` variable. If it does not match, it throws an exception. */
        if ($ip_match) if ((!generalHelper::re_match($ip_match, $user_ip))) constants::get(BUGSNAG)->notifyException(new RuntimeException(ACCESS_DENIED_EXCEPTION));
    }

    /* Checking if the `$fnc_custom` variable is callable and if it is, it calls the `callable` method. */

    public static function callable($fnc_custom, $url)
    {
        /* Checking if the `$fnc_custom` variable is callable and if it is, it calls the `callable` method. */
        if (!$fnc_custom(compact(VAR_USER_IP, VAR_USER_IP_LONG, VAR_URL, VAR_URL_HOST))) constants::get(BUGSNAG)->notifyException(new RuntimeException("Error: Access Denied!"));
        /* Checking if the `$url` variable contains any of the values of the `BLOCKLIST` constant. If it does, it throws an
        exception. */
        foreach ((array)constants::get('BLOCKLIST') as $ub) if (str_contains($url, $ub)) constants::get(BUGSNAG)->notifyException(new RuntimeException("Error: Access to $url has been blocked!"));
    }
}

