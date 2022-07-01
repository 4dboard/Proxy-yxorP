<?php
/* Importing the `ActionWrapper` class from the `yxorP\http` namespace. */

use yxorP\inc\ActionWrapper;
use yxorP\inc\Constants;
use yxorP\inc\generalHelper;
use yxorP\Minify\Minify;

/* Importing the `generalHelper` class from the `yxorP\http` namespace. */

/* Importing the `Minify` class from the `yxorP\Minify` namespace. */

/* Extending the `ActionWrapper` class. */

class overridePluginAction extends ActionWrapper
{
    /* Overriding the `onCompleted` method of the `ActionWrapper` class. */
    public function onCompleted()
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (Constants::get('MIME') !== 'text/html' && Constants::get('MIME') !== 'application/javascript' && Constants::get('MIME') !== 'text/css' && Constants::get('MIME') !== 'application/xml' && !str_contains(Constants::get('MIME'), 'text')) return;
        /* Replacing the content of the response with the content of the `REWRITE` method. */
        Constants::get(TOKEN_RESPONSE)->setContent($this->REWRITE(str_replace(generalHelper::array_merge_ignore(array(Constants::get('TARGET_DOMAIN')), array_keys((array)Constants::get('REPLACE')), array_keys((array)Constants::get('TARGET')['replace'])), generalHelper::array_merge_ignore(array(Constants::get('SITE_DOMAIN')), array_values((array)Constants::get('REPLACE')), array_values((array)Constants::get('TARGET')['replace'])), preg_replace(generalHelper::array_merge_ignore(array_keys((array)Constants::get('PATTERN')), array_keys((array)Constants::get('TARGET')['pattern'])), generalHelper::array_merge_ignore(array_values((array)Constants::get('PATTERN')), array_keys((array)Constants::get('TARGET')['pattern'])), Constants::get(TOKEN_RESPONSE)->getContent()))));
    }

    /* Minifying the content of the response. */
    public function REWRITE($content): string
    {
        /* It's setting the `TOKEN_REWRITE_SEARCH` constant to the value of the `PATH_REWRITE_SEARCH` constant. */
        Constants::set(TOKEN_REWRITE_SEARCH, generalHelper::CSV(PATH_REWRITE_SEARCH));
        /* It's setting the `TOKEN_REWRITE_REPLACE` constant to the value of the `PATH_REWRITE_REPLACE` constant. */
        Constants::set(TOKEN_REWRITE_REPLACE, generalHelper::CSV(PATH_REWRITE_REPLACE));
        /* Minifying the content of the response. */
        return (Minify::createDefault())->process(Constants::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(<(p|span|div|li|ul)(.*)>(.*)</(p|span|div|li|ul)>)", static function ($m) {
            /* Replacing the content of the response with the content of the `REWRITE` method. */
            return str_replace(Constants::get(TOKEN_REWRITE_SEARCH), Constants::get(TOKEN_REWRITE_REPLACE), $m[3]);
        }, $content));
    }

}