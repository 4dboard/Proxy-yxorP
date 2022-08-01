<?php use yxorP\app\lib\http\request;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

class onContextAction extends wrapper
{
    public function onContext(): void
    {
        store::handler(VAR_REQUEST, Request::createFromGlobals());
    }
}
