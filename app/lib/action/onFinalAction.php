<?php use yxorP\app\lib\http\cache;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

class onFinalAction extends wrapper
{
    public function onFinal(): void
    {
        if (store::handler(VAR_RESPONSE)) cache::set(store::handler(YXORP_CONTENT));
    }
}
