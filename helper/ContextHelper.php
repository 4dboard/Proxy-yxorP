<?php namespace yxorP\Helpers;

use stdClass;
use yxorP\Domain\Domain;
use yxorP\Domain\Rules;

class ContextHelper
{
    public function __construct()
    {
        $publicSuffixList = Rules::fromPath($GLOBALS['PLUGIN_DIR'] . '/override/default/assets/public-suffix-list.dat');
        $domain = Domain::fromIDNA2008("$_SERVER[HTTP_HOST]");
        $result = $publicSuffixList->resolve($domain);
        $GLOBALS['SITE_CONTEXT'] = new stdClass();
        foreach ((array)json_decode(file_get_contents($GLOBALS['PLUGIN_DIR'] . '/override/default/overrides.json')) as $key => $value) if (str_contains($result->domain()->toString(), $key)) $GLOBALS['SITE_CONTEXT'] = $value;
        $GLOBALS['SITE_CONTEXT']->SITE_URL = "https://" . $result->domain()->toString();
        $_targetSub = $result->subDomain()->toString() ? $result->subDomain()->toString() . "." : null;
        $GLOBALS['SITE_CONTEXT']->TARGET_URL = "https://" . ($publicSuffixList->resolve($_targetSub . $GLOBALS['SITE_CONTEXT']->TARGET))->domain()->toString();
        $GLOBALS['SITE_CONTEXT']->PROXY_URL = $GLOBALS['SITE_CONTEXT']->TARGET_URL . $_SERVER['REQUEST_URI'];
        $GLOBALS['SITE_CONTEXT']->CACHE_DIR = $GLOBALS['PLUGIN_DIR'] . "/.cache/";
        $GLOBALS['SITE_CONTEXT']->DIR_FULL = $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['SITE_CONTEXT']->DIR;
        new CacheHelper();
    }
}

;
return 1; ?><?php return 1; ?>