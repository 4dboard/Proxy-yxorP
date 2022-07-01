<?php

/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;

/* A class that extends the ActionWrapper class. */

class bugsnagHandlerAction extends ActionWrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Calling the notifyException method on the Bugsnag instance. */
        constants::get(TOKEN_BUGSNAG)?->notifyException($e);
    }
}