<?php use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

class onSentAction extends wrapper
{
    public function onSent(): void
    {
        helpers::MIME();
        if (!store::handler(VAR_RESPONSE)) if (helpers::MIME() === 'text' . CHAR_SLASH . 'html' && defined(YXORP_PROXY_URL)) header("Location: " . YXORP_PROXY_URL);
    }
}
