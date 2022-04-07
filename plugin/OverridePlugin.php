<?php /* yxorP */

use yxorP\http\ProxyEvent;

class OverridePlugin extends AbstractPlugin
{

    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public function onCompleted(ProxyEvent $event)
    {
        $response = $event['response'];
        $html = $response->getContent();

        if ($GLOBALS['MIME'] !== 'text/html' && $GLOBALS['MIME'] !== 'application/javascript' && $GLOBALS['MIME'] !== 'text/css') {
            return;
        }

        $GLOBALS['PATTERN_SEARCH_MERGE_KEY']=base64_encode($GLOBALS['SITE_HOST'] . '_pattern_search_merge');
        $GLOBALS['PATTERN_REPLACE_MERGE_KEY']=base64_encode($GLOBALS['SITE_HOST'].'_pattern_replace_merge');
        $GLOBALS['GLOBAL_SEARCH_MERGE_KEY']=base64_encode($GLOBALS['SITE_HOST'].'_global_search_merge');
        $GLOBALS['GLOBAL_REPLACE_MERGE_KEY']=base64_encode($GLOBALS['SITE_HOST'].'_global_replace_merge');

        if(!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['GLOBAL_SEARCH_MERGE_KEY'])) $this->global_search_merge();
        if(!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['GLOBAL_REPLACE_MERGE_KEY'])) $this->global_replace_merge();
        if(!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['PATTERN_SEARCH_MERGE_KEY'])) $this->pattern_search_merge();
        if(!$GLOBALS['CACHE_ADAPTER']->isExisting($GLOBALS['PATTERN_REPLACE_MERGE_KEY'])) $this->pattern_search_merge();

        $this->ACTION($response, $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['PATTERN_SEARCH_MERGE_KEY']), $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['PATTERN_REPLACE_MERGE_KEY']), $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['GLOBAL_SEARCH_MERGE_KEY']), $GLOBALS['CACHE_ADAPTER']->get($GLOBALS['GLOBAL_REPLACE_MERGE_KEY']), $html);

    }


    function ACTION($response, $_pattern_search_merge, $_pattern_replace_merge, $_global_search_merge, $_global_replace_merge, $html){

        $response->setContent(preg_replace($_pattern_search_merge, $_pattern_replace_merge, str_replace($_global_search_merge, $_global_replace_merge, $html)));

    }


    function global_search_merge(){


        $_global_search_merge = [];

        if ($GLOBALS['MIME'] === 'text/html' && !empty($_global_search_html = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/search_global_html.csv', 'rb')))) {
            $_global_search_merge = array_merge($_global_search_merge, $_global_search_html);
        }

        if ($GLOBALS['MIME'] === 'text/html' && !empty($GLOBALS['SEARCH_HTML']) ) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_HTML']);
        }

        if ($GLOBALS['MIME'] === 'application/javascript' && !empty($GLOBALS['SEARCH_JS']) ) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_JS']);
        }

        if ($GLOBALS['MIME'] === 'text/css' && !empty($GLOBALS['SEARCH_CSS'] )) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_CSS']);
        }

        if (!empty($GLOBALS['SEARCH_PATTERN'])) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_GLOBAL']);
        }

        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['GLOBAL_SEARCH_MERGE_KEY'], $_global_search_merge, $GLOBALS['CACHE_TIME']);

    }

    function global_replace_merge(){
        $_global_replace_merge = [];


        if ($GLOBALS['MIME'] === 'text/html' && !empty($_global_replace_html = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/replace_global_html.csv', 'rb')))) {
            $_global_replace_merge = array_merge($_global_replace_merge, $_global_replace_html);
        }

        if ($GLOBALS['MIME'] === 'text/html'  && !empty($GLOBALS['REPLACE_HTML'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_HTML']);
        }

        if ($GLOBALS['MIME'] === 'application/javascript' && !empty($GLOBALS['REPLACE_JS'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_JS']);
        }

        if ($GLOBALS['MIME'] === 'text/css'  && !empty($GLOBALS['REPLACE_CSS'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_CSS']);
        }

        if ( !empty($GLOBALS['REPLACE_PATTERN'])) {

            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_GLOBAL']);

        }
        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['GLOBAL_REPLACE_MERGE_KEY'],$_global_replace_merge, $GLOBALS['CACHE_TIME']);

    }

    function pattern_search_merge(){


        $_pattern_search_merge = [];

        if (!empty($_global_search_pattern = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/search_global_pattern.csv', 'rb'))) ) {
            $_pattern_search_merge = array_merge($_pattern_search_merge, $_global_search_pattern);
        }

        if (!empty($GLOBALS['SEARCH_PATTERN'])) {
            $_pattern_search_merge = array_merge($_pattern_search_merge, $GLOBALS['SEARCH_PATTERN']);
        }


        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['PATTERN_SEARCH_MERGE_KEY'], $_pattern_search_merge, $GLOBALS['CACHE_TIME']);

    }

    function pattern_replace_merge(){

        $_pattern_replace_merge = [];

        if (!empty($_global_replace_pattern = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/replace_global_pattern.csv', 'rb')))) {
            $_pattern_replace_merge = array_merge($_pattern_replace_merge, $_global_replace_pattern);
        }

        if ( !empty($GLOBALS['REPLACE_PATTERN'])) {
            $_pattern_replace_merge = array_merge($_pattern_replace_merge, $GLOBALS['REPLACE_PATTERN']);
        }

        $GLOBALS['CACHE_ADAPTER']->set($GLOBALS['PATTERN_REPLACE_MERGE_KEY'],$_pattern_replace_merge, $GLOBALS['CACHE_TIME']);

    }


}
