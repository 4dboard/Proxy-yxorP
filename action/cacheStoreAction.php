<?php
/* Importing the EventWrapper class from the yxorP\http namespace. */

use yxorP\cache\Cache;
use yxorP\http\EventWrapper;
use yxorP\inc\Constants;

/* Extending the EventWrapper class, which is a class that allows you to hook into the request lifecycle. */

class cacheStoreAction extends EventWrapper
{
    /* A method that is called when the request is completed. */
    public function onCompleted(): void
    {
        /* Checking if the cache is valid, and if it is not, it is setting the cache to the response content. */
        if (!Cache::cache()->isValid()) Cache::cache()->set(Constants::get('RESPONSE')->getContent());
    }
}