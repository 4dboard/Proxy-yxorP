<?php

/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;

/* Extending the ActionWrapper class, which is a class that is used to handle events. */

class resourceHandlerAction extends ActionWrapper
{
    /* A function that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the MIME type is text/html and if it is not a document, then it will redirect the user to the proxy
              URL. */
        if (Constants::get('MIME') === 'text' . DIRECTORY_SEPARATOR . 'html' && Constants::get('MIME') != "document") header("Location: " . Constants::get('PROXY_URL')->__toString());
    }
}