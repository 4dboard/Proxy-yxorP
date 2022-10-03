<?php

/**
 * Importing the wrapper class from the yxorP\app\lib\http namespace.
 */

namespace yxorP\plugin;


use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\store;
use yxorP\app\lib\http\wrapper;

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
        if (helpers::MIME() === VAR_TEXT_HTML) store::handler(YXORP_CONTENT, str_replace(array_keys(helpers::JSON()), array_values(helpers::JSON()), store::handler(YXORP_CONTENT)));
    }


}

