<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* Extending the `wrapper` class, which is a class that is used to wrap the `Event` class. */

class guzzleClientAction extends wrapper
{
    /* A method that is called before the request is sent. */
    /**
     * @throws JsonException
     */
    public function onBeforeRequest(): void
    {
        /* Creating a new `GuzzleHttp\Client` object, and then it is sending a request to the `constants::get(YXORP_FETCH)` URL,
        with the `constants::get(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body. */
        $YXORP_REQUEST = constants::get(YXORP_REQUEST);
        $YXORP_GUZZLE = constants::get(YXORP_GUZZLE);
        $_content = $YXORP_GUZZLE->request($YXORP_REQUEST->getMethod(), constants::get(YXORP_FETCH), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody();
        constants::get(YXORP_RESPONSE)->setContent($_content);
    }
}