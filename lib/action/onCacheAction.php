<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\wrapper;

/**
 * Extending the wrapper class, which is a class that allows you to hook into the request lifecycle.
 */
class onCacheAction extends wrapper
{
    /**
     * A function that is called when the event is checked.
     *
     */
    public function onCache(): void
    {
    }
}
