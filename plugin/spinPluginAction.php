<?php

/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */

namespace yxorP\plugin;

use yxorP\lib\constants;
use yxorP\lib\http\wrapper;

/**
 * Extending the wrapper class.
 */
class spinPluginAction extends wrapper
{
    /**
     * A method that is called before the request is processed.
     *
     */
    public function onComplete(): void
    {
    }

}

