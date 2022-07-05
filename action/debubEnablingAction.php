<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* A class that extends the wrapper class. */

class debubEnablingAction extends wrapper
{
    /* A method that is called before the action is executed. */
    public function buildIncludes(): void
    {
        /* It enables the error reporting if the `DEBUG` environment variable is set or if the server name does not contain
        a dot. */
        error_reporting(ENV_DEBUG || !(int)str_contains((constants::get(VAR_SERVER))[YXORP_SERVER_NAME], CHAR_PERIOD));
    }
}