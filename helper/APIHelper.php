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
        $res = $GLOBALS['GUZZLE']->get('/dashboard/api/collections/entries/' . $Collection . '?token=' . $GLOBALS['DASHBOARD']);
        echo $res->getStatusCode();
        echo $res->getHeader('content-type');
        echo $res->getBody();
        return $res->json()->entries;
    }

}

