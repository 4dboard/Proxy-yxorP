<?php
/* Importing the cache class from the cache namespace. */

use yxorP\http\cache;
use yxorP\inc\actionWrapper;

/* Importing the actionWrapper class from the yxorP\http namespace. Extending the actionWrapper class, which is a class that is used to wrap events. */

class readyCheckAction extends actionWrapper
{
    /* A function that is called when the event is checked. */
    public function onCheck(): string
    {
        /* Checking if the cache is valid, and if it is, it returns the cached data. */
        if (cache::cache()->isValid()) return cache::cache()->get(); //Todo: Call final event
    }
}