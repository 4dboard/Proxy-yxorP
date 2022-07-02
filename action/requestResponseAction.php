<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* Extending the wrapper class, which is a class that is used to wrap the request and response objects. */

class requestResponseAction extends wrapper
{
    /* This function is used to build the request and response objects. */
    public function onBuildContext(): void
    {
        /* Setting the response object to the key RESPONSE. */
        constants::set(YXORP_RESPONSE, new Response());
        /* Setting the request object to the key REQUEST. */
        constants::set(YXORP_REQUEST, Request::createFromGlobals());
        print_r(constants::get(YXORP_REQUEST));
        echo 1;
        exit('1243');
    }
}