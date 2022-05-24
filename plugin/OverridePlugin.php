<?php /* yxorP */
use yxorP;
use yxorP\http\ProxyEvent;

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

        $PATTERN_SEARCH_MERGE = array_filter($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_pattern.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/search_pattern.csv')));

        $GLOBAL_REPLACE_MERGE = $this->merge($this->merge($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_global.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_global.csv')), array(preg_replace("#^[^:/.]*[:/]+#i", "",
            preg_replace("{/$}", "", urldecode($GLOBALS['SITE_HOST']))))), yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_global.csv'));

        $PATTERN_REPLACE_MERGE = array_filter($this->merge(yxorp::CSV($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_pattern.csv'),
            yxorp::CSV($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_pattern.csv')));

        $event['response']->setContent(preg_replace($PATTERN_SEARCH_MERGE, $PATTERN_REPLACE_MERGE,
            str_replace($GLOBAL_SEARCH_MERGE, $GLOBAL_REPLACE_MERGE, $event['response']->getContent())));

    }


    function merge($array1, $array2, $array3 = array())
    {
        if (!$array1 || !is_array($array1)) return (array)$array2;
        if (!$array2 || !is_array($array2)) return (array)$array1;
        if (!$array3 || !is_array($array3)) return array_filter(array_merge((array)$array1, (array)$array2), fn($value) => !is_null($value) && $value !== '');
        return array_filter(array_merge((array)$array1, (array)$array2, (array)$array3), fn($value) => !is_null($value) && $value !== '');
    }
}
