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
        /* It's setting the `$YXORP_GLOBAL_PATTERN` variable to the value of the `YXORP_GLOBAL_PATTERN` constant. */
        $YXORP_GLOBAL_PATTERN = (array)constants::get(YXORP_GLOBAL_PATTERN);
        /* It's setting the `$YXORP_TARGET_PATTERN` variable to the value of the `YXORP_TARGET_PATTERN` constant. */
        $YXORP_TARGET_PATTERN = (array)constants::get(YXORP_TARGET_PATTERN);
        /* It's merging the keys of the `$YXORP_GLOBAL_PATTERN` and `$YXORP_TARGET_PATTERN` arrays. */
        $preg_search = generalHelper::array_merge_ignore(array_keys($YXORP_GLOBAL_PATTERN), array_keys($YXORP_TARGET_PATTERN));
        /* It's merging the values of the `$YXORP_GLOBAL_PATTERN` and `$YXORP_TARGET_PATTERN` arrays. */
        $preg_replace = generalHelper::array_merge_ignore(array_values($YXORP_GLOBAL_PATTERN), array_values($YXORP_TARGET_PATTERN));
        /* It's replacing the content of the response with the content of the `REWRITE` method. */
        print_r($preg_search);
        echo 123;
        print_r($preg_replace);
        exit('12445354657');
        $preg = preg_replace($preg_search, $preg_replace, constants::get(YXORP_RESPONSE)->getContent());
        /* It's setting the `$YXORP_TARGET_DOMAIN` variable to the value of the `YXORP_TARGET_DOMAIN` constant. */
        $YXORP_TARGET_DOMAIN = array(constants::get(YXORP_TARGET_DOMAIN));
        /* It's setting the `$YXORP_SITE_DOMAIN` variable to the value of the `YXORP_SITE_DOMAIN` constant. */
        $YXORP_SITE_DOMAIN = array(constants::get(YXORP_SITE_DOMAIN));
        /* It's setting the `$YXORP_GLOBAL_REPLACE` variable to the value of the `YXORP_GLOBAL_REPLACE` constant. */
        $YXORP_GLOBAL_REPLACE = (array)constants::get(YXORP_GLOBAL_REPLACE);
        /* It's setting the `$YXORP_TARGET_REPLACE` variable to the value of the `YXORP_TARGET_REPLACE` constant. */
        $YXORP_TARGET_REPLACE = (array)constants::get(YXORP_TARGET_REPLACE);
        /* It's merging the keys of the `$YXORP_GLOBAL_REPLACE` and `$YXORP_TARGET_REPLACE` arrays. */
        $str_search = generalHelper::array_merge_ignore($YXORP_TARGET_DOMAIN, array_keys($YXORP_GLOBAL_REPLACE), array_keys($YXORP_TARGET_REPLACE));
        /* It's merging the values of the `$YXORP_GLOBAL_REPLACE` and `$YXORP_TARGET_REPLACE` arrays. */
        $str_replace = generalHelper::array_merge_ignore($YXORP_SITE_DOMAIN, array_values($YXORP_GLOBAL_REPLACE), array_values($YXORP_TARGET_REPLACE));
        /* It's replacing the content of the response with the content of the `REWRITE` method. */
        $str = str_replace($str_search, $str_replace, $preg);
        /* It's setting the content of the response to the content of the `REWRITE` method. */
        (constants::get(YXORP_RESPONSE)->setContent($this->REWRITE($str)));
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