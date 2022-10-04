<?php

/**
 * Importing the wrapper class from the yxorP\lib\http namespace.
 */

namespace yxorP\plugin;


use yxorP\lib\http\helpers;
use yxorP\lib\http\store;
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
        if (helpers::MIME() === VAR_TEXT_HTML) store::handler(YXORP_CONTENT, self::replace(store::handler(YXORP_CONTENT)));
    }

    /**
     * Defining a static method called mime.
     *
     */
    private static function replace($content): string
    {
        /**
         * Importing the `generalHelper` class from the `yxorP\lib\http` namespace. Importing the `minify` class from the `yxorP\lib\minify` namespace.   Extending the `wrapper` class.
         */
        return str_replace(array_keys(helpers::JSON()), array_values(helpers::JSON()), $content);
    }

}

