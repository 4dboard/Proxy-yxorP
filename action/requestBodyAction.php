<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* Extending the ActionWrapper class. */

class requestBodyAction extends ActionWrapper
{
    /* A method that is called by the ActionWrapper class. */
    public function buildRequest(): void
    {
        /* Getting the request body from the input stream and setting it to the request object. */
        if ($_body = file_get_contents('php:' . DIRECTORY_SEPARATOR . DIRECTORY_SEPARATOR . 'input')) Constants::get(TOKEN_REQUEST)->setBody(json_decode($_body, true), Constants::get('MIME'));
    }
}