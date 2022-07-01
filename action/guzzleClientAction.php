<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* Extending the `ActionWrapper` class, which is a class that is used to wrap the `Event` class. */

class guzzleClientAction extends ActionWrapper
{
    /* A method that is called before the request is sent. */
    /**
     * @throws JsonException
     */
    public function onBeforeRequest(): void
    {
        /* Creating a new `GuzzleHttp\Client` object, and then it is sending a request to the `Constants::get('FETCH')` URL,
        with the `Constants::get(TOKEN_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body. */
        Constants::get(TOKEN_RESPONSE)->setContent(GUZZLE->request(Constants::get(TOKEN_REQUEST)->getMethod(), Constants::get('FETCH'), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
    }
}