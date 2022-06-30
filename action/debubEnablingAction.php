<?php
/* Importing the actionWrapper class from the yxorP\http namespace. */

use yxorP\http\actionWrapper;
use yxorP\inc\Constants;

/* A class that extends the actionWrapper class. */

class debubEnablingAction extends actionWrapper
{
    /* A method that is called before the action is executed. */
    public function buildIncludes(): void
    {
        /* It enables the error reporting if the `DEBUG` environment variable is set or if the server name does not contain
        a dot. */
        error_reporting(ENV_DEBUG || !(int)str_contains(Constants::get(TOKEN_SERVER)['SERVER_NAME'], '.'));
    }
}