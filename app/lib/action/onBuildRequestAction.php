<?php
/* Importing the wrapper class from the yxorP\app\lib\http namespace. */


use yxorP\app\constants;
use yxorP\app\lib\http\wrapper;
use yxorP\app\yP;

/* Extending the wrapper class. */

class onBuildRequestAction extends wrapper
{
    /* A method that is called by the wrapper class. */
    public function onBuildRequest(): void
    {
        /* Getting the request body from the input stream and setting it to the request object. */
        if ($_body = file_get_contents('php:' . CHAR_SLASH . CHAR_SLASH . 'input')) store::store(VAR_REQUEST)->setBody(json_decode($_body, true), MIME);
    }
}