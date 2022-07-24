<?php
/* Importing the wrapper class from the yxorP\app\lib\http namespace. */


use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;

/* Extending the `wrapper` class, which is a class that is used to wrap the `event` class. */

class onSentAction extends wrapper
{
    /* A method that is called before the request is sent. */
    /**
     */
    public function onSent(): void
    {
        helpers::setMimeType();
        /* Creating a new `yxorP\app\lib\proxy\Client` object, and then it is sending a request to the `\yxorP\app\yP::store(YXORP_FETCH)` URL,
        with the `\yxorP\app\yP::store(YXORP_REQUEST)->getMethod()` method, and the `$_REQUEST` array as the body.   Setting the content of the response to the content of the request. */
    }
}