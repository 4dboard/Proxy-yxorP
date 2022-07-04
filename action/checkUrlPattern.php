<?php
/* Importing the wrapper class from the yxorP\http namespace. */

use yxorP\inc\constants;
use yxorP\inc\generalHelper;
use yxorP\inc\wrapper;

/* Extending the wrapper class. */

class checkUrlPattern extends wrapper
{
    public function buildIncludes()
    {
        /* Getting the current URL. */
        $url = constants::get(YXORP_REQUEST)->getUri();

        /* Used to filter the events. */
        

        //Todo: Final event

    }
}