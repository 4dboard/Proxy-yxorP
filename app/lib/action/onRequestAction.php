<?php use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

class onRequestAction extends wrapper
{
    public function onRequest(): void
    {
        if ($_body = file_get_contents('php:' . CHAR_SLASH . CHAR_SLASH . 'input')) store::handler(VAR_REQUEST)->setBody(json_decode($_body, true), helpers::MIME());
    }
}
