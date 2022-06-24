<?php

use yxorP\Http\EventWrapper;
use yxorP\Minify\Minify;

class OverridePlugin extends EventWrapper
{
    public function onCompleted()
    {

        if (yxorP::get('MIME') !== 'text/html' && yxorP::get('MIME') !== 'application/javascript' && yxorP::get('MIME') !== 'text/css' && yxorP::get('MIME') !== 'application/xml' && !str_contains(yxorP::get('MIME'), 'text')) return;

        $GLOBAL_SEARCH_MERGE = $this->merge($this->merge($this->merge(array_keys(yxorP::get('SITE_CONTEXT')->GLOBAL_REPLACE ?: []), array_keys(yxorP::get('SITE_CONTEXT')->SITE['replace'] ?: []), array(preg_replace("#^[^:/.]*[:/]+#", "", preg_replace("{/$}", "", urldecode(yxorP::get('SITE_CONTEXT')->TARGET_DOMAIN)))))));

        $GLOBAL_REPLACE_MERGE = $this->merge($this->merge($this->merge(array_values(yxorP::get('SITE_CONTEXT')->GLOBAL_REPLACE ?: []), array_values(yxorP::get('SITE_CONTEXT')->SITE['replace'] ?: []), array(preg_replace("#^[^:/.]*[:/]+#", "", preg_replace("{/$}", "", urldecode(yxorP::get('SITE_CONTEXT')->SITE_DOMAIN)))))));

        $PATTERN_SEARCH_MERGE = array_filter($this->merge(array_keys(yxorP::get('SITE_CONTEXT')->GLOBAL_PATTERN ?: []), array_keys(yxorP::get('SITE_CONTEXT')->SITE['pattern'] ?: [])));

        $PATTERN_REPLACE_MERGE = array_filter($this->merge(array_values(yxorP::get('SITE_CONTEXT')->GLOBAL_PATTERN ?: []), array_values(yxorP::get('SITE_CONTEXT')->SITE['pattern'] ?: [])));

        yxorP::get('RESPONSE')->setContent($this->REWRITE(str_replace($GLOBAL_SEARCH_MERGE, $GLOBAL_REPLACE_MERGE, preg_replace($PATTERN_SEARCH_MERGE, $PATTERN_REPLACE_MERGE, yxorP::get('RESPONSE')->getContent()))));
    }

    public function merge($array1, $array2 = null, $array3 = null): array
    {
        return (($array1 && is_array($array1) && $array2 && is_array($array2) && $array3 && is_array($array3))) ? array_filter(array_merge(array_merge((array)$array1, (array)$array2), (array)$array3), static fn($value) => !is_null($value) && $value !== '') : (($array1 && is_array($array1) && $array2 && is_array($array2)) ? array_filter(array_merge((array)$array1, (array)$array2), static fn($value) => !is_null($value) && $value !== '') : array_filter((array)$array1, static fn($value) => !is_null($value) && $value !== ''));
    }

    public function REWRITE($content): string
    {
        return (Minify::createDefault())->process(yxorP::get('MIME') !== 'text/html' ? $content : preg_replace_callback("(<x>(.*?)</x>)", static function ($m) {
            return str_replace(yxorP::CSV(yxorP::get('PLUGIN_DIR') . '/override/global/includes/search_rewrite.csv'), yxorP::CSV(yxorP::get('PLUGIN_DIR') . '/override/global/includes/replace_rewrite.csv'), $m[1]);
        }, $content));
    }
}