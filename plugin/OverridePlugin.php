<?php use yxorP\http\EventWrapper;
use yxorP\http\GeneralHelper;
use yxorP\Minify\Minify;

class OverridePlugin extends EventWrapper
{
    public function onCompleted()
    {
        if (Constants::get('MIME') !== 'text/html' && Constants::get('MIME') !== 'application/javascript' && Constants::get('MIME') !== 'text/css' && Constants::get('MIME') !== 'application/xml' && !str_contains(Constants::get('MIME'), 'text')) return;
        Constants::get('RESPONSE')->setContent($this->REWRITE(str_replace(GeneralHelper::array_merge_ignore(array(Constants::get('TARGET_DOMAIN')), array_keys((array)Constants::get('REPLACE')), array_keys((array)Constants::get('TARGET')['replace'])), GeneralHelper::array_merge_ignore(array(Constants::get('SITE_DOMAIN')), array_values((array)Constants::get('REPLACE')), array_values((array)Constants::get('TARGET')['replace'])), preg_replace(GeneralHelper::array_merge_ignore(array_keys((array)Constants::get('PATTERN')), array_keys((array)Constants::get('TARGET')['pattern'])), GeneralHelper::array_merge_ignore(array_values((array)Constants::get('PATTERN')), array_keys((array)Constants::get('TARGET')['pattern'])), Constants::get('RESPONSE')->getContent()))));
    }

    public function REWRITE($content): string
    {
        return (Minify::createDefault())->process(Constants::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(\<(p|span|div|li|ul)(.*)\>(.*)\<\/(p|span|div|li|ul)\>)", static function ($m) {
            return str_replace(Constants::get(TOKEN_REWRITE_SEARCH), Constants::get(TOKEN_REWRITE_REPLACE), $m[3]);
        }, $content));
    }

}