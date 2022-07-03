<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\wrapper;

/* Extending the `wrapper` class. */

class globalCollectionAction extends wrapper
{
    /* A method that is called when the context is built. */
    public function onBuildContext(): void
    {
        /* Setting the `REPLACE` context variable to the value of the `replace` type in the `global` collection. */

    }
}