<?php use yxorP\Http\EventWrapper;

class requestBodyAction extends EventWrapper
{
    public function buildRequest(): void
    {
        if ($_body = file_get_contents('php:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'input')) self::get('REQUEST')->setBody(json_decode($_body, true), self::get('MIME'));
    }
}