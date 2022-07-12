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
    private static function result($m)
    {
        print_r($m);
        return str_replace('This', 'That', $m[3]);
    }

    public function onEventWrite(): void
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (MIME === VAR_TEXT_HTML || MIME === 'application/javascript' || MIME === 'text/css' || MIME === 'application/xml' || str_contains(MIME, VAR_TEXT) || str_contains(MIME, VAR_HTML)) self::replace(constants::get(VAR_RESPONSE)->setContent(str_replace(generalHelper::array_merge_ignore(array(YXORP_TARGET_DOMAIN), array_keys((array)constants::get(YXORP_GLOBAL_REPLACE)), array_keys((array)constants::get(VAR_TARGET_REPLACE))), generalHelper::array_merge_ignore(array(YXORP_SITE_DOMAIN), array_values((array)constants::get(YXORP_GLOBAL_REPLACE)), array_values((array)constants::get(VAR_TARGET_REPLACE))), preg_replace(generalHelper::array_merge_ignore(array_keys((array)constants::get(YXORP_GLOBAL_PATTERN)), array_keys((array)constants::get(VAR_TARGET_PATTERN))), generalHelper::array_merge_ignore(array_values((array)constants::get(YXORP_GLOBAL_PATTERN)), array_values((array)constants::get(VAR_TARGET_PATTERN))), constants::get(VAR_RESPONSE)->getContent()))));
    }

    private static function replace($content)
    {
        /* Minifying the content of the response. Replacing the content of the response with the content of the `REWRITE` method. */
        if ($content) {
            echo MIME;
            echo VAR_TEXT_HTML;
            if (MIME !== VAR_TEXT_HTML) echo "true";
            constants::get(VAR_RESPONSE)->setContent((minify::createDefault())->process(self::callback($content)));
        }

    }

    private static function callback($content): string
    {
        if (MIME !== VAR_TEXT_HTML) {
            return $content;
        } else {
            exit(preg_replace_callback("(<(p|span|div|li|ul|x|y|z)(.*)>(.*)</(z|y|x|ul|li|div|span|p)>)", "self::result", $content));
            return preg_replace_callback("(<(p|span|div|li|ul|x|y|z)(.*)>(.*)</(z|y|x|ul|li|div|span|p)>)", "self::result", $content);
        }
    }

}