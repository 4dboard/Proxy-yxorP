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
        define('COCKPIT_ADMIN', 1);
        define('COCKPIT_API_REQUEST', 1);
        define('COCKPIT_TOKEN', 'account-f41e0d8459b119dda91373dbf810b3');
        define('COCKPIT_ADMIN_ROUTE',  '/api/collections/entries/Sites');
        require($GLOBALS['PLUGIN_DIR'] . "/cockpit/bootstrap.php");
        $cockpit->set('route', COCKPIT_ADMIN_ROUTE)->run();
        exit;
    }

}

