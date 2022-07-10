<?php
/* Importing the wrapper class from the yxorP\http namespace. */

namespace yxorp\inc\action;

use JsonException;
use yxorP\inc\constants;
use yxorP\inc\wrapper;
use const VAR_PROXY;
use const VAR_REQUEST;
use const VAR_RESPONSE;

/* Extending the `wrapper` class, which is a class that is used to wrap the `event` class. */

class proxyClientAction extends wrapper
{
    /* A method that is called before the request is sent. */
    /**
     * @throws JsonException
     */
    public function onSend(): void
    {
        /* Creating a new `yxorP\inc\proxy\Client` object, and then it is sending a request to the `constants::get(YXORP_FETCH)` URL,
        with the `constants::get(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body. */
        $getUrl = constants::get(VAR_REQUEST)->getUrl();
        /* Getting the method of the request. */
        $getMethod = constants::get(VAR_REQUEST)->getMethod();
        /* Sending a request to the `constants::get(YXORP_FETCH)` URL, with the*/
        $request = constants::get(VAR_PROXY)->request($getMethod, $getUrl, json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR));
        /* `constants::get(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body. */
        $getBody = $request->getBody();
        /* Setting the content of the response to the content of the request. */
        constants::get(VAR_RESPONSE)->setContent($getBody);
    }
}