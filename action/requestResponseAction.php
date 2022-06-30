<?php
/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* Extending the actionWrapper class, which is a class that is used to wrap the request and response objects. */

class requestResponseAction extends actionWrapper
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