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
        if (helpers::MIME() === VAR_TEXT_HTML) store::handler(YXORP_CONTENT, self::replace(store::handler(YXORP_CONTENT)));
    }

    /**
     * Defining a static method called mime.
     *
     */
    private static function replace($content): string
    {
        store::handler(YXORP_REWRITE, null, 'yxorP\app\lib\http\helpers::JSON');
        /**
         * Importing the `generalHelper` class from the `yxorP\app\lib\http` namespace. Importing the `minify` class from the `yxorP\app\lib\minify` namespace.   Extending the `wrapper` class.
         */
        return preg_replace_callback_array(['~\<x(.*?)x\>~is' => function ($m) {
            return '<x' . str_replace(array_keys(store::handler(YXORP_REWRITE)), array_values(store::handler(YXORP_REWRITE)), $m[1]) . 'x>';
        }], $content) ?: $content;
    }

}

