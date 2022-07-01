<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\constants;

/* Extending the `ActionWrapper` class, which is a class that is used to wrap the `Event` class. */

class guzzleClientAction extends ActionWrapper
{
    /* A method that is called before the request is sent. */
    /**
     * @throws JsonException
     */
    public function onBeforeRequest(): void
    {
        /* Creating a new `GuzzleHttp\Client` object, and then it is sending a request to the `constants::get('FETCH')` URL,
        with the `constants::get(TOKEN_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body. */
        constants::get(TOKEN_RESPONSE)->setContent(GUZZLE->request(constants::get(TOKEN_REQUEST)->getMethod(), constants::get('FETCH'), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody());
    }
}