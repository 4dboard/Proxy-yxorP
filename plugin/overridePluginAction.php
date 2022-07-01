<?php
/* Importing the `wrapper` class from the `yxorP\http` namespace. */

use yxorP\http\wrapper;
use yxorP\inc\constants;
use yxorP\inc\generalHelper;
use yxorP\minify\minify;

/* Importing the `generalHelper` class from the `yxorP\http` namespace. */

/* Importing the `minify` class from the `yxorP\minify` namespace. */

/* Extending the `wrapper` class. */

class overridePluginAction extends wrapper
{
    /* Overriding the `onCompleted` method of the `wrapper` class. */
    public function onCompleted()
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (constants::get('MIME') !== 'text/html' && constants::get('MIME') !== 'application/javascript' && constants::get('MIME') !== 'text/css' && constants::get('MIME') !== 'application/xml' && !str_contains(constants::get('MIME'), 'text')) return;
        /* Replacing the content of the response with the content of the `REWRITE` method. */
        constants::get(YXORP_RESPONSE)->setContent($this->REWRITE(str_replace(generalHelper::array_merge_ignore(array(constants::get('TARGET_DOMAIN')), array_keys((array)constants::get('REPLACE')), array_keys((array)constants::get('TARGET')['replace'])), generalHelper::array_merge_ignore(array(constants::get('SITE_DOMAIN')), array_values((array)constants::get('REPLACE')), array_values((array)constants::get('TARGET')['replace'])), preg_replace(generalHelper::array_merge_ignore(array_keys((array)constants::get('PATTERN')), array_keys((array)constants::get('TARGET')['pattern'])), generalHelper::array_merge_ignore(array_values((array)constants::get('PATTERN')), array_keys((array)constants::get('TARGET')['pattern'])), constants::get(YXORP_RESPONSE)->getContent()))));
    }

    /* Minifying the content of the response. */
    public function REWRITE($content): string
    {
        /* It's setting the `YXORP_REWRITE_SEARCH` constant to the value of the `PATH_REWRITE_SEARCH` constant. */
        constants::set(YXORP_REWRITE_SEARCH, generalHelper::CSV(PATH_REWRITE_SEARCH));
        /* It's setting the `YXORP_REWRITE_REPLACE` constant to the value of the `PATH_REWRITE_REPLACE` constant. */
        constants::set(YXORP_REWRITE_REPLACE, generalHelper::CSV(PATH_REWRITE_REPLACE));
        /* Minifying the content of the response. */
        return (minify::createDefault())->process(constants::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(<(p|span|div|li|ul)(.*)>(.*)</(p|span|div|li|ul)>)", static function ($m) {
            /* Replacing the content of the response with the content of the `REWRITE` method. */
            return str_replace(constants::get(YXORP_REWRITE_SEARCH), constants::get(YXORP_REWRITE_REPLACE), $m[3]);
        }, $content));
    }

}