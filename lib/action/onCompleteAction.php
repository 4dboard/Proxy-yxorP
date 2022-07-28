<?php
/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */


use yxorP\app\lib\http\wrapper;
use yxorP\lib\constants;

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