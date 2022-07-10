<?php
/* Importing the wrapper class from the yxorP\http namespace. */

namespace yxorp\inc\action;

use yxorP\http\cache;
use yxorP\inc\constants;
use yxorP\inc\wrapper;
use const VAR_RESPONSE;

/* Extending the wrapper class, which is a class that allows you to hook into the request lifecycle. */

class cacheStoreAction extends wrapper
{
    /* A method that is called when the request is completed. */
    public function onEventFinal(): void
    {
        /* Checking if the cache is valid, and if it is not, it is setting the cache to the response content. */
        if (!cache::cache()->isValid()) cache::cache()->set(constants::get(VAR_RESPONSE)->getContent());
    }
}