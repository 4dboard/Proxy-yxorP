<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* Extending the `wrapper` class, which is a class that is used to wrap the `event` class. */

class proxyClientAction extends wrapper
{
    /* A method that is called before the request is sent. */
    /**
     * @throws JsonException
     */
    public function onSend(): void
    {
        /* Creating a new `yxorP\proxy\Client` object, and then it is sending a request to the `constants::get(YXORP_FETCH)` URL,
        with the `constants::get(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body. */
        $content = constants::get(VAR_PROXY)->request(constants::get(VAR_REQUEST)->getMethod(), constants::get(VAR_REQUEST)->getUrl(), json_decode(json_encode($_REQUEST), true, 512, JSON_THROW_ON_ERROR))->getBody();
        constants::get(VAR_RESPONSE)->setContent($content);
    }
}