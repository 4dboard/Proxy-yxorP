<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\constants;

/* Extending the ActionWrapper class, which is a class that is used to wrap the request and response objects. */

class requestResponseAction extends ActionWrapper
{
    /* This function is used to build the request and response objects. */
    public function buildIncludes(): void
    {
        /* Setting the response object to the key RESPONSE. */
        constants::set(TOKEN_RESPONSE, new Response());
        /* Setting the request object to the key REQUEST. */
        constants::set(TOKEN_REQUEST, Request::createFromGlobals());
    }
}