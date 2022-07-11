<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class requestBodyAction extends wrapper
{
    /* A method that is called by the wrapper class. */
    public function buildRequest(): void
    {
        /* Getting the request body from the input stream and setting it to the request object. */
        if ($_body = file_get_contents('php:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'input')) constants::get(VAR_REQUEST)->setBody(json_decode($_body, true), MIME);
    }
}