<?php namespace yxorP\Helper;

use RuntimeException;
use yxorP\Cache\Cache;
use yxorP\Http\EventWrapper;
use yxorP\http\ProxyEvent;

class CacheHelper extends EventWrapper
{
    public function onBeforeRequest(ProxyEvent $event)
    {
    }

    public function __construct()
    {
        $GLOBALS['SITE_CONTEXT']->CACHE_DIR = $GLOBALS['SITE_CONTEXT']->CACHE_DIR . "/cache";
        if (!file_exists($GLOBALS['SITE_CONTEXT']->CACHE_DIR) && !mkdir($concurrentDirectory = $GLOBALS['SITE_CONTEXT']->CACHE_DIR, 0777, true) && !is_dir($concurrentDirectory)) {
            throw new RuntimeException(sprintf('Directory "%s" was not created', $concurrentDirectory));
        }
        $GLOBALS['CACHE_KEY'] = base64_encode($GLOBALS['SITE_CONTEXT']->PROXY_URL);
        $GLOBALS['CACHE_TIME'] = @time() + (60 * 60 * 24 * 31 * 365);
        if (isset($_GET["CLECHE"])) {
            Cache::cache($GLOBALS['CACHE_KEY'])->clearAll();
        }
        new MimeHelper();
    }
}

