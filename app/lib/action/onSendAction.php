<?php
/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */


use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

/**
 * Extending the `wrapper` class, which is a class that is used to wrap the `event` class.
 */
class onSendAction extends wrapper
{
    /**
     * A method that is called before the request is sent.
     * @throws JsonException
     *
     */
    public function onSend(): void
    {
        /**
         * Creating a new `\yxorP\app\lib\proxy\client` object, and then it is sending a request to the `\yxorP\app\lib\http\store::handler(YXORP_FETCH)` URL,
         * with the `\yxorP\app\lib\http\store::handler(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body.   Setting the content of the response to the content of the request.
         */
        store::handler(VAR_RESPONSE, store::handler(VAR_PROXY)->request(store::handler(VAR_REQUEST)->getMethod(), YXORP_PROXY_URL, json_decode(json_encode(store::handler(VAR_REQUEST)), true, 512, JSON_THROW_ON_ERROR)));
    }
}
