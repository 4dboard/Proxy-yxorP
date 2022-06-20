<?php namespace yxorP\Helper;

use stdClass;
use yxorP\Domain\Domain;
use yxorP\Domain\Rules;
use yxorP\Http\EventWrapper;
use yxorP\http\ProxyEvent;

class ContextHelper extends EventWrapper
{
    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public function __construct()
    {
        $publicSuffixList = Rules::fromPath($GLOBALS['PLUGIN_DIR'] . '/override/default/assets/public-suffix-list.dat');
        $domain = Domain::fromIDNA2008("$_SERVER[HTTP_HOST]");
        $result = $publicSuffixList->resolve($domain);
        $GLOBALS['SITE_CONTEXT'] = new stdClass();
        $GLOBALS['SITE_CONTEXT']->SITE_URL = (str_contains($_SERVER['SERVER_NAME'], "localhost") ? "http://" : "https://") . $result->domain()->toString();
        foreach ((array)APIHelper::fetch('Sites') as $key => $value) if (str_contains($result->domain()->toString(), $key)) $GLOBALS['SITE_CONTEXT'] = $value;
        $_targetSub = $result->subDomain()->toString() ? $result->subDomain()->toString() . "." : null;
        $GLOBALS['SITE_CONTEXT']->TARGET_URL = "https://" . ($publicSuffixList->resolve($_targetSub . $GLOBALS['APP']->storage->findOne('collections/sites', ['host'=>$result->domain()->toString()])['target']))->domain()->toString();
        $GLOBALS['SITE_CONTEXT']->PROXY_URL = $GLOBALS['SITE_CONTEXT']->TARGET_URL . $_SERVER['REQUEST_URI'];
        $GLOBALS['SITE_CONTEXT']->CACHE_DIR = $GLOBALS['PLUGIN_DIR'] . "/.cache/";
        $GLOBALS['SITE_CONTEXT']->DIR_FULL = $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['APP']->storage->findOne('collections/sites', ['host'=>$result->domain()->toString()])['dir'];
        new CacheHelper();
    }
}