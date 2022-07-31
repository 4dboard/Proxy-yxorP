<?php

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;

/**
 * Extending the wrapper class.
 */
class onHeadersAction extends wrapper
{
    /**
     * Setting the headers for the request.
     *
     */
    public function onHeaders(): void
    {
        ini_set('display_startup_errors', ENV_DEBUG ? 1 : 0);
        ini_set('display_errors', ENV_DEBUG ? 1 : 0);
        error_reporting(ENV_DEBUG ? 1 : 0);
        if (helpers::contains($_SERVER['REQUEST_URI'], ['login/', 'register/', 'signup/', 'pay/', 'payout/', 'withdraw/', 'deposit/', 'transfer/', 'deposit/', 'transfer/', 'withdraw/', 'pay/', 'payout/', 'login/', 'register/', 'signup/'])) header("Location: HTTPS://" . YXORP_SITE_DOMAIN);

    }
}
