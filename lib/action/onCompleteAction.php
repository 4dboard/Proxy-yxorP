<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\wrapper;

/**
 * Extending the wrapper class, which is a class that allows you to hook into the request lifecycle.
 */
class onCompleteAction extends wrapper
{
    /**
     * A method that is called when the request is completed.
     *
     */
    public function onComplete(): void
    {
    }
}
