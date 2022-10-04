<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\helpers;
use yxorP\lib\http\store;
use yxorP\lib\http\wrapper;

/**
 * Extending the `wrapper` class, which is a class that is used to wrap the `event` class.
 */
class onSentAction extends wrapper
{
    /**
     * A method that is called before the request is sent.
     *
     */
    public function onSent(): void
    {
        helpers::MIME();
        if (!store::handler(VAR_RESPONSE)) if (helpers::MIME() === 'text' . CHAR_SLASH . 'html' && defined(YXORP_PROXY_URL)) header("Location: " . YXORP_PROXY_URL);
        /**
         * Creating a new `\yxorP\lib\proxy\client` object, and then it is sending a request to the `\yxorP\lib\http\store::handler(YXORP_FETCH)` URL,
         * with the `\yxorP\lib\http\store::handler(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body.   Setting the content of the response to the content of the request.
         */
    }
}
