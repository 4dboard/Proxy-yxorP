<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use errorHandler\errorHandler;
use yxorP\inc\wrapper;
use function errorHandler\reportErrors;

/* A class that extends the wrapper class. */

class debubEnablingAction extends wrapper
{
    /* A method that is called before the action is executed. */
    public function onBuildIncludes(): void
    {
        if (!ENV_DEBUG) return;
        ini_set('display_startup_errors', 1);
        ini_set('display_errors', 1);
        error_reporting(1);
    }
}