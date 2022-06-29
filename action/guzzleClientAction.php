<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* Extending the `EventWrapper` class, which is a class that is used to wrap the `Event` class. */

class guzzleClientAction extends EventWrapper
{
    /* A method that is called before the request is sent. */
    public function onBeforeRequest(): void
    {
        /* Creating a new `GuzzleHttp\Client` object, and then it is sending a request to the `self::get('FETCH')` URL,
        with the `self::get('REQUEST')->getMethod()` method, and the `$_REQUEST` array as the body. */
        self::get('RESPONSE')->setContent((new Client(['allow_redirects' => true, 'http_errors' => true, 'decode_content' => true, 'verify' => false, 'cookies' => true, 'idn_conversion' => true]))->request(self::get('REQUEST')->getMethod(), self::get('FETCH'), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
    }
}