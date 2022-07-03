<?php
/* Importing the `wrapper` class from the `yxorP\http` namespace. */

use yxorP\inc\constants;
use yxorP\inc\generalHelper;
use yxorP\inc\wrapper;
use yxorP\minify\minify;

/* Importing the `generalHelper` class from the `yxorP\http` namespace. */

/* Importing the `minify` class from the `yxorP\minify` namespace. */

/* Extending the `wrapper` class. */

class overridePluginAction extends wrapper
{
    /* Overriding the `onEventComplete` method of the `wrapper` class. */
    public function onEventWrite()
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (constants::get('MIME') !== VAR_TEXT_HTML && constants::get('MIME') !== 'application/javascript' && constants::get('MIME') !== 'text/css' && constants::get('MIME') !== 'application/xml' && !str_contains(constants::get('MIME'), VAR_TEXT) && !str_contains(constants::get('MIME'), VAR_HTML)) return;
        /* Replacing the content of the response with the content of the `REWRITE` method. */
        $preg_search = generalHelper::array_merge_ignore(array_keys((array)constants::get(YXORP_GLOBAL_PATTERN)), array_keys((array)constants::get(YXORP_TARGET_PATTERN)));
        $preg_replace = generalHelper::array_merge_ignore(array_values((array)constants::get(YXORP_GLOBAL_PATTERN)), array_values((array)constants::get(YXORP_TARGET_PATTERN)));
        $preg_replace = preg_replace($preg_search, $preg_replace, constants::get(YXORP_RESPONSE)->getContent());
        $str_replace = str_replace(generalHelper::array_merge_ignore([constants::get(YXORP_TARGET_DOMAIN)], array_keys((array)constants::get(YXORP_GLOBAL_REPLACE)), array_keys((array)constants::get(YXORP_TARGET_REPLACE))), generalHelper::array_merge_ignore([constants::get(YXORP_SITE_DOMAIN)], array_values((array)constants::get(YXORP_GLOBAL_REPLACE)), array_values((array)constants::get(YXORP_TARGET_REPLACE))), $preg_replace);
        (constants::get(YXORP_RESPONSE)->setContent($this->REWRITE($str_replace)));
    }

    /* Minifying the content of the response. */
    public function REWRITE($content): string
    {
        /* It's setting the `YXORP_REWRITE_SEARCH` constant to the value of the `PATH_REWRITE_SEARCH` constant. */
        constants::set(YXORP_REWRITE_SEARCH, generalHelper::CSV(PATH_REWRITE_SEARCH));
        /* It's setting the `YXORP_REWRITE_REPLACE` constant to the value of the `PATH_REWRITE_REPLACE` constant. */
        constants::set(YXORP_REWRITE_REPLACE, generalHelper::CSV(PATH_REWRITE_REPLACE));
        /* Minifying the content of the response. */
        return (minify::createDefault())->process(constants::get('MIME') !== VAR_TEXT_HTML ? $content : preg_replace_callback("(<(p|span|div|li|ul)(.*)>(.*)</(p|span|div|li|ul)>)", static function ($m) {
            /* Replacing the content of the response with the content of the `REWRITE` method. */
            return str_replace(constants::get(YXORP_REWRITE_SEARCH), constants::get(YXORP_REWRITE_REPLACE), $m[3]);
        }, $content));
    }

}