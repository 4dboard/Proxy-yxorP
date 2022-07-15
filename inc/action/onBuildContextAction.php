<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\http\request;
use yxorP\inc\http\response;
use yxorP\inc\http\wrapper;
use yxorp\inc\yP;

/* Extending the wrapper class, which is a class that is used to wrap the request and response objects. */

class onBuildContextAction extends wrapper
{
    /* This function is used to build the request and response objects. */
    public function onBuildContext(): void
    {
        /* Setting the response object to the key RESPONSE. */
        yP::tmp(VAR_RESPONSE, new Response());
        /* Setting the request object to the key REQUEST. */
        yP::tmp(VAR_REQUEST, Request::createFromGlobals());
    }
}