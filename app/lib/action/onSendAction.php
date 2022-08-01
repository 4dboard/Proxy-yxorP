<?php use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

class onSendAction extends wrapper
{
    public function onSend(): void
    {
        store::handler(VAR_RESPONSE, store::handler(VAR_PROXY)->request(store::handler(VAR_REQUEST)->getMethod(), YXORP_PROXY_URL, json_decode(json_encode(store::handler(VAR_REQUEST)), true, 512, JSON_THROW_ON_ERROR)));
    }
}
