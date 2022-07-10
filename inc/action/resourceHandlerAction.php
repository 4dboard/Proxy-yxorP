<?php

/* Importing the wrapper class from the yxorP\http namespace. */

namespace yxorp\inc\action;

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* Extending the wrapper class, which is a class that is used to handle events. */

class resourceHandlerAction extends wrapper
{
    /* A function that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the MIME type is text/html and if it is not a document, then it will redirect the user to the proxy
              URL. */
        if (constants::get('MIME') === 'text' . DIRECTORY_SEPARATOR . 'html' && constants::get('MIME') !== "document") header("Location: " . YXORP_PROXY_URL);
    }
}