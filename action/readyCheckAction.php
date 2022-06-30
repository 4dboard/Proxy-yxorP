<?php
/* Importing the Cache class from the Cache namespace. */

use yxorP\Cache\Cache;
use yxorP\http\actionWrapper;

/* Importing the actionWrapper class from the yxorP\http namespace. Extending the actionWrapper class, which is a class that is used to wrap events. */

class readyCheckAction extends actionWrapper
{
    /* A function that is called when the event is checked. */
    public function onCheck(): string
    {
        /* Checking if the cache is valid, and if it is, it returns the cached data. */
        if (Cache::cache()->isValid()) return Cache::cache()->get(); //Todo: Call final event
    }
}