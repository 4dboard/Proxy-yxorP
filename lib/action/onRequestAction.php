<?php
/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */


use yxorP\lib\http\helpers;
use yxorP\lib\http\store;
use yxorP\lib\http\wrapper;
use yxorP\lib\constants;

/**
 * Extending the wrapper class.
 */
class onRequestAction extends wrapper
{
    /**
     * A method that is called by the wrapper class.
     *
     */
    public function onRequest(): void
    {
        /**
         * Getting the request body from the input stream and setting it to the request object.
         */
        if ($_body = file_get_contents('php:' . CHAR_SLASH . CHAR_SLASH . 'input')) store::handler(VAR_REQUEST)->setBody(json_decode($_body, true), helpers::MIME());
    }
}