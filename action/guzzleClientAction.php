<?php use yxorP\Http\EventWrapper;

class guzzleClientAction extends EventWrapper
{
    public function onBeforeRequest(): void
    {
        self::get('RESPONSE')->setContent((new Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]))->request(self::get('REQUEST')->getMethod(), self::get('FETCH'), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
    }
}