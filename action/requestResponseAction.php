<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;
use yxorP\inc\Constants;

/* Extending the EventWrapper class, which is a class that is used to wrap the request and response objects. */

class requestResponseAction extends EventWrapper
{
    /* This function is used to build the request and response objects. */
    public function buildIncludes(): void
    {
        /* Setting the response object to the key RESPONSE. */
        Constants::set('RESPONSE', new Response());
        /* Setting the request object to the key REQUEST. */
        Constants::set('REQUEST', Request::createFromGlobals());
    }
}