<?php
/**
 * Importing the cache class from the cache namespace.
 */


use yxorP\lib\http\cache;
use yxorP\lib\http\wrapper;

/**
 * Importing the wrapper class from the yxorP\lib\http namespace. Extending the wrapper class, which is a class that is used to wrap events.
 */
class onCheckAction extends wrapper
{
    /**
     * A function that is called when the event is checked.
     *
     */
    public function onCheck(): self
    {
        /**
         * Checking if the cache is valid, and if it is, it returns the cached data.
         */
        return (cache::isValid()) ? cache::get() : $this;
    }
}