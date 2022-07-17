<?php
/* Importing the wrapper class from the yxorP\app\lib\http namespace. */


use yxorP\app\constants;
use yxorP\app\lib\http\cache;
use yxorP\app\lib\http\wrapper;
use yxorP\app\yP;

/* Extending the wrapper class, which is a class that allows you to hook into the request lifecycle. */

class onCompleteAction extends wrapper
{
    /* A method that is called when the request is completed. */
    public function onComplete(): void
    {
        /* Setting the cache to the global variables. */
        cache::store($GLOBALS[$_SERVER['HTTP_HOST']], CACHE_KEY_CONTEXT);
        /* Checking if the cache is valid, and if it is not, it is setting the cache to the response content. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        /* Getting the response object from the global variables. */
        cache::set(yP::get(VAR_RESPONSE)->getContent());
    }
}