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

        if ($GLOBALS['MIME'] !== 'text/html' && $GLOBALS['MIME'] !== 'application/x-javascript' && $GLOBALS['MIME'] !== 'text/css') {
            return;
        }

        $_pattern_search_merge = $_pattern_replace_merge = $_global_search_merge = $_global_replace_merge = [];

        if (!empty($_global_search_pattern = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/search_global_pattern.csv', 'rb')))) {
            $_pattern_search_merge = array_merge($_pattern_search_merge, $_global_search_pattern);
        }
        if (!empty($_global_replace_pattern = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/replace_global_pattern.csv', 'rb')))) {
            $_pattern_replace_merge = array_merge($_pattern_replace_merge, $_global_replace_pattern);
        }

        if ($GLOBALS['MIME'] === 'text/html' && !empty($_global_search_html = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/search_global_html.csv', 'rb')))) {
            $_global_search_merge = array_merge($_global_search_merge, $_global_search_html);
        }
        if ($GLOBALS['MIME'] === 'text/html' && !empty($_global_replace_html = fgetcsv(fopen($GLOBALS['PLUGIN_DIR'] . '/override/default/replace_global_html.csv', 'rb')))) {
            $_global_replace_merge = array_merge($_global_replace_merge, $_global_replace_html);
        }

        if ($GLOBALS['MIME'] === 'text/html' && !empty($GLOBALS['SEARCH_HTML'])) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_HTML']);
        }
        if ($GLOBALS['MIME'] === 'text/html' && !empty($GLOBALS['REPLACE_HTML'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_HTML']);
        }

        if ($GLOBALS['MIME'] === 'application/x-javascript' && !empty($GLOBALS['SEARCH_JS'])) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_JS']);
        }
        if ($GLOBALS['MIME'] === 'application/x-javascript' && !empty($GLOBALS['REPLACE_JS'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_JS']);
        }

        if ($GLOBALS['MIME'] === 'text/css' && !empty($GLOBALS['SEARCH_CSS'])) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_CSS']);
        }
        if ($GLOBALS['MIME'] === 'text/css' && !empty($GLOBALS['REPLACE_CSS'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_CSS']);
        }

        if (!empty($GLOBALS['SEARCH_GLOBAL'])) {
            $_global_search_merge = array_merge($_global_search_merge, $GLOBALS['SEARCH_GLOBAL']);
        }
        if (!empty($GLOBALS['REPLACE_GLOBAL'])) {
            $_global_replace_merge = array_merge($_global_replace_merge, $GLOBALS['REPLACE_GLOBAL']);
        }

        if (!empty($GLOBALS['SEARCH_PATTERN'])) {
            $_pattern_search_merge = array_merge($_pattern_search_merge, $GLOBALS['SEARCH_PATTERN']);
        }
        if (!empty($GLOBALS['REPLACE_PATTERN'])) {
            $_pattern_replace_merge = array_merge($_pattern_replace_merge, $GLOBALS['REPLACE_PATTERN']);
        }

        $response->setContent(preg_replace($_pattern_search_merge, $_pattern_replace_merge, str_replace($_global_search_merge, $_global_replace_merge, $html)));

    }

}
