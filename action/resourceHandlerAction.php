<?php

/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\inc\actionWrapper;
use yxorP\inc\constants;

/* Extending the actionWrapper class, which is a class that is used to handle events. */

class resourceHandlerAction extends actionWrapper
{
    /* A function that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the MIME type is text/html and if it is not a document, then it will redirect the user to the proxy
              URL. */
        if (constants::get('MIME') === 'text' . DIRECTORY_SEPARATOR . 'html' && constants::get('MIME') != "document") header("Location: " . constants::get('PROXY_URL')->__toString());
    }
}