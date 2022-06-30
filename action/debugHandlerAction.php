<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;
use yxorP\inc\Constants;

/* A class that extends the EventWrapper class. */

class debugHandlerAction extends EventWrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the `DEBUG` constant is set to `true` or if the server name does not contain a dot. If either of
        these conditions are met, the exception is printed. */
        if (ENV_DEBUG || !(int)str_contains(Constants::get(TOKEN_SERVER)['SERVER_NAME'], '.')) echo $e->__toString();
    }
}