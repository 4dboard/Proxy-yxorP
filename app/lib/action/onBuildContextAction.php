<?php
/* Importing the wrapper class from the yxorP\app\lib\http namespace. */


use yxorP\app\constants;
use yxorP\app\lib\http\request;
use yxorP\app\lib\http\wrapper;
use yxorP\app\yP;

/* Extending the wrapper class, which is a class that is used to wrap the request and response objects. */

class onBuildContextAction extends wrapper
{
    /* This function is used to build the request and response objects. */
    public function onBuildContext(): void
    {
        /* Setting the request object to the key REQUEST. */
        yP::tmp(VAR_REQUEST, Request::createFromGlobals());
    }
}