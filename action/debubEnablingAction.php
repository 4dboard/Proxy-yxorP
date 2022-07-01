<?php
/* Importing the ActionWrapper class from the yxorP\http namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\constants;

/* A class that extends the ActionWrapper class. */

class debubEnablingAction extends ActionWrapper
{
    /* A method that is called before the action is executed. */
    public function buildIncludes(): void
    {
        /* It enables the error reporting if the `DEBUG` environment variable is set or if the server name does not contain
        a dot. */
        error_reporting(ENV_DEBUG || !(int)str_contains(constants::get(TOKEN_SERVER)['SERVER_NAME'], '.'));
    }
}