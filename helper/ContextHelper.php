<?php namespace yxorP\Helper;

use stdClass;
use yxorP\Domain\Domain;
use yxorP\Domain\Rules;

class ContextHelper
{
    public static function helper()
    {
        $publicSuffixList = Rules::fromPath($GLOBALS['PLUGIN_DIR'] . '/override/global/includes/public-suffix-list.dat');
        $domain = Domain::fromIDNA2008("$_SERVER[HTTP_HOST]");
        $result = $publicSuffixList->resolve($domain);
        $GLOBALS['SITE_CONTEXT'] = new stdClass();
        $GLOBALS['SITE_CONTEXT']->SITE_DOMAIN = $result->domain()->toString();
        $GLOBALS['SITE_CONTEXT']->SITE = $GLOBALS['APP']->storage->findOne('collections/sites', ['host'=>$GLOBALS['SITE_CONTEXT']->SITE_DOMAIN]);
        $GLOBALS['GLOBAL_REPLACE'] = $GLOBALS['APP']->storage->findOne('collections/global', ['type'=>'replace'])['value'];
        $GLOBALS['GLOBAL_PATTERN'] = $GLOBALS['APP']->storage->findOne('collections/global', ['type'=>'pattern'])['value'];
        $GLOBALS['SITE_CONTEXT']->SITE_URL = (str_contains($_SERVER['SERVER_NAME'], "localhost") ? "http://" : "https://") . $GLOBALS['SITE_CONTEXT']->SITE_DOMAIN;
        $GLOBALS['SITE_CONTEXT']->TARGET_URL = "https://" . ($publicSuffixList->resolve( ($result->subDomain()->toString() ? $result->subDomain()->toString() . "." : null) . $GLOBALS['SITE_CONTEXT']->SITE['target']))->domain()->toString();
        $GLOBALS['SITE_CONTEXT']->PROXY_URL = $GLOBALS['SITE_CONTEXT']->TARGET_URL . $_SERVER['REQUEST_URI'];
        $GLOBALS['SITE_CONTEXT']->DIR_FULL = $GLOBALS['PLUGIN_DIR'] . '/override/' . $GLOBALS['SITE_CONTEXT']->SITE['dir'];
        MimeHelper::helper();
    }
}