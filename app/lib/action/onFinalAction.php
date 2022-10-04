<?php
/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */


use yxorP\app\lib\http\cache;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

/**
 * Extending the wrapper class, which is a class that allows you to hook into the request lifecycle.
 */
class onFinalAction extends wrapper
{
    /**
     * A method that is called when the request is completed.
     *
     */
    public function onFinal(): void
    {
        /**
         * Checking if the cache is valid, and if it is not, it is setting the cache to the response content.
         * Getting the response object from the global variables.
         */
        cache::set($content = store::handler(YXORP_CONTENT));
    }
}
