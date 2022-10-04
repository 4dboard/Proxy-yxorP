<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\request;
use yxorP\lib\http\store;
use yxorP\lib\http\wrapper;

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
