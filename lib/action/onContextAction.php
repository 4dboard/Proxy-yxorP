<?php
/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */


use yxorP\app\constants;
use yxorP\app\lib\http\request;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

/**
 * Extending the wrapper class, which is a class that is used to wrap the request and response objects.
 */
class onContextAction extends wrapper
{
    /**
     * This function is used to build the request and response objects.
     *
     */
    public function onContext(): void
    {
        /**
         * Setting the request object to the key REQUEST.
         */
        store::handler(VAR_REQUEST, Request::createFromGlobals());
    }
}