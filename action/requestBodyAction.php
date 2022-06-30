<?php
/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* Extending the actionWrapper class. */

class requestBodyAction extends actionWrapper
{
    /* A method that is called by the actionWrapper class. */
    public function buildRequest(): void
    {
        /* Getting the request body from the input stream and setting it to the request object. */
        if ($_body = file_get_contents('php:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'input')) Constants::get('REQUEST')->setBody(json_decode($_body, true), Constants::get('MIME'));
    }
}