<?php /* yxorP */

use yxorP\http\ProxyEvent;
use yxorP\http\HtmlMinify;

class OverridePlugin extends AbstractPlugin
{

    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public function onCompleted(ProxyEvent $event)
    {

        if ($GLOBALS['MIME'] !== 'text/html' && $GLOBALS['MIME'] !== 'application/javascript' && $GLOBALS['MIME'] !== 'text/css' && $GLOBALS['MIME'] !== 'application/xml' && !str_contains($GLOBALS['MIME'], 'text')) return;

        $GLOBAL_SEARCH_MERGE = $this->merge($this->merge($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_global.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/search_global.csv')), array(preg_replace("#^[^:/.]*[:/]+#i", "",
            preg_replace("{/$}", "", urldecode($GLOBALS['TARGET_HOST']))))), yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_global.csv'));

        $GLOBAL_REPLACE_MERGE = $this->merge($this->merge($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_global.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_global.csv')), array(preg_replace("#^[^:/.]*[:/]+#i", "",
            preg_replace("{/$}", "", urldecode($GLOBALS['SITE_HOST']))))), yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_global.csv'));

        $PATTERN_SEARCH_MERGE = array_filter($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_pattern.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/search_pattern.csv')));

        $PATTERN_REPLACE_MERGE = array_filter($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_pattern.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_pattern.csv')));

        $event['response']->setContent($this->REWRITE(preg_replace($PATTERN_SEARCH_MERGE, $PATTERN_REPLACE_MERGE,
            str_replace($GLOBAL_SEARCH_MERGE, $GLOBAL_REPLACE_MERGE, $event['response']->getContent()))));
    }

    function merge($array1, $array2 = null, $array3 = null)
    {
        return (($array1 && is_array($array1) && $array2 && is_array($array2) && $array3 && is_array($array3))) ? array_filter(array_merge(array_merge((array)$array1, (array)$array2), (array)$array3), fn($value) => !is_null($value) && $value !== '') :
            (($array1 && is_array($array1) && $array2 && is_array($array2)) ? array_filter(array_merge((array)$array1, (array)$array2), fn($value) => !is_null($value) && $value !== '') : array_filter((array)$array1, fn($value) => !is_null($value) && $value !== ''));
    }

    public function REWRITE($content): string
    {
        return ($GLOBALS['MIME'] === 'text/html') ? preg_replace_callback("(<x>(.*?)</x>)", static function ($m) {
            return str_replace(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_rewrite.csv'), yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_rewrite.csv'), $m[1]);
        }, (($GLOBALS['MIME'] === 'text/html') ? (new HtmlMinify($content))->process() : $content)) : $content;
    }
}

