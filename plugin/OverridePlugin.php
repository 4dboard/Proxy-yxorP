<?php
/* Importing the `EventWrapper` class from the `yxorP\http` namespace. */

use yxorP\http\EventWrapper;
use yxorP\http\GeneralHelper;
use yxorP\Minify\Minify;

/* Importing the `GeneralHelper` class from the `yxorP\http` namespace. */

/* Importing the `Minify` class from the `yxorP\Minify` namespace. */

/* Extending the `EventWrapper` class. */

class OverridePlugin extends EventWrapper
{
    /* Overriding the `onCompleted` method of the `EventWrapper` class. */
    public function onCompleted()
    {
        /* Checking if the content type is not HTML, JavaScript, CSS, XML or text. If it is not, it will return. */
        if (Constants::get('MIME') !== 'text/html' && Constants::get('MIME') !== 'application/javascript' && Constants::get('MIME') !== 'text/css' && Constants::get('MIME') !== 'application/xml' && !str_contains(Constants::get('MIME'), 'text')) return;
        /* Replacing the content of the response with the content of the `REWRITE` method. */
        Constants::get('RESPONSE')->setContent($this->REWRITE(str_replace(GeneralHelper::array_merge_ignore(array(Constants::get('TARGET_DOMAIN')), array_keys((array)Constants::get('REPLACE')), array_keys((array)Constants::get('TARGET')['replace'])), GeneralHelper::array_merge_ignore(array(Constants::get('SITE_DOMAIN')), array_values((array)Constants::get('REPLACE')), array_values((array)Constants::get('TARGET')['replace'])), preg_replace(GeneralHelper::array_merge_ignore(array_keys((array)Constants::get('PATTERN')), array_keys((array)Constants::get('TARGET')['pattern'])), GeneralHelper::array_merge_ignore(array_values((array)Constants::get('PATTERN')), array_keys((array)Constants::get('TARGET')['pattern'])), Constants::get('RESPONSE')->getContent()))));
    }

    /* Minifying the content of the response. */
    public function REWRITE($content): string
    {
        /* Minifying the content of the response. */
        return (Minify::createDefault())->process(Constants::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(\<(p|span|div|li|ul)(.*)\>(.*)\<\/(p|span|div|li|ul)\>)", static function ($m) {
            /* Replacing the content of the response with the content of the `REWRITE` method. */
            return str_replace(Constants::get(TOKEN_REWRITE_SEARCH), Constants::get(TOKEN_REWRITE_REPLACE), $m[3]);
        }, $content));
    }

}