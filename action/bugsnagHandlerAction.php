<?php

/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* A class that extends the wrapper class. */

class bugsnagHandlerAction extends wrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Calling the notifyException method on the Bugsnag instance. */
        constants::get(VAR_BUGSNAG)?->notifyException($e);
    }
}