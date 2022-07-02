<?php

/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\action\actionWrapper;
use yxorP\inc\constants;

/* A class that extends the actionWrapper class. */

class bugsnagHandlerAction extends actionWrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Calling the notifyException method on the Bugsnag instance. */
        constants::get(YXORP_BUGSNAG)?->notifyException($e);
    }
}