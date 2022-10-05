<?php
/**
 * Importing the cache class from the cache namespace.
 */


use yxorP\lib\http\cache;
use yxorP\lib\http\wrapper;

/**
 * Importing the wrapper class from the yxorP\lib\http namespace. Extending the wrapper class, which is a class that is used to wrap events.
 */
class onCacheAction extends wrapper
{
    /**
     * A function that is called when the event is checked.
     *
     */
    public function onCache(): self
    {
    }
}
