<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\http\cache;
use yxorP\inc\http\wrapper;
use yxorP\inc\yP;

/* Extending the wrapper class, which is a class that allows you to hook into the request lifecycle. */

class onCompleteAction extends wrapper
{
    /* A method that is called when the request is completed. */
    public function onComplete(): void
    {
        /* Setting the cache to the global variables. */
        cache::store($GLOBALS[$_SERVER['HTTP_HOST']], CACHE_KEY_CONTEXT);
        /* Checking if the cache is valid, and if it is not, it is setting the cache to the response content. */
        cache::set(print_r(yP::get(VAR_RESPONSE)->getContent(), true));
    }
}