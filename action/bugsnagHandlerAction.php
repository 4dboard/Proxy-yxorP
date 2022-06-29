<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* A class that extends the EventWrapper class. */

class bugsnagHandlerAction extends EventWrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the BUGSNAG service is available and if it is, it is notifying the exception. */
        if (self::get('BUGSNAG')) self::get('BUGSNAG')->notifyException($e);
    }
}