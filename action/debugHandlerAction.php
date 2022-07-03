<?php
/* Importing the wrapper class from the yxorP\http namespace. */

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
        if (ENV_DEBUG || !(int)str_contains((constants::get(YXORP_SERVER))[YXORP_SERVER_NAME], CHAR_PERIOD)) echo $e->__toString();

    }
}