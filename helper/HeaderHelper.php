<?php namespace yxorP\Helper;
use yxorP\Http\EventWrapper;
use yxorP\http\ProxyEvent;

class HeaderHelper extends EventWrapper
{
    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: POST,GET,OPTIONS");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Origin,Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With,Access-Control-Allow-Credentials');
        new ContextHelper();
    }
}

