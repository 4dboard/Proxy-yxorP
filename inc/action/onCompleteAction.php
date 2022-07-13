<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\http\cache;
use yxorP\inc\wrapper;

/* Extending the wrapper class, which is a class that allows you to hook into the request lifecycle. */

class onFinalAction extends wrapper
{
    /* A method that is called when the request is completed. */
    public function onFinal(): void
    {
        /* Checking if the cache is valid, and if it is not, it is setting the cache to the response content. */
        if (!cache::cache()->isValid()) cache::cache()->set(constants::get(VAR_RESPONSE)->getContent());
    }
}