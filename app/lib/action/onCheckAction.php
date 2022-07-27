<?php
/**
 * Importing the cache class from the cache namespace.
 */


use yxorP\app\lib\http\cache;
use yxorP\app\lib\http\wrapper;

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace. Extending the wrapper class, which is a class that is used to wrap events.
 */
class onCheckAction extends wrapper
{
    /**
     * A function that is called when the event is checked.
     *
     */
    public function onCheck(): void
    {
        /**
         * Checking if the cache is valid, and if it is, it returns the cached data.
         */
        if (cache::isValid()) cache::get();
    }
}