<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\http\wrapper;
use yxorp\inc\yP;

/* Extending the wrapper class. */

class onBuildRequestAction extends wrapper
{
    /* A method that is called by the wrapper class. */
    public function onBuildRequest(): void
    {
        /* Getting the request body from the input stream and setting it to the request object. */
        if ($_body = file_get_contents('php:' . CHAR_SLASH . CHAR_SLASH . 'input')) yP::get(VAR_REQUEST)->setBody(json_decode($_body, true), MIME);
    }
}