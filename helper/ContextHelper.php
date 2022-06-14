<?php /* yxorP */

namespace yxorP\Helpers;

use stdClass;

class ContextHelper
{
    public function __construct()
    {
        $GLOBALS['SITE_CONTEXT'] = new stdclass();

        list($subdomain, $domain) = (str_contains($_SERVER['SERVER_NAME']->SITE_URL, "localhost"))  ?
            [error_reporting(), 'localhost'] : explode('.', $_SERVER['SERVER_NAME'], 2);

        foreach ((array)json_decode(file_get_contents($GLOBALS['PLUGIN_DIR'] . '/override/default/overrides.json')) as $key => $value)
            if ($domain && str_contains($domain, $key) || ($subdomain && str_contains($subdomain, $key))) $GLOBALS['SITE_CONTEXT'] = $value;

        $GLOBALS['SITE_CONTEXT']->SUBDOMAIN = $subdomain;
        $GLOBALS['SITE_CONTEXT']->DOMAIN = $domain;
        $GLOBALS['SITE_CONTEXT']->SITE_HOST = $_SERVER['HTTP_HOST'];
        $GLOBALS['SITE_CONTEXT']->SITE_URL = 'https://' . $GLOBALS['SITE_CONTEXT']->SUBDOMAIN . ($GLOBALS['SITE_CONTEXT']->SITE_HOST);
        $GLOBALS['SITE_CONTEXT']->TARGET_URL = 'https://' . $GLOBALS['SITE_CONTEXT']->SUBDOMAIN . ($GLOBALS['SITE_CONTEXT']->TARGET);
        $GLOBALS['SITE_CONTEXT']->REQUEST_URI = $_SERVER['REQUEST_URI'];
        $GLOBALS['SITE_CONTEXT']->PROXY_URL = $GLOBALS['SITE_CONTEXT']->TARGET_URL . ($GLOBALS['SITE_CONTEXT']->REQUEST_URI);
        $GLOBALS['SITE_CONTEXT']->CACHE_DIR = $GLOBALS['PLUGIN_DIR'] . "/.cache/";
        $GLOBALS['SITE_CONTEXT']->DIR_FULL =  $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['SITE_CONTEXT']->DIR;

        new CacheHelper();

    }
}
