<?php
/* Importing the wrapper class from the yxorP\inc\http namespace. */


use yxorP\inc\http\wrapper;
use yxorp\inc\yP;

/* A class that extends the wrapper class. */

class onBuildExceptionAction extends wrapper
{
    /* A method that is called when an exception is thrown. */
    public function onBuildException($e): void
    {
        /* Checking if the `DEBUG` constant is set to `true` or if the server name does not contain a dot. If either of
        these conditions are met, the exception is printed. */
        if (MIME === 'text' . CHAR_SLASH . 'html' && MIME !== "document") header("Location: " . YXORP_GUZZLE_URL); else if (ENV_DEBUG) var_dump($e);
        yP::get(VAR_BUGSNAG)?->notifyException($e);
    }
}