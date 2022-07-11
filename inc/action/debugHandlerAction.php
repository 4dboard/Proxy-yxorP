<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\constants;
use yxorP\inc\wrapper;

/* A class that extends the wrapper class. */

class debugHandlerAction extends wrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the `DEBUG` constant is set to `true` or if the server name does not contain a dot. If either of
        these conditions are met, the exception is printed. */
        if (ENV_DEBUG || !(int)str_contains(constants::get(VAR_SERVER)[YXORP_HTTP_HOST], CHAR_PERIOD)) var_dump($e);

    }
}