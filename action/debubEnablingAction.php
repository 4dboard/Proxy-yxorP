<?php
/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\action\actionWrapper;
use yxorP\inc\constants;

/* A class that extends the actionWrapper class. */

class debubEnablingAction extends actionWrapper
{
    /* A method that is called before the action is executed. */
    public function buildIncludes(): void
    {
        /* It enables the error reporting if the `DEBUG` environment variable is set or if the server name does not contain
        a dot. */
        error_reporting(ENV_DEBUG || !(int)str_contains(constants::get(YXORP_SERVER)[YXORP_SERVER_NAME], CHAR_PERIOD));
    }
}