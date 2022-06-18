<?php namespace yxorP\Helper;

use yxorP\Http\EventWrapper;
use yxorP\http\ProxyEvent;

class APIHelper extends EventWrapper
{
    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public static function fetch($Collection)
    {
        define('YXORP_ADMIN', 1);
        define('YXORP_API_REQUEST', 1);
        define('YXORP_TOKEN', 'account-f41e0d8459b119dda91373dbf810b3');
        define('YXORP_ADMIN_ROUTE',  '/api/collections/entries/Sites');
        require($GLOBALS['PLUGIN_DIR'] . "/dashboard/bootstrap.php");
        $yxorp->set('route', YXORP_ADMIN_ROUTE)->run();
        exit;

    }

}

