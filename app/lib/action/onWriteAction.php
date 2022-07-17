<?php
/* Importing the `wrapper` class from the `yxorP\app\lib\http` namespace. */

use yxorP\app\constants;
use yxorP\app\lib\http\helpers;
use yxorP\app\lib\http\wrapper;
use yxorP\app\lib\minify\minify;
use yxorP\app\yP;

/* Importing the `generalHelper` class from the `yxorP\app\lib\http` namespace. */

/* Importing the `minify` class from the `yxorP\app\lib\minify` namespace. */

/* Extending the `wrapper` class. */

class onWriteAction extends wrapper
{
    private static function replace($content)
    {
        /* Minifying the content of the response. Replacing the content of the response with the content of the `REWRITE` method. */
        if ($content) yP::get(VAR_RESPONSE)->setContent((minify::createDefault())->process(preg_replace_callback_array(['~\<x(.*?)x\>~is' => function ($m) {
            return '<x' . str_replace(array_keys(yP::get(YXORP_REWRITE)), array_values(yP::get(YXORP_REWRITE)), $m[1]) . 'x>';
        },], $content)));

    }

    public function onWrite(): void
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (MIME === VAR_TEXT_HTML || MIME === 'application/javascript' || MIME === 'text/css' || MIME === 'application/xml' || str_contains(MIME, VAR_TEXT) || str_contains(MIME, VAR_HTML))
            $content = str_replace(helpers::array_merge_ignore(array(YXORP_TARGET_DOMAIN), array_keys((array)yP::get(YXORP_GLOBAL_REPLACE)), array_keys((array)yP::get(VAR_TARGET_REPLACE))), helpers::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)yP::get(YXORP_GLOBAL_REPLACE)), array_values((array)yP::get(VAR_TARGET_REPLACE))), preg_replace(helpers::array_merge_ignore(array_keys((array)yP::get(YXORP_GLOBAL_PATTERN)), array_keys((array)yP::get(VAR_TARGET_PATTERN))), helpers::array_merge_ignore(array_values((array)yP::get(YXORP_GLOBAL_PATTERN)), array_values((array)yP::get(VAR_TARGET_PATTERN))), yP::get(VAR_RESPONSE)->getBody()));

        /* Minifying the content of the response. Replacing the content of the response with the content of the `REWRITE` method. */
        cache::set(CACHE_KEY, (minify::createDefault())->process(preg_replace_callback_array(['~\<x(.*?)x\>~is' => function ($m) {
            return '<x' . str_replace(array_keys(yP::get(YXORP_REWRITE)), array_values(yP::get(YXORP_REWRITE)), $m[1]) . 'x>';
        },], $content)) ?: $content);
    }

}