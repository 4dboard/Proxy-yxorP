<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\http\EventWrapper;

/* A class that extends the EventWrapper class. */

class debubEnablingAction extends EventWrapper
{
    /* A method that is called before the action is executed. */
    public function buildIncludes(): void
    {
        /* It enables the error reporting if the `DEBUG` environment variable is set or if the server name does not contain
        a dot. */
        error_reporting(ENV_DEBUG || !(int)str_contains(Constants::get(TOKEN_SERVER)['SERVER_NAME'], '.'));
    }
}