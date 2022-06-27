<?php use yxorP\Http\EventWrapper;
use yxorP\Http\GeneralHelper;
use yxorP\Minify\Minify;

class OverridePlugin extends EventWrapper
{
    public function onCompleted()
    {
        if (yxorP::get('MIME') !== 'text/html' && yxorP::get('MIME') !== 'application/javascript' && yxorP::get('MIME') !== 'text/css' && yxorP::get('MIME') !== 'application/xml' && !str_contains(yxorP::get('MIME'), 'text')) return;
        $GLOBAL_SEARCH_MERGE = GeneralHelper::array_merge_ignore(array_keys((array)yxorP::get('GLOBAL_REPLACE')), array_keys((array)yxorP::get('TARGET')['replace']), array(preg_replace("#^[^:/.]*[:/]+#", "", preg_replace("{/$}", "", urldecode(yxorP::get('TARGET_DOMAIN'))))));
        print_r($GLOBAL_SEARCH_MERGE);
        $GLOBAL_REPLACE_MERGE = GeneralHelper::array_merge_ignore(array_values((array)yxorP::get('GLOBAL_REPLACE')), array_values((array)yxorP::get('TARGET')['replace']), array(preg_replace("#^[^:/.]*[:/]+#", "", preg_replace("{/$}", "", urldecode(yxorP::get('SITE_DOMAIN'))))));
        print_r($GLOBAL_REPLACE_MERGE);
        $PATTERN_SEARCH_MERGE = GeneralHelper::array_merge_ignore(array_keys((array)yxorP::get('GLOBAL_PATTERN')), array_keys((array)yxorP::get('TARGET')['pattern']));
        print_r($PATTERN_SEARCH_MERGE);
        $PATTERN_REPLACE_MERGE = GeneralHelper::array_merge_ignore(array_values((array)yxorP::get('GLOBAL_PATTERN')), array_keys((array)yxorP::get('TARGET')['pattern']));
        print_r($PATTERN_REPLACE_MERGE);

        yxorP::get('RESPONSE')->setContent($this->REWRITE(str_replace($GLOBAL_SEARCH_MERGE, $GLOBAL_REPLACE_MERGE, preg_replace($PATTERN_SEARCH_MERGE, $PATTERN_REPLACE_MERGE, yxorP::get('RESPONSE')->getContent()))));
    }


    public function REWRITE($content): string
    {
        return (Minify::createDefault())->process(yxorP::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(<x>(.*?)</x>)", static function ($m) {
            return str_replace(yxorP::CSV(yxorP::get('PLUGIN_DIR') . '/override/global/includes/search_rewrite.csv'), yxorP::CSV(yxorP::get('PLUGIN_DIR') . '/override/global/includes/replace_rewrite.csv'), $m[1]);
        }, $content));
    }
}