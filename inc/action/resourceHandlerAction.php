<?php

/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\wrapper;

/* Extending the wrapper class, which is a class that is used to handle events. */

class resourceHandlerAction extends wrapper
{
    /* A function that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the MIME type is text/html and if it is not a document, then it will redirect the user to the proxy
              URL. */
        if (MIME === 'text' . DIRECTORY_SEPARATOR . 'html' && MIME !== "document") header("Location: " . YXORP_PROXY_URL);
    }
}