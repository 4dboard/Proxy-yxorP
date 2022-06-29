<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* Extending the EventWrapper class. */

class requestBodyAction extends EventWrapper
{
    /* A method that is called by the EventWrapper class. */
    public function buildRequest(): void
    {
        /* Getting the request body from the input stream and setting it to the request object. */
        if ($_body = file_get_contents('php:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'input')) self::get('REQUEST')->setBody(json_decode($_body, true), self::get('MIME'));
    }
}