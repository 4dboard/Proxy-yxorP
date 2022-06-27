<?php use yxorP\Http\EventWrapper;
use yxorP\Http\GeneralHelper;
use yxorP\Minify\Minify;

class OverridePlugin extends EventWrapper
{
    public function onCompleted()
    {
        if (yxorP::get('MIME') !== 'text/html' && yxorP::get('MIME') !== 'application/javascript' && yxorP::get('MIME') !== 'text/css' && yxorP::get('MIME') !== 'application/xml' && !str_contains(yxorP::get('MIME'), 'text')) return;
        yxorP::get('RESPONSE')->setContent($this->REWRITE(str_replace(GeneralHelper::array_merge_ignore(array(yxorP::get('TARGET_DOMAIN')), array_keys((array)yxorP::get('REPLACE')), array_keys((array)yxorP::get('TARGET')['replace'])), GeneralHelper::array_merge_ignore(array(yxorP::get('SITE_DOMAIN')), array_values((array)yxorP::get('REPLACE')), array_values((array)yxorP::get('TARGET')['replace'])), preg_replace(GeneralHelper::array_merge_ignore(array_keys((array)yxorP::get('PATTERN')), array_keys((array)yxorP::get('TARGET')['pattern'])), GeneralHelper::array_merge_ignore(array_values((array)yxorP::get('PATTERN')), array_keys((array)yxorP::get('TARGET')['pattern'])), yxorP::get('RESPONSE')->getContent()))));
    }

    public function REWRITE($content): string
    {

        $GLOBALS['SEARCH'] = GeneralHelper::CSV(yxorP::get('PLUGIN_DIR') . '/override/global/includes/search_rewrite.csv');
        $GLOBALS['REPLACE'] = GeneralHelper::CSV(yxorP::get('PLUGIN_DIR') . '/override/global/includes/replace_rewrite.csv');
        return (Minify::createDefault())->process(yxorP::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(\<(p|span|div|li|ul)(.*)\>(.*)\<\/(p|span|div|li|ul)\>)", static function ($m) {
            return str_replace($GLOBALS['SEARCH'], $GLOBALS['REPLACE'], $m[3]);
        }, $content));
    }

}