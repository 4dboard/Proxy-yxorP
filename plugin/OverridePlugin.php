<?php /* yxorP */

use yxorP\http\ProxyEvent;

class OverridePlugin extends AbstractPlugin
{

    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public function onCompleted(ProxyEvent $event)
    {
        if ($GLOBALS['MIME'] !== 'text/html'
            && $GLOBALS['MIME'] !== 'application/javascript'
            && $GLOBALS['MIME'] !== 'text/css') {
            return;
        }

        $GLOBALS['PATTERN_SEARCH_MERGE_KEY'] = base64_encode($GLOBALS['SITE_HOST']
            . '_pattern_search_merge');
        $GLOBALS['PATTERN_REPLACE_MERGE_KEY'] = base64_encode($GLOBALS['SITE_HOST']
            . '_pattern_replace_merge');
        $GLOBALS['GLOBAL_SEARCH_MERGE_KEY'] = base64_encode($GLOBALS['SITE_HOST']
            . '_global_search_merge');
        $GLOBALS['GLOBAL_REPLACE_MERGE_KEY'] = base64_encode($GLOBALS['SITE_HOST']
            . '_global_replace_merge');

        if (!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['PATTERN_SEARCH_MERGE_KEY'])) {
            $this->pattern_search_merge();
        }
        if (!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['PATTERN_REPLACE_MERGE_KEY'])) {
            $this->pattern_replace_merge();
        }
        if (!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['GLOBAL_SEARCH_MERGE_KEY'])) {
            $this->global_search_merge();
        }
        if (!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['GLOBAL_REPLACE_MERGE_KEY'])) {
            $this->global_replace_merge();
        }

        $event['response']->setContent(preg_replace($GLOBALS['CACHE_ADAPTER']->get($GLOBALS['PATTERN_SEARCH_MERGE_KEY']), $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['PATTERN_REPLACE_MERGE_KEY']), str_replace($GLOBALS['CACHE_ADAPTER']->get($GLOBALS['GLOBAL_SEARCH_MERGE_KEY']),
            $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['GLOBAL_REPLACE_MERGE_KEY']),
            $event['response']->getContent())));
    }



    function pattern_search_merge()
    {

        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['PATTERN_SEARCH_MERGE_KEY'],
            $this->merge(fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_pattern.csv', 'rb')),
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/search_pattern.csv', 'rb'))), $GLOBALS['CACHE_TIME']);

    }


    function pattern_replace_merge()
    {

        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['PATTERN_REPLACE_MERGE_KEY'],
            $this->merge(fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_pattern.csv', 'rb')),
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_pattern.csv', 'rb'))), $GLOBALS['CACHE_TIME']);

    }


    function merge($array1, $array2)
    {
        if (!$array1 || !is_array($array1)) return (array)$array2;
        if (!$array2 || !is_array($array2)) return (array)$array1;

        return array_filter(array_merge((array)$array1, (array)$array2), fn($value) => !is_null($value) && $value !== '');
    }

    function global_search_merge()
    {
        $_global_search_merge = $this->merge(
            fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_html.csv', 'rb')),
            fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/search_global.csv', 'rb')));

        if ($GLOBALS['MIME'] === 'text/html') {
            $_global_search_merge = $this->merge($_global_search_merge,
                fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_html.csv', 'rb')));
            $_global_search_merge = $this->merge($_global_search_merge,
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/search_html.csv', 'rb')));
        }

        if ($GLOBALS['MIME'] === 'application/javascript') {
            $_global_search_merge = $this->merge($_global_search_merge,
                fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_js.csv', 'rb')));
            $_global_search_merge = $this->merge($_global_search_merge,
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/search_js.csv', 'rb')));
        }

        if ($GLOBALS['MIME'] === 'text/css') {
            $_global_search_merge = $this->merge($_global_search_merge,
                fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/search_css.csv', 'rb')));
            $_global_search_merge = $this->merge($_global_search_merge,
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/search_css.csv', 'rb')));
        }

        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['GLOBAL_SEARCH_MERGE_KEY'], $_global_search_merge, $GLOBALS['CACHE_TIME']);

    }

    function global_replace_merge()
    {
        $_global_replace_merge = $this->merge(
            fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_html.csv', 'rb')),
            fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_global.csv', 'rb')));

        if ($GLOBALS['MIME'] === 'text/html') {
            $_global_replace_merge = $this->merge($_global_replace_merge,
                fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_html.csv', 'rb')));
            $_global_replace_merge = $this->merge($_global_replace_merge,
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_html.csv', 'rb')));
        }

        if ($GLOBALS['MIME'] === 'application/javascript') {
            $_global_replace_merge = $this->merge($_global_replace_merge,
                fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_js.csv', 'rb')));
            $_global_replace_merge = $this->merge($_global_replace_merge,
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_js.csv', 'rb')));
        }

        if ($GLOBALS['MIME'] === 'text/css') {
            $_global_replace_merge = $this->merge($_global_replace_merge,
                fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/includes/replace_css.csv', 'rb')));
            $_global_replace_merge = $this->merge($_global_replace_merge,
                fgetcsv(fopen($GLOBALS['OVERRIDE_DIR'] . '/includes/replace_css.csv', 'rb')));
        }

        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['GLOBAL_REPLACE_MERGE_KEY'], $_global_replace_merge, $GLOBALS['CACHE_TIME']);

    }


}
