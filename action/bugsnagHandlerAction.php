<?php

/* Importing the EventWrapper class from the yxorP\http namespace. */

/* A class that extends the EventWrapper class. */

class Constants::get(BUGSNAG)HandlerAction extends EventWrapper
{
    /* A method that is called when an exception is thrown. */
    public
    function onBuildException($e): void
    {
        /* Checking if the Constants::get(BUGSNAG) service is available and if it is, it is notifying the exception. */
        Constants::get(BUGSNAG)?->notifyException($e);
    }
}