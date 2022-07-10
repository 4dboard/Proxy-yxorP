<?php
/* Importing the wrapper class from the yxorP\http namespace. */

namespace yxorp\inc\action;

use yxorP\http\request;
use yxorP\http\response;
use yxorP\inc\constants;
use yxorP\inc\wrapper;
use const VAR_REQUEST;
use const VAR_RESPONSE;

/* Extending the wrapper class, which is a class that is used to wrap the request and response objects. */

class requestResponseAction extends wrapper
{
    /* This function is used to build the request and response objects. */
    public function onBuildContext(): void
    {
        /* Setting the response object to the key RESPONSE. */
        constants::set(VAR_RESPONSE, new Response());
        /* Setting the request object to the key REQUEST. */
        constants::set(VAR_REQUEST, Request::createFromGlobals());
    }
}