<?php use yxorP\app\lib\http\httpCache;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

class onFinalAction extends wrapper
{
    public function onFinal(): void
    {
        if (store::handler(VAR_RESPONSE)) httpCache::set(store::handler(YXORP_CONTENT));
    }
}
