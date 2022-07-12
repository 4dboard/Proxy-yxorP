<?php
/* Importing the `wrapper` class from the `yxorP\inc\http` namespace. */

use yxorP\inc\constants;
use yxorP\inc\generalHelper;
use yxorP\inc\minify\minify;
use yxorP\inc\wrapper;

/* Importing the `generalHelper` class from the `yxorP\inc\http` namespace. */

/* Importing the `minify` class from the `yxorP\inc\minify` namespace. */

/* Extending the `wrapper` class. */

class overrideResultAction extends wrapper
{
    /* Overriding the `onEventWrite` method of the `wrapper` class. */
    public function onEventWrite(): void
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (MIME === VAR_TEXT_HTML || MIME === 'application/javascript' || MIME === 'text/css' || MIME === 'application/xml' || str_contains(MIME, VAR_TEXT) || str_contains(MIME, VAR_HTML)) self::replace(constants::get(VAR_RESPONSE)->setContent(str_replace(generalHelper::array_merge_ignore(array(YXORP_TARGET_DOMAIN), array_keys((array)constants::get(YXORP_GLOBAL_REPLACE)), array_keys((array)constants::get(VAR_TARGET_REPLACE))), generalHelper::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)constants::get(YXORP_GLOBAL_REPLACE)), array_values((array)constants::get(VAR_TARGET_REPLACE))), preg_replace(generalHelper::array_merge_ignore(array_keys((array)constants::get(YXORP_GLOBAL_PATTERN)), array_keys((array)constants::get(VAR_TARGET_PATTERN))), generalHelper::array_merge_ignore(array_values((array)constants::get(YXORP_GLOBAL_PATTERN)), array_values((array)constants::get(VAR_TARGET_PATTERN))), constants::get(VAR_RESPONSE)->getContent()))));
    }

    private static function replace($content)
    {
        /* Minifying the content of the response. Replacing the content of the response with the content of the `REWRITE` method. */
        if ($content) {
            echo 'xxxx';
            constants::get(VAR_RESPONSE)->setContent((minify::createDefault())->process(MIME !== VAR_TEXT_HTML ? $content : preg_replace_callback("(<(p|span|div|li|ul)(.*)>(.*)</(p|span|div|li|ul)>)", static function ($m) {

                echo 'xxxx';
                return str_replace(file(__DIR__ . '../data/search_rewrite.csv'), file(__DIR__ . '../data/replace_rewrite.csv'), $m[3]);
            }, $content)));
        }

    }

}